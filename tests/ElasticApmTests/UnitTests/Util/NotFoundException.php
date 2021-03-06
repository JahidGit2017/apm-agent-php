<?php

/** @noinspection PhpUndefinedClassInspection */

declare(strict_types=1);

namespace Elastic\Apm\Tests\UnitTests\Util;

use RuntimeException;
use Throwable;

class NotFoundException extends RuntimeException
{
    public function __construct(string $message, int $code = 0, Throwable $previous = null)
    {
        parent::__construct($message, $code, $previous);
    }
}
