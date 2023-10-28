<?php

namespace SimpleSquid\Vend\ZeroNine\Requests\RegisterSales;

use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

class CreateUpdateRegisterSale extends Request implements HasBody
{
    use HasJsonBody;

    protected Method $method = Method::POST;

    public function resolveEndpoint(): string
    {
        return '/register_sales';
    }

    /**
     * @param  array<string, mixed>[]|null  $registerSaleProducts
     * @param  array<string, mixed>[]|null  $registerSalePayments
     * @param  array<string, mixed>|null  $serviceFields
     */
    public function __construct(
        protected string $userId,
        protected string $status,
        protected ?string $id = null,
        protected ?string $source = null,
        protected ?string $sourceId = null,
        protected ?string $registerId = null,
        protected ?string $customerId = null,
        protected ?string $saleDate = null,
        protected ?string $note = null,
        protected ?string $shortCode = null,
        protected ?string $invoiceNumber = null,
        protected ?string $accountsTransactionId = null,
        protected ?array $registerSaleProducts = null,
        protected ?array $registerSalePayments = null,
        protected ?array $serviceFields = null,
    ) {
    }

    public function defaultBody(): array
    {
        return array_filter([
            'user_id' => $this->userId,
            'status' => $this->status,
            'id' => $this->id,
            'source' => $this->source,
            'source_id' => $this->sourceId,
            'register_id' => $this->registerId,
            'customer_id' => $this->customerId,
            'sale_date' => $this->saleDate,
            'note' => $this->note,
            'short_code' => $this->shortCode,
            'invoice_number' => $this->invoiceNumber,
            'accounts_transaction_id' => $this->accountsTransactionId,
            'register_sale_products' => $this->registerSaleProducts,
            'register_sale_payments' => $this->registerSalePayments,
            'service_fields' => $this->serviceFields,
        ]);
    }
}
