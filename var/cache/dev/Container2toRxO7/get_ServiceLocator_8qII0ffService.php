<?php

namespace Container2toRxO7;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_8qII0ffService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.8qII0ff' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.8qII0ff'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'logger' => ['privates', 'monolog.logger', 'getMonolog_LoggerService', true],
            'uploadDir' => ['privates', '.value.TmjhK1g', 'get_Value_TmjhK1gService', true],
            'uploader' => ['privates', 'App\\Service\\FileUploader', 'getFileUploaderService', true],
        ], [
            'logger' => '?',
            'uploadDir' => '?',
            'uploader' => 'App\\Service\\FileUploader',
        ]);
    }
}
