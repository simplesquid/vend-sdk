<?php

namespace SimpleSquid\Vend\Resources\TwoDotZero;

use Spatie\DataTransferObject\DataTransferObject;

/**
 * Payment Type Details **undocumented**.
 */
class PaymentTypeDetails extends DataTransferObject
{
    /**
     * Badge.
     *
     * @var string|null
     */
    public $badge;

    /**
     * Category.
     *
     * @var string|null
     */
    public $category;

    /**
     * Configuration URL.
     *
     * @var string|null
     */
    public $configuration_url;

    /**
     * Description.
     *
     * @var string|null
     */
    public $description;

    /**
     * Header.
     *
     * @var string|null
     */
    public $header;

    /**
     * ID.
     *
     * @var int|null
     */
    public $id;

    /**
     * Logo.
     *
     * @var bool|null
     */
    public $internal;

    /**
     * Logo.
     *
     * @var string|null
     */
    public $logo;

    /**
     * Name.
     *
     * @var string|null
     */
    public $name;

    /**
     * Platforms.
     *
     * @var array|null
     */
    public $platforms;

    /**
     * Referred inactive.
     *
     * @var bool|null
     */
    public $referred_inactive;

    /**
     * Subcategory.
     *
     * @var string|null
     */
    public $subcategory;

    /**
     * Subtext.
     *
     * @var string|null
     */
    public $subtext;
}
