<?php

namespace SimpleSquid\Vend\Resources\OneDotZero;

use SimpleSquid\Vend\Resources\CastsDates;
use Spatie\DataTransferObject\DataTransferObject;

/**
 * OAuth Token Response
 *
 * @package SimpleSquid\Vend\Resources\TwoDotZero
 */
class Token extends DataTransferObject
{
    use CastsDates;

    /**
     * Access token.
     *
     * @var string
     */
    public $access_token;

    /**
     * Expires.
     *
     * @var \Carbon\Carbon|null
     */
    public $expires;

    /**
     * Expires in (seconds).
     *
     * @var int|double|null
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
     * Domain prefix.
     *
     * @var string|null
     */
    public $domain_prefix;

}
