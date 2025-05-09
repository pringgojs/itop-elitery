<?php

namespace Container7LIfrgT;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getBrowseBrickService extends Combodo_iTop_Portal_KernelProdContainer
{
    /*
     * Gets the public 'browse_brick' shared autowired service.
     *
     * @return \Combodo\iTop\Portal\Helper\BrowseBrickHelper
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 5).''.\DIRECTORY_SEPARATOR.'env-production'.\DIRECTORY_SEPARATOR.'itop-portal-base'.\DIRECTORY_SEPARATOR.'portal'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Helper'.\DIRECTORY_SEPARATOR.'BrowseBrickHelper.php';

        return $container->services['browse_brick'] = new \Combodo\iTop\Portal\Helper\BrowseBrickHelper(($container->services['security_helper'] ?? $container->load('getSecurityHelperService')), ($container->services['scope_validator'] ?? $container->load('getScopeValidatorService')), ($container->services['url_generator'] ?? $container->getUrlGeneratorService()));
    }
}
