<?php

namespace Container2toRxO7;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_Errored__ServiceLocator_JLb91Z0_DateTimeInterfaceService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.errored..service_locator.jLb91Z0.DateTimeInterface' shared service.
     *
     * @return \DateTimeInterface
     */
    public static function do($container, $lazyLoad = true)
    {
        $container->throw('Cannot autowire service ".service_locator.jLb91Z0": it references interface "DateTimeInterface" but no such service exists. Did you create a class that implements this interface?');
    }
}
