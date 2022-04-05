<?php declare(strict_types=1);

namespace Yivi\StubBundle\DependencyInjection;

use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\HttpKernel\DependencyInjection\Extension;
use Yivi\StubBundle\String\Reverser;
use Yivi\StubBundle\String\ReverserInterface;

class YiviStubExtension extends Extension
{
    
    public function load(array $configs, ContainerBuilder $container)
    {
        $container->register('yivi_stub_bundle.string.reverser')
                  ->setClass(Reverser::class);

        $container->setAlias(ReverserInterface::class, 'yivi_stub_bundle.string.reverser');
    }
}
