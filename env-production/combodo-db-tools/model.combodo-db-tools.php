<?php
//
// File generated by ... on the 2025-04-24T09:42:35+0200
// Please do not edit manually
//

/**
 * Classes and menus for combodo-db-tools (version 3.1.1)
 *
 * @author      iTop compiler
 * @license     http://opensource.org/licenses/AGPL-3.0
 */

//
// Menus
//
class MenuCreation_combodo_db_tools extends ModuleHandlerAPI
{
	public static function OnMenuCreation()
	{
		global $__comp_menus__; // ensure that the global variable is indeed global !
		$__comp_menus__['SystemTools'] = new MenuGroup('SystemTools', 100, 'fas fa-terminal' , 'ResourceSystemMenu', UR_ACTION_MODIFY, UR_ALLOWED_YES, null);
		if (UserRights::IsAdministrator())
		{
			$__comp_menus__['DBToolsMenu'] = new WebPageMenuNode('DBToolsMenu', utils::GetAbsoluteUrlAppRoot()."pages/exec.php?exec_module=combodo-db-tools&exec_page=dbtools.php&c[menu]=DBToolsMenu", $__comp_menus__['SystemTools']->GetIndex(), 30 , null, UR_ACTION_MODIFY, UR_ALLOWED_YES, null);
		}
	}
} // class MenuCreation_combodo_db_tools
