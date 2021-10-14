<?php

declare(strict_types=1);

namespace App\Core\Exception;

use Throwable;

/**
 * Marker interface for package-specific exceptions.
 */
interface ExceptionInterface extends Throwable
{
}