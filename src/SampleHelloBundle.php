<?php

namespace scabedo\sampleBundle;


use Symfony\Component\HttpKernel\Bundle\Bundle;

class SampleHelloBundle extends Bundle
{
    public function getPath(): string
    {
        return \dirname(__DIR__);
    }
}
