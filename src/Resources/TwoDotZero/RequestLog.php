<?php

namespace SimpleSquid\Vend\Resources\TwoDotZero;

use Carbon\Carbon;
use SimpleSquid\Vend\Resources\CastsDates;
use Spatie\DataTransferObject\DataTransferObject;

/**
 * Request Log
 * An object representing a single request and response made to a channel.
 *
 * @package SimpleSquid\Vend\Resources\TwoDotZero
 */
class RequestLog extends DataTransferObject
{
    use CastsDates;

    /**
     * If an error occurred with the request, such as an inability to resolve a hostname, connect or TLS errors, this will be recorded here. Only errors with the ability to make the request are logged here, rather than errors when interpreting a response.
     *
     * @var string|null
     */
    public $error;

    /**
     * An identifier used to group together requests that occurred together as part of the same job or Vend API request.
     *
     * @var string
     */
    public $grouping_id;

    /**
     * Auto-generated object ID.
     *
     * @var string
     */
    public $id;

    /**
     * An RFC3339 representation of the time at which the request was logged.
     *
     * @var Carbon
     */
    public $occurred_at;

    /**
     * A dump of the full request information in HTTP format, including headers and any request body.
     *
     * @var string
     */
    public $request;

    /**
     * The HTTP method used to make the request.
     *
     * @var string
     */
    public $request_method;

    /**
     * A dump of the full response information in HTTP format, including headers and any response body.
     *
     * @var string
     */
    public $response;

    /**
     * The HTTP status code received in the response.
     *
     * @var int|double|null
     */
    public $status_code;

}
