<?php

namespace ContainerXbynCqT;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_GA9ZvFzService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.gA9ZvFz' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.gA9ZvFz'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'manager' => ['services', 'doctrine.orm.default_entity_manager', 'getDoctrine_Orm_DefaultEntityManagerService', false],
            'recipe' => ['privates', '.errored..service_locator.gA9ZvFz.App\\Entity\\Recipe', NULL, 'Cannot autowire service ".service_locator.gA9ZvFz": it needs an instance of "App\\Entity\\Recipe" but this type has been excluded in "config/services.yaml".'],
        ], [
            'manager' => '?',
            'recipe' => 'App\\Entity\\Recipe',
        ]);
    }
}
