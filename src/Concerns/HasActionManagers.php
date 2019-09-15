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
use SimpleSquid\Vend\Actions\PaymentTypesManager;
use SimpleSquid\Vend\Actions\PriceBookProductsManager;
use SimpleSquid\Vend\Actions\PriceBooksManager;
use SimpleSquid\Vend\Actions\ProductImagesManager;
use SimpleSquid\Vend\Actions\ProductsManager;
use SimpleSquid\Vend\Actions\ProductTypesManager;
use SimpleSquid\Vend\Actions\RegistersManager;
use SimpleSquid\Vend\Actions\SalesManager;
use SimpleSquid\Vend\Actions\SearchManager;
use SimpleSquid\Vend\Actions\SuppliersManager;
use SimpleSquid\Vend\Actions\TagsManager;
use SimpleSquid\Vend\Actions\TaxesManager;
use SimpleSquid\Vend\Actions\UsersManager;
use SimpleSquid\Vend\Actions\WebhookManager;

trait HasActionManagers
{
    /** @var \SimpleSquid\Vend\Actions\BrandsManager */
    public $brand;

    /** @var \SimpleSquid\Vend\Actions\ChannelRequestLogManager */
    public $channelRequestLog;

    /** @var \SimpleSquid\Vend\Actions\ConsignmentsManager */
    public $consignment;

    /** @var \SimpleSquid\Vend\Actions\CustomersManager */
    public $customer;

    /** @var \SimpleSquid\Vend\Actions\CustomerGroupsManager */
    public $customerGroup;

    /** @var \SimpleSquid\Vend\Actions\InventoryManager */
    public $inventory;

    /** @var \SimpleSquid\Vend\Actions\OutletsManager */
    public $outlet;

    /** @var \SimpleSquid\Vend\Actions\OutletProductTaxesManager */
    public $outletProductTax;

    /** @var \SimpleSquid\Vend\Actions\PaymentTypesManager */
    public $paymentType;

    /** @var \SimpleSquid\Vend\Actions\PriceBooksManager */
    public $priceBook;

    /** @var \SimpleSquid\Vend\Actions\PriceBookProductsManager */
    public $priceBookProduct;

    /** @var \SimpleSquid\Vend\Actions\ProductsManager */
    public $product;

    /** @var \SimpleSquid\Vend\Actions\ProductImagesManager */
    public $productImage;

    /** @var \SimpleSquid\Vend\Actions\ProductTypesManager */
    public $productType;

    /** @var \SimpleSquid\Vend\Actions\RegistersManager */
    public $register;

    /** @var \SimpleSquid\Vend\Actions\SalesManager */
    public $sale;

    /** @var \SimpleSquid\Vend\Actions\SearchManager */
    public $search;

    /** @var \SimpleSquid\Vend\Actions\SuppliersManager */
    public $supplier;

    /** @var \SimpleSquid\Vend\Actions\TagsManager */
    public $tag;

    /** @var \SimpleSquid\Vend\Actions\TaxesManager */
    public $tax;

    /** @var \SimpleSquid\Vend\Actions\UsersManager */
    public $user;

    /** @var \SimpleSquid\Vend\Actions\WebhookManager */
    public $webhook;

    /**
     * Get relevant manager.
     *
     * @param $name string
     *
     * @return mixed
     */
    public function __get($name)
    {
        return $this->$name;
    }

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
        $this->paymentType = new PaymentTypesManager($vend);
        $this->priceBookProduct = new PriceBookProductsManager($vend);
        $this->priceBook = new PriceBooksManager($vend);
        $this->productImage = new ProductImagesManager($vend);
        $this->product = new ProductsManager($vend);
        $this->productType = new ProductTypesManager($vend);
        $this->register = new RegistersManager($vend);
        $this->sale = new SalesManager($vend);
        $this->search = new SearchManager($vend);
        $this->supplier = new SuppliersManager($vend);
        $this->tag = new TagsManager($vend);
        $this->tax = new TaxesManager($vend);
        $this->user = new UsersManager($vend);
        $this->webhook = new WebhookManager($vend);
    }
}