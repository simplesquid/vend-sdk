<?php

namespace SimpleSquid\Vend\Resources\TwoDotZero;

use Spatie\DataTransferObject\DataTransferObject;

/**
 * Payment Type Config
 *
 * @package SimpleSquid\Vend\Resources\TwoDotZero
 */
class PaymentTypeConfig extends DataTransferObject
{
    /**
     * Indicates whether a receipt will be printed.
     *
     * @var bool|null
     */
    public $print;

    /**
     * The URL of the gateway.
     *
     * @var string|null
     */
    public $url;

}
