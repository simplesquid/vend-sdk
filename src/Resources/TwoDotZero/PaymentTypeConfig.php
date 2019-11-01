<?php

namespace SimpleSquid\Vend\Resources\TwoDotZero;

use Spatie\DataTransferObject\DataTransferObject;

/**
 * Payment Type Config.
 */
class PaymentTypeConfig extends DataTransferObject
{
    /**
     * Algorithm **undocumented**.
     *
     * @var string|null
     */
    public $algorithm;

    /**
     * Conceal cash totals **undocumented**.
     *
     * @var bool|null
     */
    public $conceal_cash_totals;

    /**
     * Indicates whether a receipt will be printed.
     *
     * @var bool|null
     */
    public $print;

    /**
     * Rounding **undocumented**.
     *
     * @var string|null
     */
    public $rounding;

    /**
     * The URL of the gateway.
     *
     * @var string|null
     */
    public $url;
}
