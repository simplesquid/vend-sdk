<?php

namespace SimpleSquid\Vend;

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
     * @param  int  $timeout
     *
     * @return mixed
     *
     * @throws ConfirmationTimeoutException
     */
    public function confirm(callable $callback, int $timeout = null)
    {
        if (is_null($timeout)) {
            $timeout = $this->getConfirmationTimeout();
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
     * @param  array  $payload
     *
     * @return mixed
     *
     * @throws AuthorisationException
     * @throws BadRequestException
     * @throws NotFoundException
     * @throws RateLimitException
     * @throws RequestException
     * @throws TokenExpiredException
     * @throws UnauthorisedException
     * @throws UnknownException
     */
    private function delete(string $uri, array $payload = [])
    {
        return $this->request('DELETE', $uri, $payload);
    }

    /**
     * Make a GET request to Vend and return the response.
     *
     * @param  string  $uri
     * @param  array  $query
     *
     * @return mixed
     *
     * @throws AuthorisationException
     * @throws BadRequestException
     * @throws NotFoundException
     * @throws RateLimitException
     * @throws RequestException
     * @throws TokenExpiredException
     * @throws UnauthorisedException
     * @throws UnknownException
     */
    private function get(string $uri, array $query = [])
    {
        return $this->request('GET', $uri, [], $query);
    }

    /**
     * Make request to Forge servers and return the response.
     *
     * @param  string  $verb
     * @param  string  $uri
     * @param  array  $payload
     * @param  array  $query
     * @param  string  $format  One of `json`, `form_params`, `multipart`.
     *
     * @return mixed
     *
     * @throws BadRequestException
     * @throws NotFoundException
     * @throws RateLimitException
     * @throws RequestException
     * @throws UnauthorisedException
     * @throws UnknownException
     * @throws TokenExpiredException
     * @throws AuthorisationException
     */
    private function request(string $verb, string $uri, array $payload = [], array $query = [], string $format = 'json')
    {
        $options = [
            'timeout' => $this->getRequestTimeout(),
            'query'   => $query,
        ];

        if ($this->isAuthorised()) {
            $options['headers']['Authorization'] = 'Bearer ' . $this->getAccessToken();
        }

        if ($format === 'json') {
            $options['json'] = $payload;
            $options['headers']['Content-Type'] = 'application/json';
        } else {
            $options[$format] = $payload;
        }

        try {
            $response = $this->guzzle->request($verb, "https://$this->domainPrefix.vendhq.com/api/$uri", $options);
        } catch (GuzzleException $e) {
            throw new RequestException($e);
        }

        if (in_array($response->getStatusCode(), [200, 201, 204])) {
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
     *
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

        if ($response->getStatusCode() === 404) {
            throw new NotFoundException($errors);
        }

        if ($response->getStatusCode() === 400) {
            throw new BadRequestException($errors);
        }

        if ($response->getStatusCode() === 401) {
            throw new UnauthorisedException();
        }

        if ($response->getStatusCode() === 429) {
            throw new RateLimitException($body);
        }

        throw new UnknownException($errors);
    }

    /**
     * Make a POST request to Vend and return the response.
     *
     * @param  string  $uri
     * @param  array  $payload
     * @param  string  $format
     *
     * @return mixed
     *
     * @throws AuthorisationException
     * @throws BadRequestException
     * @throws NotFoundException
     * @throws RateLimitException
     * @throws RequestException
     * @throws TokenExpiredException
     * @throws UnauthorisedException
     * @throws UnknownException
     */
    private function post(string $uri, array $payload = [], string $format = 'json')
    {
        return $this->request('POST', $uri, $payload, [], $format);
    }

    /**
     * Make a PUT request to Vend and return the response.
     *
     * @param  string  $uri
     * @param  array  $payload
     *
     * @return mixed
     *
     * @throws AuthorisationException
     * @throws BadRequestException
     * @throws NotFoundException
     * @throws RateLimitException
     * @throws RequestException
     * @throws TokenExpiredException
     * @throws UnauthorisedException
     * @throws UnknownException
     */
    private function put(string $uri, array $payload = [])
    {
        return $this->request('PUT', $uri, $payload);
    }
}