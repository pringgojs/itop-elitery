    <?php
    
    require_once('../approot.inc.php');
    
    function AppUpgradeCheckInstall() {
	    $sItopVersion = explode('-', ITOP_VERSION)[0];

		if ((version_compare($sItopVersion, '3.1.0')<0) || (version_compare($sItopVersion, '3.2.0')>=0)) {
			throw new Exception(ITOP_APPLICATION.' 3.1.1-1 cannot be installed automatically on '.ITOP_APPLICATION.' '.ITOP_VERSION.'. Please perform upgrade manually.');
		}
    }