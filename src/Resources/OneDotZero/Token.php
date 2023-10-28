<?php

namespace SimpleSquid\Vend\Resources\OneDotZero;

use SimpleSquid\Vend\Resources\CastsDates;
use Spatie\DataTransferObject\DataTransferObject;

/**
 * OAuth Token Response.
 */
class Token extends DataTransferObject
{
    use CastsDates;

    /**
     * Access token.
     *
     * @var string|null
     */
    public $access_token;

    /**
     * Domain prefix.
     *
     * @var string|null
     */
    public $domain_prefix;

    /**
     * Expires.
     *
     * @var \Carbon\Carbon|null
     */
    public $expires;

    /**
     * Expires in (seconds).
     *
     * @var int|float|null
     */
    public $expires_in;

    /**
     * Refresh token.
     *
     * @var string|null
     */
    public $refresh_token;

    /**
     * Token type.
     *
     * @var string|null
     */
    public $token_type;

    /**
     * **undocumented**.
     *
     * @var mixed|null
     */
    public $scope;
}
