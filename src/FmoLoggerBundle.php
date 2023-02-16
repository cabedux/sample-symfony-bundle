<?php

namespace Fmo\LoggerBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class FmoLoggerBundle extends Bundle
{
    public function getPath(): string
    {
        return \dirname(__DIR__);
    }
}
