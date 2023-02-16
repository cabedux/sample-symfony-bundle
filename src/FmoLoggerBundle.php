<?php

namespace Fmo\FmoLoggerBundle;

use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
use Symfony\Component\HttpKernel\Bundle\AbstractBundle;

class FmoLoggerBundle extends AbstractBundle
{
    public function loadExtension(
        array $config,
        ContainerConfigurator $container,
        ContainerBuilder $builder): void
    {
        $container->import('../config/services.yaml');

    }

    public function getPath(): string
    {
        return \dirname(__DIR__);
    }
}
