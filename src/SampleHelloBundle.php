<?php

namespace scabedo\samplebundle;


use Symfony\Component\HttpKernel\Bundle\AbstractBundle;

class SampleHelloBundle extends AbstractBundle
{
    public function getPath(): string
    {
        return \dirname(__DIR__);
    }
}
