<?php

namespace ContainerQbovrDH;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getPaginationRuntimeService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationRuntime' shared service.
     *
     * @return \Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationRuntime
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/twig/twig/src/Extension/RuntimeExtensionInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/knplabs/knp-paginator-bundle/src/Twig/Extension/PaginationRuntime.php';
        include_once \dirname(__DIR__, 4).'/vendor/knplabs/knp-paginator-bundle/src/Helper/Processor.php';

        return $container->privates['Knp\\Bundle\\PaginatorBundle\\Twig\\Extension\\PaginationRuntime'] = new \Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationRuntime(new \Knp\Bundle\PaginatorBundle\Helper\Processor(($container->services['router'] ?? $container->getRouterService()), ($container->services['translator'] ?? $container->getTranslatorService())));
    }
}
