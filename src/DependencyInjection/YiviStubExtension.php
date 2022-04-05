<?php declare(strict_types=1);

namespace Yivi\StubBundle\DependencyInjection;

use Symfony\Component\DependencyInjection\ContainerBuilder;
use Yivi\StubBundle\String\Reverser;
use Yivi\StubBundle\String\ReverserInterface;

class YiviStubExtension
{

    public function load(array $configs, ContainerBuilder $container)
    {
        $container->register('yivi_stub_bundle.string.reverser')
                  ->setClass(Reverser::class);

        $container->setAlias(ReverserInterface::class, 'yivi_stub_bundle.string.reverser');
    }
}
