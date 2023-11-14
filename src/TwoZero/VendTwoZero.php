<?php

namespace SimpleSquid\Vend\TwoZero;

use Saloon\Http\Request;
use Saloon\PaginationPlugin\Contracts\HasPagination;
use SimpleSquid\Vend\Common\Paginators\VendCursorPaginator;
use SimpleSquid\Vend\TwoZero\Resources\Audit;
use SimpleSquid\Vend\TwoZero\Resources\Brands;
use SimpleSquid\Vend\TwoZero\Resources\ChannelRequestLog;
use SimpleSquid\Vend\TwoZero\Resources\ConsignmentProducts;
use SimpleSquid\Vend\TwoZero\Resources\Consignments;
use SimpleSquid\Vend\TwoZero\Resources\CustomerGroups;
use SimpleSquid\Vend\TwoZero\Resources\Customers;
use SimpleSquid\Vend\TwoZero\Resources\Fulfillment;
use SimpleSquid\Vend\TwoZero\Resources\Inventory;
use SimpleSquid\Vend\TwoZero\Resources\OutletProductTaxes;
use SimpleSquid\Vend\TwoZero\Resources\Outlets;
use SimpleSquid\Vend\TwoZero\Resources\PaymentTypes;
use SimpleSquid\Vend\TwoZero\Resources\PriceBooks;
use SimpleSquid\Vend\TwoZero\Resources\ProductCategories;
use SimpleSquid\Vend\TwoZero\Resources\ProductImages;
use SimpleSquid\Vend\TwoZero\Resources\Products;
use SimpleSquid\Vend\TwoZero\Resources\ProductTypes;
use SimpleSquid\Vend\TwoZero\Resources\PromoCode;
use SimpleSquid\Vend\TwoZero\Resources\Promotions;
use SimpleSquid\Vend\TwoZero\Resources\Quotes;
use SimpleSquid\Vend\TwoZero\Resources\Registers;
use SimpleSquid\Vend\TwoZero\Resources\Retailers;
use SimpleSquid\Vend\TwoZero\Resources\Sales;
use SimpleSquid\Vend\TwoZero\Resources\Search;
use SimpleSquid\Vend\TwoZero\Resources\SerialNumbers;
use SimpleSquid\Vend\TwoZero\Resources\ServiceOrders;
use SimpleSquid\Vend\TwoZero\Resources\Suppliers;
use SimpleSquid\Vend\TwoZero\Resources\Tags;
use SimpleSquid\Vend\TwoZero\Resources\Taxes;
use SimpleSquid\Vend\TwoZero\Resources\Users;
use SimpleSquid\Vend\VendConnector;

/**
 * API 2.0
 *
 * Endpoints for version 2.0 of the Vend API.
 */
class VendTwoZero extends VendConnector implements HasPagination
{
    public function resolveBaseUrl(): string
    {
        return parent::resolveBaseUrl().'/2.0';
    }

    public function paginate(Request $request): VendCursorPaginator
    {
        return new VendCursorPaginator($this, $request);
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

    public function productCategories(): ProductCategories
    {
        return new ProductCategories($this);
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
