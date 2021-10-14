<?php 
namespace App\Core;

use function gettype;
use function is_float;
use function is_numeric;
use function is_scalar;
use function sprintf;

class Response 
{

    public const MIN_STATUS_CODE_VALUE = 100;
    public const MAX_STATUS_CODE_VALUE = 599;

    public static function setStatusCode($code, $reasonPhrase=''): void
    {
        if (! is_numeric($code)
            || is_float($code)
            || $code < static::MIN_STATUS_CODE_VALUE
            || $code > static::MAX_STATUS_CODE_VALUE
        ) {
            throw new Exception\InvalidArgumentException(sprintf(
                'Invalid status code "%s"; must be an integer between %d and %d, inclusive',
                is_scalar($code) ? $code : gettype($code),
                static::MIN_STATUS_CODE_VALUE,
                static::MAX_STATUS_CODE_VALUE
            ));
        }

        if (! is_string($reasonPhrase)) {
            throw new Exception\InvalidArgumentException(sprintf(
                'Unsupported response reason phrase; must be a string, received %s',
                is_object($reasonPhrase) ? get_class($reasonPhrase) : gettype($reasonPhrase)
            ));
        }
        http_response_code($code);
    }
}