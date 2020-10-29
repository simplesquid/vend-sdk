<?php

namespace SimpleSquid\Vend\Concerns;

use GuzzleHttp\Client;
use GuzzleHttp\Exception\GuzzleException;
use Psr\Http\Message\ResponseInterface;
use SimpleSquid\Vend\Exceptions\AuthorisationException;
use SimpleSquid\Vend\Exceptions\BadRequestException;
use SimpleSquid\Vend\Exceptions\ConfirmationTimeoutException;
use SimpleSquid\Vend\Exceptions\NotFoundException;
use SimpleSquid\Vend\Exceptions\RateLimitException;
use SimpleSquid\Vend\Exceptions\RequestException;
use SimpleSquid\Vend\Exceptions\TokenExpiredException;
use SimpleSquid\Vend\Exceptions\UnauthorisedException;
use SimpleSquid\Vend\Exceptions\UnknownException;

/**
 * @property Client $guzzle
 */
trait MakesHttpRequests
{
    /**
     * Confirm request via callback or fail after x seconds.
     *
     * @param  callable  $callback
     * @param  int       $timeout
     *
     * @return mixed
     * @throws ConfirmationTimeoutException
     */
    public function confirm(callable $callback, int $timeout = null)
    {
        if (is_null($timeout)) {
            $timeout = $this->confirmation_timeout;
        }

        $start = time();

        beginning:

        if ($output = $callback()) {
            return $output;
        }

        if (time() - $start < $timeout) {
            sleep(5);

            goto beginning;
        }

        throw new ConfirmationTimeoutException($output);
    }

    /**
     * Make a DELETE request to Vend and return the response.
     *
     * @param  string  $uri
     * @param  array   $payload
     * @param  bool    $authorised
     *
     * @return mixed
     * @throws AuthorisationException
     * @throws BadRequestException
     * @throws NotFoundException
     * @throws RateLimitException
     * @throws RequestException
     * @throws TokenExpiredException
     * @throws UnauthorisedException
     * @throws UnknownException
     */
    public function delete(string $uri, array $payload = [], bool $authorised = true)
    {
        return $this->request('DELETE', $uri, $payload, [], $authorised);
    }

    /**
     * Make request to Forge servers and return the response.
     *
     * @param  string       $verb
     * @param  string       $uri
     * @param  array        $payload
     * @param  array        $query
     * @param  bool         $authorised
     * @param  string       $format  One of `json`, `form_params`, `multipart`.
     *
     * @param  string|null  $payload_root
     *
     * @return mixed
     * @throws \SimpleSquid\Vend\Exceptions\BadRequestException
     * @throws \SimpleSquid\Vend\Exceptions\NotFoundException
     * @throws \SimpleSquid\Vend\Exceptions\RateLimitException
     * @throws \SimpleSquid\Vend\Exceptions\RequestException
     * @throws \SimpleSquid\Vend\Exceptions\UnauthorisedException
     * @throws \SimpleSquid\Vend\Exceptions\UnknownException
     */
    private function request(
        string $verb,
        string $uri,
        array $payload = [],
        array $query = [],
        bool $authorised = true,
        string $format = 'json',
        string $payload_root = null
    ) {
        $options = [
            'timeout' => $this->request_timeout,
            'query'   => $query,
            'headers' => ['User-Agent' => $this->user_agent],
        ];

        if ($authorised) {
            $options['headers']['Authorization'] = 'Bearer ' . $this->getAccessToken();
        }

        if ($format === 'json') {
            $payload = array_filter($payload, function ($value) {
                return ! is_null($value);
            });

            if (is_null($payload_root)) {
                $options['json'] = $payload;
            } else {
                $options['json'][$payload_root] = $payload;
            }
            $options['headers']['Content-Type'] = 'application/json';
        } else {
            $options[$format] = $payload;
        }

        try {
            $response = $this->guzzle->request($verb, 'https://' . $this->getDomainPrefix() . ".vendhq.com/api/$uri", $options);
        } catch (GuzzleException $e) {
            throw new RequestException($e);
        }

        if (! in_array($response->getStatusCode(), [200, 201, 204])) {
            $this->handleRequestError($response);
        }

        $responseBody = (string) $response->getBody();

        return json_decode($responseBody, true) ?: $responseBody;
    }

    /**
     * Handles errors with the request.
     *
     * @param  ResponseInterface  $response
     *
     * @return void
     * @throws BadRequestException
     * @throws NotFoundException
     * @throws RateLimitException
     * @throws UnauthorisedException
     * @throws UnknownException
     */
    private function handleRequestError(ResponseInterface $response)
    {
        $body = json_decode((string) $response->getBody(), true);
        $errors = $body['errors'] ?? $body ?? null;

        $status = $response->getStatusCode();

        if ($status === 404) {
            throw new NotFoundException($errors);
        }

        if ($status === 400) {
            throw new BadRequestException($errors);
        }

        if ($status === 401) {
            throw new UnauthorisedException();
        }

        if ($status === 429) {
            throw new RateLimitException($body);
        }

        throw new UnknownException($errors);
    }

    /**
     * Make a GET request to Vend and return the response.
     *
     * @param  string  $uri
     * @param  array   $query
     * @param  bool    $authorised
     *
     * @return mixed
     * @throws AuthorisationException
     * @throws BadRequestException
     * @throws NotFoundException
     * @throws RateLimitException
     * @throws RequestException
     * @throws TokenExpiredException
     * @throws UnauthorisedException
     * @throws UnknownException
     */
    public function get(string $uri, array $query = [], bool $authorised = true)
    {
        return $this->request('GET', $uri, [], $query, $authorised);
    }

    /**
     * Make a POST request to Vend and return the response.
     *
     * @param  string       $uri
     * @param  array        $payload
     * @param  string       $format
     * @param  bool         $authorised
     *
     * @param  string|null  $payload_root
     *
     * @return mixed
     * @throws \SimpleSquid\Vend\Exceptions\AuthorisationException
     * @throws \SimpleSquid\Vend\Exceptions\BadRequestException
     * @throws \SimpleSquid\Vend\Exceptions\NotFoundException
     * @throws \SimpleSquid\Vend\Exceptions\RateLimitException
     * @throws \SimpleSquid\Vend\Exceptions\RequestException
     * @throws \SimpleSquid\Vend\Exceptions\TokenExpiredException
     * @throws \SimpleSquid\Vend\Exceptions\UnauthorisedException
     * @throws \SimpleSquid\Vend\Exceptions\UnknownException
     */
    public function post(
        string $uri,
        array $payload = [],
        string $format = 'json',
        bool $authorised = true,
        string $payload_root = null
    ) {
        return $this->request('POST', $uri, $payload, [], $authorised, $format, $payload_root);
    }

    /**
     * Make a PUT request to Vend and return the response.
     *
     * @param  string       $uri
     * @param  array        $payload
     * @param  bool         $authorised
     *
     * @param  string|null  $payload_root
     *
     * @return mixed
     * @throws \SimpleSquid\Vend\Exceptions\AuthorisationException
     * @throws \SimpleSquid\Vend\Exceptions\BadRequestException
     * @throws \SimpleSquid\Vend\Exceptions\NotFoundException
     * @throws \SimpleSquid\Vend\Exceptions\RateLimitException
     * @throws \SimpleSquid\Vend\Exceptions\RequestException
     * @throws \SimpleSquid\Vend\Exceptions\TokenExpiredException
     * @throws \SimpleSquid\Vend\Exceptions\UnauthorisedException
     * @throws \SimpleSquid\Vend\Exceptions\UnknownException
     */
    public function put(string $uri, array $payload = [], bool $authorised = true, string $payload_root = null)
    {
        return $this->request('PUT', $uri, $payload, [], $authorised, 'json', $payload_root);
    }
}
