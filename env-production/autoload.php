<?php
//
// File generated on 2025-04-24T09:42:48+0200
// Please do not edit manually
//
MetaModel::IncludeModule(MODULESROOT.'/core/main.php');
MetaModel::IncludeModule(MODULESROOT.'/authent-cas/vendor/autoload.php');
MetaModel::IncludeModule(MODULESROOT.'/authent-cas/src/CASLoginExtension.php');
MetaModel::IncludeModule(MODULESROOT.'/authent-external/model.authent-external.php');
MetaModel::IncludeModule(MODULESROOT.'/authent-ldap/model.authent-ldap.php');
MetaModel::IncludeModule(MODULESROOT.'/authent-local/model.authent-local.php');
MetaModel::IncludeModule(MODULESROOT.'/combodo-password-expiration/src/Service/PasswordExpiration.php');
MetaModel::IncludeModule(MODULESROOT.'/combodo-password-expiration/model.combodo-password-expiration.php');
MetaModel::IncludeModule(MODULESROOT.'/itop-attachments/vendor/autoload.php');
MetaModel::IncludeModule(MODULESROOT.'/itop-attachments/main.itop-attachments.php');
MetaModel::IncludeModule(MODULESROOT.'/itop-attachments/renderers.itop-attachments.php');
MetaModel::IncludeModule(MODULESROOT.'/itop-attachments/model.itop-attachments.php');
MetaModel::IncludeModule(MODULESROOT.'/itop-backup/main.itop-backup.php');
MetaModel::IncludeModule(MODULESROOT.'/itop-backup/model.itop-backup.php');
MetaModel::IncludeModule(MODULESROOT.'/itop-config/src/Validator/ConfigNodesVisitor.php');
MetaModel::IncludeModule(MODULESROOT.'/itop-config/src/Validator/iTopConfigAstValidator.php');
MetaModel::IncludeModule(MODULESROOT.'/itop-config/src/Validator/iTopConfigSyntaxValidator.php');
MetaModel::IncludeModule(MODULESROOT.'/itop-config/model.itop-config.php');
MetaModel::IncludeModule(MODULESROOT.'/itop-files-information/src/Service/FilesInformation.php');
MetaModel::IncludeModule(MODULESROOT.'/itop-files-information/src/Service/FilesInformationException.php');
MetaModel::IncludeModule(MODULESROOT.'/itop-files-information/src/Service/FilesInformationUtils.php');
MetaModel::IncludeModule(MODULESROOT.'/itop-files-information/src/Service/FilesIntegrity.php');
MetaModel::IncludeModule(MODULESROOT.'/itop-portal-base/portal/vendor/autoload.php');
MetaModel::IncludeModule(MODULESROOT.'/itop-portal-base/model.itop-portal-base.php');
MetaModel::IncludeModule(MODULESROOT.'/itop-portal/main.itop-portal.php');
MetaModel::IncludeModule(MODULESROOT.'/itop-profiles-itil/model.itop-profiles-itil.php');
MetaModel::IncludeModule(MODULESROOT.'/itop-sla-computation/main.itop-sla-computation.php');
MetaModel::IncludeModule(MODULESROOT.'/itop-structure/main.itop-structure.php');
MetaModel::IncludeModule(MODULESROOT.'/itop-structure/model.itop-structure.php');
MetaModel::IncludeModule(MODULESROOT.'/itop-tickets/main.itop-tickets.php');
MetaModel::IncludeModule(MODULESROOT.'/itop-tickets/model.itop-tickets.php');
MetaModel::IncludeModule(MODULESROOT.'/itop-welcome-itil/model.itop-welcome-itil.php');
MetaModel::IncludeModule(MODULESROOT.'/authent-token/vendor/autoload.php');
MetaModel::IncludeModule(MODULESROOT.'/authent-token/src/Model/PersonalTokenMenu.php');
MetaModel::IncludeModule(MODULESROOT.'/authent-token/src/Model/AbstractPersonalToken.php');
MetaModel::IncludeModule(MODULESROOT.'/authent-token/src/Hook/TokenLoginExtension.php');
MetaModel::IncludeModule(MODULESROOT.'/authent-token/src/Hook/LegacyTokenLoginExtension.php');
MetaModel::IncludeModule(MODULESROOT.'/authent-token/src/Model/AbstractApplicationToken.php');
MetaModel::IncludeModule(MODULESROOT.'/authent-token/src/Hook/MyAccountPopupMenuExtension.php');
MetaModel::IncludeModule(MODULESROOT.'/authent-token/model.authent-token.php');
MetaModel::IncludeModule(MODULESROOT.'/combodo-db-tools/src/Service/DBToolsUtils.php');
MetaModel::IncludeModule(MODULESROOT.'/combodo-db-tools/src/Service/DBAnalyzerUtils.php');
MetaModel::IncludeModule(MODULESROOT.'/combodo-db-tools/model.combodo-db-tools.php');
MetaModel::IncludeModule(MODULESROOT.'/itop-config-mgmt/model.itop-config-mgmt.php');
MetaModel::IncludeModule(MODULESROOT.'/itop-config-mgmt/main.itop-config-mgmt.php');
MetaModel::IncludeModule(MODULESROOT.'/itop-core-update/src/Service/RunTimeEnvironmentCoreUpdater.php');
MetaModel::IncludeModule(MODULESROOT.'/itop-core-update/src/Service/CoreUpdater.php');
MetaModel::IncludeModule(MODULESROOT.'/itop-core-update/src/Controller/UpdateController.php');
MetaModel::IncludeModule(MODULESROOT.'/itop-core-update/src/Controller/AjaxController.php');
MetaModel::IncludeModule(MODULESROOT.'/itop-core-update/model.itop-core-update.php');
MetaModel::IncludeModule(MODULESROOT.'/itop-datacenter-mgmt/model.itop-datacenter-mgmt.php');
MetaModel::IncludeModule(MODULESROOT.'/itop-endusers-devices/model.itop-endusers-devices.php');
MetaModel::IncludeModule(MODULESROOT.'/itop-faq-light/model.itop-faq-light.php');
MetaModel::IncludeModule(MODULESROOT.'/itop-hub-connector/menus.php');
MetaModel::IncludeModule(MODULESROOT.'/itop-hub-connector/hubnewsroomprovider.class.inc.php');
MetaModel::IncludeModule(MODULESROOT.'/itop-incident-mgmt-itil/model.itop-incident-mgmt-itil.php');
MetaModel::IncludeModule(MODULESROOT.'/itop-knownerror-mgmt/model.itop-knownerror-mgmt.php');
MetaModel::IncludeModule(MODULESROOT.'/itop-oauth-client/vendor/autoload.php');
MetaModel::IncludeModule(MODULESROOT.'/itop-oauth-client/src/Service/PopupMenuExtension.php');
MetaModel::IncludeModule(MODULESROOT.'/itop-oauth-client/src/Service/ApplicationUIExtension.php');
MetaModel::IncludeModule(MODULESROOT.'/itop-oauth-client/model.itop-oauth-client.php');
MetaModel::IncludeModule(MODULESROOT.'/itop-problem-mgmt/model.itop-problem-mgmt.php');
MetaModel::IncludeModule(MODULESROOT.'/itop-request-mgmt-itil/main.itop-request-mgmt-itil.php');
MetaModel::IncludeModule(MODULESROOT.'/itop-request-mgmt-itil/model.itop-request-mgmt-itil.php');
MetaModel::IncludeModule(MODULESROOT.'/itop-service-mgmt/model.itop-service-mgmt.php');
MetaModel::IncludeModule(MODULESROOT.'/itop-storage-mgmt/model.itop-storage-mgmt.php');
MetaModel::IncludeModule(MODULESROOT.'/itop-virtualization-mgmt/model.itop-virtualization-mgmt.php');
MetaModel::IncludeModule(MODULESROOT.'/combodo-webhook-integration/vendor/autoload.php');
MetaModel::IncludeModule(MODULESROOT.'/combodo-webhook-integration/SendWebRequest.php');
MetaModel::IncludeModule(MODULESROOT.'/combodo-webhook-integration/model.combodo-webhook-integration.php');
MetaModel::IncludeModule(MODULESROOT.'/itop-bridge-cmdb-services/model.itop-bridge-cmdb-services.php');
MetaModel::IncludeModule(MODULESROOT.'/itop-bridge-cmdb-ticket/model.itop-bridge-cmdb-ticket.php');
MetaModel::IncludeModule(MODULESROOT.'/itop-bridge-virtualization-storage/model.itop-bridge-virtualization-storage.php');
MetaModel::IncludeModule(MODULESROOT.'/itop-change-mgmt-itil/model.itop-change-mgmt-itil.php');
function GetModulesInfo()
{
$sCurrEnv = 'env-'.utils::GetCurrentEnvironment();
return array (
  'dictionaries' => 
  array (
    'root_dir' => 'dictionaries',
    'version' => '1.0',
  ),
  'core' => 
  array (
    'root_dir' => 'core',
    'version' => '1.0',
  ),
  'application' => 
  array (
    'root_dir' => 'application',
    'version' => '1.0',
  ),
  'authent-cas' => 
  array (
    'root_dir' => $sCurrEnv.'/authent-cas',
    'version' => '3.1.1',
  ),
  'authent-external' => 
  array (
    'root_dir' => $sCurrEnv.'/authent-external',
    'version' => '3.1.1',
  ),
  'authent-ldap' => 
  array (
    'root_dir' => $sCurrEnv.'/authent-ldap',
    'version' => '3.1.1',
  ),
  'authent-local' => 
  array (
    'root_dir' => $sCurrEnv.'/authent-local',
    'version' => '3.1.1',
  ),
  'combodo-backoffice-darkmoon-theme' => 
  array (
    'root_dir' => $sCurrEnv.'/combodo-backoffice-darkmoon-theme',
    'version' => '3.1.1',
  ),
  'combodo-password-expiration' => 
  array (
    'root_dir' => $sCurrEnv.'/combodo-password-expiration',
    'version' => '1.0.1',
  ),
  'itop-attachments' => 
  array (
    'root_dir' => $sCurrEnv.'/itop-attachments',
    'version' => '3.1.1',
  ),
  'itop-backup' => 
  array (
    'root_dir' => $sCurrEnv.'/itop-backup',
    'version' => '3.1.1',
  ),
  'itop-config' => 
  array (
    'root_dir' => $sCurrEnv.'/itop-config',
    'version' => '3.1.1',
  ),
  'itop-files-information' => 
  array (
    'root_dir' => $sCurrEnv.'/itop-files-information',
    'version' => '3.1.1',
  ),
  'itop-portal-base' => 
  array (
    'root_dir' => $sCurrEnv.'/itop-portal-base',
    'version' => '3.1.1',
  ),
  'itop-portal' => 
  array (
    'root_dir' => $sCurrEnv.'/itop-portal',
    'version' => '3.1.1',
  ),
  'itop-profiles-itil' => 
  array (
    'root_dir' => $sCurrEnv.'/itop-profiles-itil',
    'version' => '3.1.1',
  ),
  'itop-sla-computation' => 
  array (
    'root_dir' => $sCurrEnv.'/itop-sla-computation',
    'version' => '3.1.1',
  ),
  'itop-structure' => 
  array (
    'root_dir' => $sCurrEnv.'/itop-structure',
    'version' => '3.1.1',
  ),
  'itop-themes-compat' => 
  array (
    'root_dir' => $sCurrEnv.'/itop-themes-compat',
    'version' => '3.1.1',
  ),
  'itop-tickets' => 
  array (
    'root_dir' => $sCurrEnv.'/itop-tickets',
    'version' => '3.1.1',
  ),
  'itop-welcome-itil' => 
  array (
    'root_dir' => $sCurrEnv.'/itop-welcome-itil',
    'version' => '3.1.1',
  ),
  'authent-token' => 
  array (
    'root_dir' => $sCurrEnv.'/authent-token',
    'version' => '2.1.3',
  ),
  'combodo-db-tools' => 
  array (
    'root_dir' => $sCurrEnv.'/combodo-db-tools',
    'version' => '3.1.1',
  ),
  'itop-config-mgmt' => 
  array (
    'root_dir' => $sCurrEnv.'/itop-config-mgmt',
    'version' => '3.1.1',
  ),
  'itop-core-update' => 
  array (
    'root_dir' => $sCurrEnv.'/itop-core-update',
    'version' => '3.1.1',
  ),
  'itop-datacenter-mgmt' => 
  array (
    'root_dir' => $sCurrEnv.'/itop-datacenter-mgmt',
    'version' => '3.1.1',
  ),
  'itop-endusers-devices' => 
  array (
    'root_dir' => $sCurrEnv.'/itop-endusers-devices',
    'version' => '3.1.1',
  ),
  'itop-faq-light' => 
  array (
    'root_dir' => $sCurrEnv.'/itop-faq-light',
    'version' => '3.1.1',
  ),
  'itop-hub-connector' => 
  array (
    'root_dir' => $sCurrEnv.'/itop-hub-connector',
    'version' => '3.1.1',
  ),
  'itop-incident-mgmt-itil' => 
  array (
    'root_dir' => $sCurrEnv.'/itop-incident-mgmt-itil',
    'version' => '3.1.1',
  ),
  'itop-knownerror-mgmt' => 
  array (
    'root_dir' => $sCurrEnv.'/itop-knownerror-mgmt',
    'version' => '3.1.1',
  ),
  'itop-oauth-client' => 
  array (
    'root_dir' => $sCurrEnv.'/itop-oauth-client',
    'version' => '3.1.1',
  ),
  'itop-problem-mgmt' => 
  array (
    'root_dir' => $sCurrEnv.'/itop-problem-mgmt',
    'version' => '3.1.1',
  ),
  'itop-request-mgmt-itil' => 
  array (
    'root_dir' => $sCurrEnv.'/itop-request-mgmt-itil',
    'version' => '3.1.1',
  ),
  'itop-service-mgmt' => 
  array (
    'root_dir' => $sCurrEnv.'/itop-service-mgmt',
    'version' => '3.1.1',
  ),
  'itop-storage-mgmt' => 
  array (
    'root_dir' => $sCurrEnv.'/itop-storage-mgmt',
    'version' => '3.1.1',
  ),
  'itop-virtualization-mgmt' => 
  array (
    'root_dir' => $sCurrEnv.'/itop-virtualization-mgmt',
    'version' => '3.1.1',
  ),
  'combodo-webhook-integration' => 
  array (
    'root_dir' => $sCurrEnv.'/combodo-webhook-integration',
    'version' => '1.3.2',
  ),
  'itop-bridge-cmdb-services' => 
  array (
    'root_dir' => $sCurrEnv.'/itop-bridge-cmdb-services',
    'version' => '3.1.1',
  ),
  'itop-bridge-cmdb-ticket' => 
  array (
    'root_dir' => $sCurrEnv.'/itop-bridge-cmdb-ticket',
    'version' => '3.1.1',
  ),
  'itop-bridge-datacenter-mgmt-services' => 
  array (
    'root_dir' => $sCurrEnv.'/itop-bridge-datacenter-mgmt-services',
    'version' => '3.1.1',
  ),
  'itop-bridge-endusers-devices-services' => 
  array (
    'root_dir' => $sCurrEnv.'/itop-bridge-endusers-devices-services',
    'version' => '3.1.1',
  ),
  'itop-bridge-storage-mgmt-services' => 
  array (
    'root_dir' => $sCurrEnv.'/itop-bridge-storage-mgmt-services',
    'version' => '3.1.1',
  ),
  'itop-bridge-virtualization-mgmt-services' => 
  array (
    'root_dir' => $sCurrEnv.'/itop-bridge-virtualization-mgmt-services',
    'version' => '3.1.1',
  ),
  'itop-bridge-virtualization-storage' => 
  array (
    'root_dir' => $sCurrEnv.'/itop-bridge-virtualization-storage',
    'version' => '3.1.1',
  ),
  'itop-change-mgmt-itil' => 
  array (
    'root_dir' => $sCurrEnv.'/itop-change-mgmt-itil',
    'version' => '3.1.1',
  ),
  'itop-full-itil' => 
  array (
    'root_dir' => $sCurrEnv.'/itop-full-itil',
    'version' => '3.1.1',
  ),
);
}
