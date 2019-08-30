<?php

namespace SimpleSquid\Vend\Resources\ZeroDotNine;

use Spatie\DataTransferObject\DataTransferObject;

/**
 * Webhook
 *
 * @package SimpleSquid\Vend\Resources\ZeroDotNine
 */
class Webhook extends DataTransferObject
{
    /**
     * Indicates whether the webhook is active.
     *
     * @var bool
     */
    public $active;

    /**
     * Auto-generated object ID.
     *
     * @var string
     */
    public $id;

    /**
     * The ID of the retailer which the webhook request originated from.
     *
     * @var string
     */
    public $retailer_id;

    /**
     * Webhook type. One of: `product.update`, `inventory.update`, `sale.update`, `customer.update`, `consignment.receive`.
     *
     * @var string
     */
    public $type;

    /**
     * The URL of the endpoint prepared for receiving webhooks.
     *
     * @var string
     */
    public $url;

}
