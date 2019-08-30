<?php

namespace SimpleSquid\Vend\Resources\ZeroDotNine;

use Spatie\DataTransferObject\DataTransferObject;

/**
 * Supplier
 *
 * @package SimpleSquid\Vend\Resources\ZeroDotNine
 */
class Supplier extends DataTransferObject
{
    /**
     * Generic contact object embedded in other objects like outlet or supplier
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
     * Auto-generated object ID.
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

    /**
     * **internal**
     *
     * @var string|null
     */
    public $source;

}
