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

    /**
     * Algorithm **undocumented**
     *
     * @var string|null
     */
    public $algorithm;

    /**
     * Conceal cash totals **undocumented**
     *
     * @var bool|null
     */
    public $conceal_cash_totals;

    /**
     * Rounding **undocumented**
     *
     * @var string|null
     */
    public $rounding;

}
