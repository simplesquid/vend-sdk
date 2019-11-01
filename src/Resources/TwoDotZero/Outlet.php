<?php

namespace SimpleSquid\Vend\Resources\TwoDotZero;

use SimpleSquid\Vend\Resources\CastsDates;
use Spatie\DataTransferObject\DataTransferObject;

/**
 * Outlet.
 */
class Outlet extends DataTransferObject
{
    use CastsDates;

    /**
     * Attributes. **undocumented**.
     *
     * @var array|null
     */
    public $attributes;

    /**
     * Currency name.
     *
     * @var string|null
     */
    public $currency;

    /**
     * Currency symbol.
     *
     * @var string|null
     */
    public $currency_symbol;

    /**
     * Default tax id used for sales in this outlet. **deprecated**.
     *
     * @var string|null
     */
    public $default_tax_id;

    /**
     * Deletion timestamp in UTC.
     *
     * @var \Carbon\Carbon|null
     */
    public $deleted_at;

    /**
     * Indicates whether prices in this outlet should be displayed as tax-inclusive.
     *
     * @var string|null
     */
    public $display_prices;

    /**
     * Email. **undocumented**.
     *
     * @var string|null
     */
    public $email;

    /**
     * Auto-generated object ID.
     *
     * @var string|null
     */
    public $id;

    /**
     * The outlet name.
     *
     * @var string|null
     */
    public $name;

    /**
     * Physical address, line 1.
     *
     * @var string|null
     */
    public $physical_address_1;

    /**
     * Physical address, line 2.
     *
     * @var string|null
     */
    public $physical_address_2;

    /**
     * Physical address, city.
     *
     * @var string|null
     */
    public $physical_city;

    /**
     * Physical address, country code.
     *
     * @var string|null
     */
    public $physical_country_id;

    /**
     * Physical address, post code.
     *
     * @var string|null
     */
    public $physical_postcode;

    /**
     * Physical address, state.
     *
     * @var string|null
     */
    public $physical_state;

    /**
     * Physical address, suburb.
     *
     * @var string|null
     */
    public $physical_suburb;

    /**
     * Outlet timezone. **read only**.
     *
     * @var string|null
     */
    public $time_zone;

    /**
     * Auto-incrementing object version number.
     *
     * @var int|null
     */
    public $version;
}
