<?php

namespace scabedo\TestBundle;

use Symfony\Component\HttpKernel\Bundle\AbstractBundle;

class TestBundle extends AbstractBundle
{
    public function getPath(): string
    {
        return \dirname(__DIR__);
    }
    public function configure(DefinitionConfigurator $definition): void
    {
        // loads config definition from a file
        $definition->import('/../../config/routes.yaml');

        ;
    }
}
