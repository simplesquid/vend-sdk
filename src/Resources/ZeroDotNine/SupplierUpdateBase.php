<?php

namespace SimpleSquid\Vend\Resources\ZeroDotNine;

use Spatie\DataTransferObject\DataTransferObject;

/**
 * Supplier Update Base.
 */
class SupplierUpdateBase extends DataTransferObject
{
    /**
     * Generic contact object embedded in other objects like outlet or supplier.
     *
     * @var \SimpleSquid\Vend\Resources\ZeroDotNine\GenericContact|null
     */
    public $contact;

    /**
     * Supplier's description.
     *
     * @var string|null
     */
    public $description;

    /**
     * Existing supplier ID. If included in the POST request it will cause an update instead of a creating a new object.
     *
     * @var string|null
     */
    public $id;

    /**
     * The name of the supplier.
     *
     * @var string|null
     */
    public $name;
}
