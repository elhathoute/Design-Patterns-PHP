<?php

namespace App\exceptions;

use Exception;

class UnsupportedTransportException extends Exception
{
    public function __construct(string $message = "Unsupported transport type", int $code = 0, Exception $previous = null)
    {
        parent::__construct($message, $code, $previous);
    }
}