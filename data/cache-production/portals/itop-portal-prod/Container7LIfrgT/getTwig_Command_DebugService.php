<?php

namespace Container7LIfrgT;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getTwig_Command_DebugService extends Combodo_iTop_Portal_KernelProdContainer
{
    /*
     * Gets the private 'twig.command.debug' shared service.
     *
     * @return \Symfony\Bridge\Twig\Command\DebugCommand
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 5).''.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'console'.\DIRECTORY_SEPARATOR.'Command'.\DIRECTORY_SEPARATOR.'Command.php';
        include_once \dirname(__DIR__, 5).''.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'twig-bridge'.\DIRECTORY_SEPARATOR.'Command'.\DIRECTORY_SEPARATOR.'DebugCommand.php';
        include_once \dirname(__DIR__, 5).''.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'http-kernel'.\DIRECTORY_SEPARATOR.'Debug'.\DIRECTORY_SEPARATOR.'FileLinkFormatter.php';

        $container->privates['twig.command.debug'] = $instance = new \Symfony\Bridge\Twig\Command\DebugCommand(($container->services['.container.private.twig'] ?? $container->load('get_Container_Private_TwigService')), (\dirname(__DIR__, 5).''.\DIRECTORY_SEPARATOR.'env-production'.\DIRECTORY_SEPARATOR.'itop-portal-base'.\DIRECTORY_SEPARATOR.'portal'), $container->parameters['kernel.bundles_metadata'], (\dirname(__DIR__, 5).'/env-production/'), ($container->privates['debug.file_link_formatter'] ?? ($container->privates['debug.file_link_formatter'] = new \Symfony\Component\HttpKernel\Debug\FileLinkFormatter(NULL))));

        $instance->setName('debug:twig');
        $instance->setDescription('Show a list of twig functions, filters, globals and tests');

        return $instance;
    }
}
