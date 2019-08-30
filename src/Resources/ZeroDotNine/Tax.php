<?php

namespace SimpleSquid\Vend\Resources\ZeroDotNine;

use Spatie\DataTransferObject\DataTransferObject;

/**
 * Tax
 *
 * @package SimpleSquid\Vend\Resources\ZeroDotNine
 */
class Tax extends DataTransferObject
{
    /**
     * Indicates whether the tax is active.
     *
     * @var bool|null
     */
    public $active;

    /**
     * Indicates whether the tax is the default tax for the account.
     *
     * @var bool|null
     */
    public $default;

    /**
     * Auto-generated object ID.
     *
     * @var string|null
     */
    public $id;

    /**
     * Tax name.
     *
     * @var string
     */
    public $name;

    /**
     * Tax rate. `0.1 = 10%`.
     *
     * @var int|double
     */
    public $rate;

    /**
     * Tax rates associated with the tax. Always a single rate for tax-inclusive stores.
     *
     * @var array|null
     */
    public $rates;

}
