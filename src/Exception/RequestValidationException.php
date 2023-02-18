<?php

namespace Fmo\LoggerBundle\Exception;

use Exception;
use stdClass;

class RequestValidationException extends CustomException
{
    private array $errors;

    public function __construct(array $errors)
    {
        parent::__construct('Invalid request parameters', 500);
        $this->errors = $errors;
    }

    public function serializeErrors(): array
    {
        $errList = [];

        foreach ($this->errors as $err) {
            $errList[] = [ 'message' => $err ];
        }

        return $errList;
    }
}
