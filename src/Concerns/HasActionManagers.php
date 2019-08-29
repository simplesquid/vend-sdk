<?php

namespace SimpleSquid\Vend\Concerns;

use SimpleSquid\Vend\Actions\BrandsManager;
use SimpleSquid\Vend\Actions\ChannelRequestLogManager;
use SimpleSquid\Vend\Actions\ConsignmentsManager;
use SimpleSquid\Vend\Actions\CustomerGroupsManager;
use SimpleSquid\Vend\Actions\CustomersManager;
use SimpleSquid\Vend\Actions\InventoryManager;
use SimpleSquid\Vend\Actions\OutletProductTaxesManager;
use SimpleSquid\Vend\Actions\OutletsManager;
use SimpleSquid\Vend\Actions\PriceBooksManager;
use SimpleSquid\Vend\Actions\ProductImagesManager;
use SimpleSquid\Vend\Actions\ProductsManager;
use SimpleSquid\Vend\Actions\SearchManager;

trait HasActionManagers
{
    /**
     * @var \SimpleSquid\Vend\Actions\BrandsManager
     */
    public $brand;

    /**
     * @var \SimpleSquid\Vend\Actions\ChannelRequestLogManager
     */
    public $channelRequestLog;

    /**
     * @var \SimpleSquid\Vend\Actions\ConsignmentsManager
     */
    public $consignment;

    /**
     * @var \SimpleSquid\Vend\Actions\CustomersManager
     */
    public $customer;

    /**
     * @var \SimpleSquid\Vend\Actions\CustomerGroupsManager
     */
    public $customerGroup;

    /**
     * @var \SimpleSquid\Vend\Actions\InventoryManager
     */
    public $inventory;

    /**
     * @var \SimpleSquid\Vend\Actions\OutletsManager
     */
    public $outlet;

    /**
     * @var \SimpleSquid\Vend\Actions\OutletProductTaxesManager
     */
    public $outletProductTax;

    /**
     * @var \SimpleSquid\Vend\Actions\PriceBooksManager
     */
    public $priceBook;

    /**
     * @var \SimpleSquid\Vend\Actions\ProductsManager
     */
    public $product;

    /**
     * @var \SimpleSquid\Vend\Actions\ProductImagesManager
     */
    public $productImage;

    /**
     * @var \SimpleSquid\Vend\Actions\SearchManager
     */
    public $search;

    /**
     * Vend constructor.
     */
    public function __construct()
    {
        /** @var \SimpleSquid\Vend\Vend $vend */
        $vend = $this;

        $this->brand = new BrandsManager($vend);
        $this->channelRequestLog = new ChannelRequestLogManager($vend);
        $this->consignment = new ConsignmentsManager($vend);
        $this->customerGroup = new CustomerGroupsManager($vend);
        $this->customer = new CustomersManager($vend);
        $this->inventory = new InventoryManager($vend);
        $this->outletProductTax = new OutletProductTaxesManager($vend);
        $this->outlet = new OutletsManager($vend);
        $this->priceBook = new PriceBooksManager($vend);
        $this->productImage = new ProductImagesManager($vend);
        $this->product = new ProductsManager($vend);
        $this->search = new SearchManager($vend);
    }
}