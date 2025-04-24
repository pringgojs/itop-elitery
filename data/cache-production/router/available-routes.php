<?php

return array (
  'core_update.select_update_file' => 
  array (
    'namespace' => 'core_update',
    'operation' => 'select_update_file',
    'controller' => 'Combodo\\iTop\\CoreUpdate\\Controller\\UpdateController::OperationSelectUpdateFile',
    'description' => false,
  ),
  'core_update.confirm_update' => 
  array (
    'namespace' => 'core_update',
    'operation' => 'confirm_update',
    'controller' => 'Combodo\\iTop\\CoreUpdate\\Controller\\UpdateController::OperationConfirmUpdate',
    'description' => '/**
	 * @throws \\Exception
	 */',
  ),
  'core_update.update_core_files' => 
  array (
    'namespace' => 'core_update',
    'operation' => 'update_core_files',
    'controller' => 'Combodo\\iTop\\CoreUpdate\\Controller\\UpdateController::OperationUpdateCoreFiles',
    'description' => false,
  ),
  'core_update.run_setup' => 
  array (
    'namespace' => 'core_update',
    'operation' => 'run_setup',
    'controller' => 'Combodo\\iTop\\CoreUpdate\\Controller\\UpdateController::OperationRunSetup',
    'description' => false,
  ),
  'core_update_ajax.can_update_core' => 
  array (
    'namespace' => 'core_update_ajax',
    'operation' => 'can_update_core',
    'controller' => 'Combodo\\iTop\\CoreUpdate\\Controller\\AjaxController::OperationCanUpdateCore',
    'description' => false,
  ),
  'core_update_ajax.get_itop_disk_space' => 
  array (
    'namespace' => 'core_update_ajax',
    'operation' => 'get_itop_disk_space',
    'controller' => 'Combodo\\iTop\\CoreUpdate\\Controller\\AjaxController::OperationGetItopDiskSpace',
    'description' => false,
  ),
  'core_update_ajax.get_db_disk_space' => 
  array (
    'namespace' => 'core_update_ajax',
    'operation' => 'get_db_disk_space',
    'controller' => 'Combodo\\iTop\\CoreUpdate\\Controller\\AjaxController::OperationGetDBDiskSpace',
    'description' => false,
  ),
  'core_update_ajax.get_current_version' => 
  array (
    'namespace' => 'core_update_ajax',
    'operation' => 'get_current_version',
    'controller' => 'Combodo\\iTop\\CoreUpdate\\Controller\\AjaxController::OperationGetCurrentVersion',
    'description' => false,
  ),
  'core_update_ajax.enter_maintenance' => 
  array (
    'namespace' => 'core_update_ajax',
    'operation' => 'enter_maintenance',
    'controller' => 'Combodo\\iTop\\CoreUpdate\\Controller\\AjaxController::OperationEnterMaintenance',
    'description' => false,
  ),
  'core_update_ajax.exit_maintenance' => 
  array (
    'namespace' => 'core_update_ajax',
    'operation' => 'exit_maintenance',
    'controller' => 'Combodo\\iTop\\CoreUpdate\\Controller\\AjaxController::OperationExitMaintenance',
    'description' => false,
  ),
  'core_update_ajax.backup' => 
  array (
    'namespace' => 'core_update_ajax',
    'operation' => 'backup',
    'controller' => 'Combodo\\iTop\\CoreUpdate\\Controller\\AjaxController::OperationBackup',
    'description' => false,
  ),
  'core_update_ajax.files_archive' => 
  array (
    'namespace' => 'core_update_ajax',
    'operation' => 'files_archive',
    'controller' => 'Combodo\\iTop\\CoreUpdate\\Controller\\AjaxController::OperationFilesArchive',
    'description' => false,
  ),
  'core_update_ajax.copy_files' => 
  array (
    'namespace' => 'core_update_ajax',
    'operation' => 'copy_files',
    'controller' => 'Combodo\\iTop\\CoreUpdate\\Controller\\AjaxController::OperationCopyFiles',
    'description' => false,
  ),
  'core_update_ajax.check_compile' => 
  array (
    'namespace' => 'core_update_ajax',
    'operation' => 'check_compile',
    'controller' => 'Combodo\\iTop\\CoreUpdate\\Controller\\AjaxController::OperationCheckCompile',
    'description' => false,
  ),
  'core_update_ajax.compile' => 
  array (
    'namespace' => 'core_update_ajax',
    'operation' => 'compile',
    'controller' => 'Combodo\\iTop\\CoreUpdate\\Controller\\AjaxController::OperationCompile',
    'description' => false,
  ),
  'core_update_ajax.update_database' => 
  array (
    'namespace' => 'core_update_ajax',
    'operation' => 'update_database',
    'controller' => 'Combodo\\iTop\\CoreUpdate\\Controller\\AjaxController::OperationUpdateDatabase',
    'description' => false,
  ),
  'core_update_ajax.launch_setup' => 
  array (
    'namespace' => 'core_update_ajax',
    'operation' => 'launch_setup',
    'controller' => 'Combodo\\iTop\\CoreUpdate\\Controller\\AjaxController::OperationLaunchSetup',
    'description' => '/**
	 * @throws \\SecurityException if CSRF token invalid
	 *
	 * @since 3.1.0 N°4919
	 */',
  ),
  'object.new' => 
  array (
    'namespace' => 'object',
    'operation' => 'new',
    'controller' => 'Combodo\\iTop\\Controller\\Base\\Layout\\ObjectController::OperationNew',
    'description' => '/**
	 * @throws \\CoreException
	 * @throws \\MySQLHasGoneAwayException
	 * @throws \\MySQLException
	 * @throws \\DictExceptionMissingString
	 * @throws \\CoreUnexpectedValue
	 * @throws \\ConfigException
	 * @throws \\ApplicationException
	 * @throws \\MissingQueryArgument
	 */',
  ),
  'object.modify' => 
  array (
    'namespace' => 'object',
    'operation' => 'modify',
    'controller' => 'Combodo\\iTop\\Controller\\Base\\Layout\\ObjectController::OperationModify',
    'description' => '/**
	 * @return \\iTopWebPage|\\AjaxPage Object edit form in its webpage
	 * @throws \\ApplicationException
	 * @throws \\ArchivedObjectException
	 * @throws \\CoreException
	 * @throws \\SecurityException
	 * @throws \\Exception
	 */',
  ),
  'object.apply_new' => 
  array (
    'namespace' => 'object',
    'operation' => 'apply_new',
    'controller' => 'Combodo\\iTop\\Controller\\Base\\Layout\\ObjectController::OperationApplyNew',
    'description' => '/**
	 * @return \\iTopWebPage|\\JsonPage Object edit form in its webpage
	 * @throws \\ApplicationException
	 * @throws \\ArchivedObjectException
	 * @throws \\CoreException
	 * @throws \\SecurityException
	 */',
  ),
  'object.apply_modify' => 
  array (
    'namespace' => 'object',
    'operation' => 'apply_modify',
    'controller' => 'Combodo\\iTop\\Controller\\Base\\Layout\\ObjectController::OperationApplyModify',
    'description' => '/**
	 * @return \\iTopWebPage|\\JsonPage
	 * @throws \\ApplicationException
	 * @throws \\ArchivedObjectException
	 * @throws \\ConfigException
	 * @throws \\CoreException
	 * @throws \\CoreUnexpectedValue
	 * @throws \\DictExceptionMissingString
	 * @throws \\MySQLException
	 */',
  ),
  'object.summary' => 
  array (
    'namespace' => 'object',
    'operation' => 'summary',
    'controller' => 'Combodo\\iTop\\Controller\\Base\\Layout\\ObjectController::OperationSummary',
    'description' => false,
  ),
  'object.search' => 
  array (
    'namespace' => 'object',
    'operation' => 'search',
    'controller' => 'Combodo\\iTop\\Controller\\Base\\Layout\\ObjectController::OperationSearch',
    'description' => '/**
	 * OperationSearch.
	 *
	 * Search objects via an oql and a friendly name search string
	 *
	 * @return JsonPage
	 */',
  ),
  'object.get' => 
  array (
    'namespace' => 'object',
    'operation' => 'get',
    'controller' => 'Combodo\\iTop\\Controller\\Base\\Layout\\ObjectController::OperationGet',
    'description' => '/**
	 * OperationGet.
	 *
	 * @return JsonPage
	 */',
  ),
  'linkset.delete_linked_object' => 
  array (
    'namespace' => 'linkset',
    'operation' => 'delete_linked_object',
    'controller' => 'Combodo\\iTop\\Controller\\Links\\LinkSetController::OperationDeleteLinkedObject',
    'description' => '/**
	 * OperationDeleteLinkedObject.
	 *
	 * @return JsonPage
	 * @throws \\CoreException
	 */',
  ),
  'linkset.detach_linked_object' => 
  array (
    'namespace' => 'linkset',
    'operation' => 'detach_linked_object',
    'controller' => 'Combodo\\iTop\\Controller\\Links\\LinkSetController::OperationDetachLinkedObject',
    'description' => '/**
	 * OperationDetachLinkedObject.
	 *
	 * @return \\JsonPage
	 * @throws \\CoreException
	 */',
  ),
  'linkset.create_linked_object' => 
  array (
    'namespace' => 'linkset',
    'operation' => 'create_linked_object',
    'controller' => 'Combodo\\iTop\\Controller\\Links\\LinkSetController::OperationCreateLinkedObject',
    'description' => '/**
	 * @return \\AjaxPage Create edit form in its webpage
	 * @throws \\ApplicationException
	 * @throws \\ArchivedObjectException
	 * @throws \\CoreException
	 * @throws \\SecurityException
	 */',
  ),
  'linkset.get_remote_object' => 
  array (
    'namespace' => 'linkset',
    'operation' => 'get_remote_object',
    'controller' => 'Combodo\\iTop\\Controller\\Links\\LinkSetController::OperationGetRemoteObject',
    'description' => '/**
	 * OperationGetRemoteObject.
	 *
	 * @return JsonPage
	 */',
  ),
  'temporary_object.watch_dog' => 
  array (
    'namespace' => 'temporary_object',
    'operation' => 'watch_dog',
    'controller' => 'Combodo\\iTop\\Controller\\TemporaryObjects\\TemporaryObjectController::OperationWatchDog',
    'description' => '/**
	 * OperationWatchDog.
	 *
	 * Watchdog for delaying expiration date of temporary objects linked to the provided temporary id.
	 *
	 * @return JsonPage
	 */',
  ),
  'temporary_object.garbage' => 
  array (
    'namespace' => 'temporary_object',
    'operation' => 'garbage',
    'controller' => 'Combodo\\iTop\\Controller\\TemporaryObjects\\TemporaryObjectController::OperationGarbage',
    'description' => '/**
	 * OperationGarbage.
	 *
	 * Garbage temporary objects based on expiration date.
	 *
	 * @return JsonPage
	 */',
  ),
);