<?php

namespace Fmo\LoggerBundle\Exception;

use Exception;
use stdClass;

class RequestValidationException extends CustomException
{
    private string $string;

    public function __construct(string $string)
    {
        parent::__construct($string, 500);
        $this->string = $string;
    }

    public function serializeErrors(): array
    {
        return [
            [ 'message' => $this->string ], [ 'message' => 'another error']
        ];
    }
}
