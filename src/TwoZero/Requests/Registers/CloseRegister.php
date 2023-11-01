<?php

namespace SimpleSquid\Vend\TwoZero\Requests\Registers;

use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

class CloseRegister extends Request implements HasBody
{
    use HasJsonBody;

    protected Method $method = Method::PUT;

    public function resolveEndpoint(): string
    {
        return "/registers/{$this->registerId}/actions/close";
    }

    /**
     * @param  array<string, mixed>  $payload
     */
    public function __construct(
        protected string $registerId,
        protected array $payload = [],
    ) {
    }

    /**
     * @return array<string, mixed>
     */
    public function defaultBody(): array
    {
        return $this->payload;
    }
}
