<?php

namespace SimpleSquid\Vend\Resources\TwoDotZero;

use SimpleSquid\Vend\Resources\CastsDates;
use Spatie\DataTransferObject\DataTransferObject;

/**
 * Tax.
 */
class Tax extends DataTransferObject
{
    use CastsDates;

    /**
     * The deletion timestamp.
     *
     * @var \Carbon\Carbon|null
     */
    public $deleted_at;

    /**
     * The name of the tax used for display.
     *
     * @var string
     */
    public $display_name;

    /**
     * Auto-generated object ID.
     *
     * @var string
     */
    public $id;

    /**
     * Indicates whether the tax is used as the default one.
     *
     * @var bool|null
     */
    public $is_default;

    /**
     * The name of the tax.
     *
     * @var string|null
     */
    public $name;

    /**
     * Tax Rates.
     *
     * @var \SimpleSquid\Vend\Resources\TwoDotZero\TaxRate[]|null
     */
    public $rates;

    /**
     * Auto-incrementing object version number.
     *
     * @var int
     */
    public $version;
}
