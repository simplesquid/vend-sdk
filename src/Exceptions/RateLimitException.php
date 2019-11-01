<?php

namespace SimpleSquid\Vend\Exceptions;

use Exception;
use SimpleSquid\Vend\Resources\TwoDotZero\RateLimit;

class RateLimitException extends Exception
{
    /** @var RateLimit */
    private $response;

    public function __construct(array $body = null)
    {
        parent::__construct('Your access to the API has been rate limited. Please try again later.');

        $body['retry_after'] = $body['retry-after'];
        unset($body['retry-after']);

        $this->response = new RateLimit($body);
    }

    /**
     * The array of errors.
     *
     * @return RateLimit
     */
    public function response()
    {
        return $this->response;
    }
}
