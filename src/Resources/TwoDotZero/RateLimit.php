<?php

namespace SimpleSquid\Vend\Resources\TwoDotZero;

use Carbon\Carbon;
use SimpleSquid\Vend\Resources\CastsDates;
use Spatie\DataTransferObject\DataTransferObject;

/**
 * Rate Limit
 *
 * @package SimpleSquid\Vend\Resources\TwoDotZero
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
     * @var Object
     */
    public $limits;

    /**
     * Retry after.
     *
     * @var Carbon
     */
    public $retry_after;

}
