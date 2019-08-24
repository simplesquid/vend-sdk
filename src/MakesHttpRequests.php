<?php

namespace SimpleSquid\Vend;

use Exception;
use Psr\Http\Message\ResponseInterface;
use SimpleSquid\Vend\Exceptions\ConfirmationTimeoutException;
use SimpleSquid\Vend\Exceptions\FailedActionException;
use SimpleSquid\Vend\Exceptions\NotFoundException;
use SimpleSquid\Vend\Exceptions\ValidationException;

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
     * @throws Exception
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
     * @throws Exception
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
     * @param  array  $query
     * @param  array  $payload
     * @param  bool  $json
     *
     * @return mixed
     *
     * @throws Exception
     */
    private function request(string $verb, string $uri, array $payload = [], array $query = [], bool $json = true)
    {
        $options = [
            'timeout' => $this->getRequestTimeout(),
            'query'   => $query,
        ];

        if ($this->isAuthorised()) {
            $options['headers'] = ['Authorization' => 'Bearer ' . $this->getAccessToken()];
        }

        if ($json) {
            $options['json'] = $payload;
        } else {
            $options['form_params'] = $payload;
        }

        $response = $this->guzzle->request($verb, $uri, $options);

        if ($response->getStatusCode() != 200) {
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
     * @throws Exception
     */
    private function handleRequestError(ResponseInterface $response)
    {
        if ($response->getStatusCode() == 422) {
            throw new ValidationException(json_decode((string) $response->getBody(), true));
        }

        if ($response->getStatusCode() == 404) {
            throw new NotFoundException();
        }

        if ($response->getStatusCode() == 400) {
            throw new FailedActionException((string) $response->getBody());
        }

        throw new Exception((string) $response->getBody());
    }

    /**
     * Make a POST request to Vend and return the response.
     *
     * @param  string  $uri
     * @param  array  $payload
     * @param  bool  $json
     *
     * @return mixed
     *
     * @throws Exception
     */
    private function post(string $uri, array $payload = [], bool $json = true)
    {
        return $this->request('POST', $uri, $payload, [], $json);
    }

    /**
     * Make a PUT request to Vend and return the response.
     *
     * @param  string  $uri
     * @param  array  $payload
     *
     * @return mixed
     *
     * @throws Exception
     */
    private function put(string $uri, array $payload = [])
    {
        return $this->request('PUT', $uri, $payload);
    }
}