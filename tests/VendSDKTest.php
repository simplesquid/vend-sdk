<?php

use PHPUnit\Framework\TestCase;
use SimpleSquid\Vend\Exceptions\BadRequestException;
use SimpleSquid\Vend\Exceptions\NotFoundException;
use SimpleSquid\Vend\Resources\TwoDotZero\ProductCollection;
use SimpleSquid\Vend\Vend;

class ForgeSdkTest extends TestCase
{
    public function tearDown(): void
    {
        Mockery::close();
    }

    /** @test */
    public function test_handling_404_errors()
    {
        $this->expectException(NotFoundException::class);

        $vend = Vend::getInstance();
        $vend->makeClient(null, $http = Mockery::mock('GuzzleHttp\Client'));
        $vend->setPersonalAccessToken('abc', 'def');

        $http->shouldReceive('request')
             ->once()
             ->with('GET', 'https://abc.vendhq.com/api/2.0/products', Mockery::type('array'))
             ->andReturn(
                 $response = Mockery::mock('GuzzleHttp\Psr7\Response')
             );

        $response->shouldReceive('getStatusCode')->twice()->andReturn(404);
        $response->shouldReceive('getBody')->once();

        $vend->products();
    }

    /** @test */
    public function test_handling_bad_request_errors()
    {
        $vend = Vend::getInstance();
        $vend->makeClient(null, $http = Mockery::mock('GuzzleHttp\Client'));
        $vend->setPersonalAccessToken('abc', 'def');

        $http->shouldReceive('request')
             ->once()
             ->with('GET', 'https://abc.vendhq.com/api/2.0/products', Mockery::type('array'))
             ->andReturn(
                 $response = Mockery::mock('GuzzleHttp\Psr7\Response')
             );

        $response->shouldReceive('getStatusCode')->twice()->andReturn(400);
        $response->shouldReceive('getBody')->once()->andReturn(json_encode(['error' => 'Error!']));

        try {
            $vend->products();
        } catch (BadRequestException $e) {
        }

        /** @var BadRequestException $e */
        $this->assertEquals(['error' => 'Error!'], $e->errors());
    }

    /** @test */
    public function test_making_basic_requests()
    {
        $vend = Vend::getInstance();
        $vend->makeClient(null, $http = Mockery::mock('GuzzleHttp\Client'))
             ->setPersonalAccessToken('abc', 'def');

        $http->shouldReceive('request')
             ->once()
             ->with('GET', 'https://abc.vendhq.com/api/2.0/products', Mockery::type('array'))
             ->andReturn(
                 $response = Mockery::mock('GuzzleHttp\Psr7\Response')
             );

        $response->shouldReceive('getStatusCode')->once()->andReturn(200);
        $response->shouldReceive('getBody')
                 ->once()
                 ->andReturn(json_encode(['data' => (new ProductCollection())->toArray()]));

        $this->assertInstanceOf(ProductCollection::class, $vend->products());
    }
}