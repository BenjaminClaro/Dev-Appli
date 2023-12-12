<?php

namespace ContainerPMVRhiM;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getTurbo_Doctrine_EventListenerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'turbo.doctrine.event_listener' shared service.
     *
     * @return \Symfony\UX\Turbo\Doctrine\BroadcastListener
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/ux-turbo/src/Doctrine/BroadcastListener.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/ux-turbo/src/Broadcaster/BroadcasterInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/ux-turbo/src/Broadcaster/TwigBroadcaster.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/ux-turbo/src/Broadcaster/ImuxBroadcaster.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/ux-turbo/src/Broadcaster/IdAccessor.php';

        return $container->privates['turbo.doctrine.event_listener'] = new \Symfony\UX\Turbo\Doctrine\BroadcastListener(new \Symfony\UX\Turbo\Broadcaster\TwigBroadcaster(new \Symfony\UX\Turbo\Broadcaster\ImuxBroadcaster(new RewindableGenerator(fn () => new \EmptyIterator(), 0)), ($container->privates['twig'] ?? self::getTwigService($container)), ['App\\Entity\\' => 'broadcast/'], new \Symfony\UX\Turbo\Broadcaster\IdAccessor(($container->privates['property_accessor'] ?? self::getPropertyAccessorService($container)), ($container->services['doctrine'] ?? self::getDoctrineService($container)))), NULL);
    }
}
