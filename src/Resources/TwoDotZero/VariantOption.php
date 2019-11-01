<?php

namespace SimpleSquid\Vend\Resources\TwoDotZero;

use Spatie\DataTransferObject\DataTransferObject;

/**
 * Variant Option.
 */
class VariantOption extends DataTransferObject
{
    /**
     * The Variant Option ID. **undocumented**.
     *
     * @var string|null
     */
    public $id;

    /**
     * The Variant Option name.
     *
     * @var string|null
     */
    public $name;

    /**
     * The value of a Variant Option.
     *
     * @var string|null
     */
    public $value;
}
