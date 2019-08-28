<?php

namespace SimpleSquid\Vend\Actions;

use SimpleSquid\Vend\Resources\TwoDotZero\ChannelCollection;
use SimpleSquid\Vend\Resources\TwoDotZero\RequestLog;
use SimpleSquid\Vend\Resources\TwoDotZero\RequestLogCollection;

trait ManagesChannelRequestLog
{
    /**
     * Get a single request log.
     * Returns a single request log entry with a specific ID.
     *
     * @param  string  $request_log_id  Valid request log ID.
     *
     * @return RequestLog
     */
    public function channelRequest(string $request_log_id): RequestLog
    {
        return $this->single(RequestLog::class, "2.0/channel_requests/$request_log_id");
    }

    /**
     * Get a single request log as text.
     * Returns a text representation of a single request log entry with a specific ID.
     *
     * @param  string  $request_log_id  Valid request log ID.
     *
     * @return string
     */
    public function channelRequestText(string $request_log_id): string
    {
        return $this->get("2.0/channel_requests/$request_log_id.txt");
    }

    /**
     * List request records.
     * Returns a list of request log records.
     *
     * @param  string|null  $status_code  Limit the requests to 1 or more status codes.
     * @param  string|null  $request_method  Limit the requests to 1 or more request methods.
     * @param  string|null  $occurred_before  Limit requests to before this RFC3339 date. TODO: Convert to Carbon object.
     * @param  string|null  $occurred_after  Limit requests to after this RFC3339 date. TODO: Convert to Carbon object.
     * @param  string|null  $status_code_before  Limit requests to those with status codes less than this value.
     * @param  string|null  $status_code_after  Limit requests to those with status codes greater than this value.
     * @param  string|null  $channel_id  If provided, request logs will be limited to the supplied channel id. If no id is provided, only requests logged with no channel id will be returned. Requests with no channel id indicate requests made during the setup process.
     *
     * @return RequestLogCollection
     */
    public function channelRequests(
        string $status_code = null,
        string $request_method = null,
        string $occurred_before = null,
        string $occurred_after = null,
        string $status_code_before = null,
        string $status_code_after = null,
        string $channel_id = null
    ): RequestLogCollection {
        return $this->collection(RequestLogCollection::class, "2.0/channel_requests",
                                 compact('status_code', 'request_method', 'occurred_before', 'occurred_after', 'status_code_before', 'status_code_after', 'channel_id'));
    }

    /**
     * List channel records.
     * Returns a list of configured channels.
     *
     * @return ChannelCollection
     */
    public function channels(): ChannelCollection
    {
        return $this->collection(ChannelCollection::class, '2.0/channels');
    }
}