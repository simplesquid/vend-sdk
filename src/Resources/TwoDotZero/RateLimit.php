<?php

namespace SimpleSquid\Vend\Resources\TwoDotZero;

use SimpleSquid\Vend\Resources\CastsDates;
use Spatie\DataTransferObject\DataTransferObject;

/**
 * Rate Limit.
 */
class RateLimit extends DataTransferObject
{
    use CastsDates;

    /**
     * Error.
     *
     * @var string
     */
    public $error;

    /**
     * Limits.
     *
     * @var object
     */
    public $limits;

    /**
     * Retry after.
     *
     * @var \Carbon\Carbon
     */
    public $retry_after;
}
