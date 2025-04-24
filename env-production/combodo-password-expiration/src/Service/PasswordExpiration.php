<?php
namespace Combodo\iTop\Extension\Service;

use AbstractLoginFSMExtension;
use DateTime;
use Dict;
use LoginWebPage;
use MetaModel;
use ormPassword;
use utils;
use UserLocal;
use UserRights;

/**
 * Handle password expiration schemes: UserLocal::EXPIRE_FORCE , UserLocal::EXPIRE_CAN and UserLocal::EXPIRE_ONE_TIME_PWD
 * @author denis
 *
 */
class PasswordExpiration extends AbstractLoginFSMExtension
{
	public function ListSupportedLoginModes()
	{
		return ['after'];
	}

	/**
	 * @param int $iErrorCode (see LoginWebPage::EXIT_CODE_...)
	 *
	 * @return int LoginWebPage::LOGIN_FSM_RETURN_ERROR, LoginWebPage::LOGIN_FSM_RETURN_OK or LoginWebPage::LOGIN_FSM_RETURN_IGNORE
	 */
	protected function OnCredentialsOK(&$iErrorCode)
	{
		$oUser = UserRights::GetUserObject();
		
		if ($oUser instanceof UserLocal)
		{
			if ($oUser->Get('expiration') == UserLocal::EXPIRE_FORCE)
			{
				// Forced expiration, must change the password before entering the application
				// Password has expired => redirect to the change password page with a message
				$_SESSION['pwd_issue'] = Dict::S('PwdExpirationEnforcement:PasswordExpired');
				$sUrl = utils::GetAbsoluteUrlAppRoot().'/pages/UI.php?loginop=change_pwd';
				header('Location: '.$sUrl);
				exit;
			}
			else if ($oUser->Get('expiration') == UserLocal::EXPIRE_ONE_TIME_PWD)
			{
				// One-time password
				// Change the password to a random value (15 chars long) after the first successful login
				$sClearTextPassword = $this->GenerateRandomPwd(15);
				$oHashedPassword = new ormPassword();
				$oHashedPassword->SetPassword($sClearTextPassword);
				// By passing an already hashed password we workaround the password validation policies
				// in order to make sure that the new password can be recorded
				$oUser->Set('password', $oHashedPassword);
				$oUser->AllowWrite(); // Bypass write access to ensure that we can change the password for any user
				$oUser->DBUpdate();
			}
			else if ($oUser->Get('expiration') == UserLocal::EXPIRE_CAN)
			{
				// Password can expire
				$iExpirationDelay = (int)MetaModel::GetModuleSetting('combodo-password-expiration', 'password_expiration_delay', 0);
				if ($iExpirationDelay > 0)
				{
					$oLatestPwdChangeDate = new DateTime($oUser->Get('password_renewed_date'));
					$oExpiration = clone $oLatestPwdChangeDate;
					$oExpiration->modify("+$iExpirationDelay day");
					$oToday = new DateTime();
					if ($oExpiration < $oToday)
					{
						// Password has expired => redirect to the change password page with a message
						$_SESSION['pwd_issue'] = Dict::S('PwdExpirationEnforcement:PasswordExpired');
						$sUrl = utils::GetAbsoluteUrlAppRoot().'/pages/UI.php?loginop=change_pwd';
						header('Location: '.$sUrl);
						exit;
					}
				}
			}
		}
		return parent::OnCredentialsOK($iErrorCode);
	}
	
	/**
	 * Generate a random password of the given length, by picking characters at random in a set of 5 different character classes
	 * If $iLength is greater than or equal to 5, then the password will contain at least one char from each of the 5 character classes.
	 * @param int $iLength
	 * @return string
	 */
	protected function GenerateRandomPwd($iLength)
	{
		$aClasses = [
			// Lowercase latin letters
			['a','b','c','d','e','f','g','h','i','j','k','l','m','n','o','p','q','r','s','t','u','v','w','x','y','z',],
			// Uppercase latin letters
			['A','B','C','D','E','F','G','H','I','J','K','L','M','N','O','P','Q','R','S','T','U','V','W','X','Y','Z',],
			// Digits
			['0','1','2','3','4','5','6','7','8','9',],
			// Symbols
			['[',']','|','^','/','\\','\'','"','!','§','*','$','&','~','#','{','}','_','-','%','=','+','°','`','@',],
			// More fun with accents
			['À','Á','Â','Ã','Ä','Å','Æ','Ç','È','É','Ê','Ë','Ì','Í','Î','Ï','Ð','Ñ','Ò','Ó','Ô','Õ','Ö','Ø','Ù','Ú','Û','Ü',
			 'Ý','Þ','ß','à','á','â','ã','ä','å','æ','ç','è','é','ê','ë','ì','í','î','ï','ð','ñ','ò','ó','ô','õ','ö','ø','ù',
			 'ú','û','ü','ý','þ','ÿ','Ā','ā','Ă','ă','Ą','ą','Ć','ć','Ĉ','ĉ','Ċ','ċ','Č','č','Ď','ď','Đ','đ','Ē','ē','Ĕ','ĕ',
			 'Ė','ė','Ę','ę','Ě','ě','ĝ','Ğ','ğ','Ġ','ġ','Ģ','ģ','Ĥ','ĥ'],
		];

		$idx = rand(0, count($aClasses) -1); // Pick a random class of characters to start from
		$sPassword = '';
		for($i=0; $i<$iLength; $i++)
		{
			$sPassword .= $aClasses[$idx][rand(0, count($aClasses[$idx]) - 1)]; // Pick a random character from the class
			$idx = (1+$idx) % count($aClasses); // Use the next class of chars for the next char
		}
		return $sPassword;
	}
}