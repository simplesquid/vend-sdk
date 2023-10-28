<?php

namespace SimpleSquid\Vend\TwoZero;

use SimpleSquid\Vend\TwoZero\Resource\Audit;
use SimpleSquid\Vend\TwoZero\Resource\Brands;
use SimpleSquid\Vend\TwoZero\Resource\ChannelRequestLog;
use SimpleSquid\Vend\TwoZero\Resource\ConsignmentProducts;
use SimpleSquid\Vend\TwoZero\Resource\Consignments;
use SimpleSquid\Vend\TwoZero\Resource\CustomerGroups;
use SimpleSquid\Vend\TwoZero\Resource\Customers;
use SimpleSquid\Vend\TwoZero\Resource\Fulfillment;
use SimpleSquid\Vend\TwoZero\Resource\Inventory;
use SimpleSquid\Vend\TwoZero\Resource\OutletProductTaxes;
use SimpleSquid\Vend\TwoZero\Resource\Outlets;
use SimpleSquid\Vend\TwoZero\Resource\PaymentTypes;
use SimpleSquid\Vend\TwoZero\Resource\PriceBooks;
use SimpleSquid\Vend\TwoZero\Resource\ProductImages;
use SimpleSquid\Vend\TwoZero\Resource\Products;
use SimpleSquid\Vend\TwoZero\Resource\ProductTypes;
use SimpleSquid\Vend\TwoZero\Resource\PromoCode;
use SimpleSquid\Vend\TwoZero\Resource\Promotions;
use SimpleSquid\Vend\TwoZero\Resource\Quotes;
use SimpleSquid\Vend\TwoZero\Resource\Registers;
use SimpleSquid\Vend\TwoZero\Resource\Retailers;
use SimpleSquid\Vend\TwoZero\Resource\Sales;
use SimpleSquid\Vend\TwoZero\Resource\Search;
use SimpleSquid\Vend\TwoZero\Resource\SerialNumbers;
use SimpleSquid\Vend\TwoZero\Resource\ServiceOrders;
use SimpleSquid\Vend\TwoZero\Resource\Suppliers;
use SimpleSquid\Vend\TwoZero\Resource\Tags;
use SimpleSquid\Vend\TwoZero\Resource\Taxes;
use SimpleSquid\Vend\TwoZero\Resource\Users;
use SimpleSquid\Vend\VendConnector;

/**
 * API 2.0
 *
 * Endpoints for version 2.0 of the Vend API.
 */
class VendTwoZero extends VendConnector
{
    public function resolveBaseUrl(): string
    {
        return parent::resolveBaseUrl().'/2.0';
    }

    public function audit(): Audit
    {
        return new Audit($this);
    }

    public function brands(): Brands
    {
        return new Brands($this);
    }

    public function channelRequestLog(): ChannelRequestLog
    {
        return new ChannelRequestLog($this);
    }

    public function consignmentProducts(): ConsignmentProducts
    {
        return new ConsignmentProducts($this);
    }

    public function consignments(): Consignments
    {
        return new Consignments($this);
    }

    public function customerGroups(): CustomerGroups
    {
        return new CustomerGroups($this);
    }

    public function customers(): Customers
    {
        return new Customers($this);
    }

    public function fulfillment(): Fulfillment
    {
        return new Fulfillment($this);
    }

    public function inventory(): Inventory
    {
        return new Inventory($this);
    }

    public function outletProductTaxes(): OutletProductTaxes
    {
        return new OutletProductTaxes($this);
    }

    public function outlets(): Outlets
    {
        return new Outlets($this);
    }

    public function paymentTypes(): PaymentTypes
    {
        return new PaymentTypes($this);
    }

    public function priceBooks(): PriceBooks
    {
        return new PriceBooks($this);
    }

    public function productImages(): ProductImages
    {
        return new ProductImages($this);
    }

    public function productTypes(): ProductTypes
    {
        return new ProductTypes($this);
    }

    public function products(): Products
    {
        return new Products($this);
    }

    public function promoCode(): PromoCode
    {
        return new PromoCode($this);
    }

    public function promotions(): Promotions
    {
        return new Promotions($this);
    }

    public function quotes(): Quotes
    {
        return new Quotes($this);
    }

    public function registers(): Registers
    {
        return new Registers($this);
    }

    public function retailers(): Retailers
    {
        return new Retailers($this);
    }

    public function sales(): Sales
    {
        return new Sales($this);
    }

    public function search(): Search
    {
        return new Search($this);
    }

    public function serialNumbers(): SerialNumbers
    {
        return new SerialNumbers($this);
    }

    public function serviceOrders(): ServiceOrders
    {
        return new ServiceOrders($this);
    }

    public function suppliers(): Suppliers
    {
        return new Suppliers($this);
    }

    public function tags(): Tags
    {
        return new Tags($this);
    }

    public function taxes(): Taxes
    {
        return new Taxes($this);
    }

    public function users(): Users
    {
        return new Users($this);
    }
}
