<?php

use PHPUnit\Framework\TestCase;
use SimpleSquid\Vend\Exceptions\BadRequestException;
use SimpleSquid\Vend\Exceptions\NotFoundException;
use SimpleSquid\Vend\Resources\TwoDotZero\ProductCollection;
use SimpleSquid\Vend\Vend;

class VendTest extends TestCase
{
    /** @var \Mockery\LegacyMockInterface|\Mockery\MockInterface|GuzzleHttp\Client */
    private $http;

    /** @var \SimpleSquid\Vend\Vend */
    private $vend;

    public function setUp(): void
    {
        parent::setUp();

        $this->vend = Vend::getInstance();

        $this->vend->guzzle = $this->http = Mockery::mock('GuzzleHttp\Client');

        $this->vend->userAgent('Vend SDK')
                   ->domainPrefix('abc')
                   ->personalAccessToken('def');
    }

    public function tearDown(): void
    {
        Mockery::close();
    }

    /** @test */
    public function test_handling_404_errors()
    {
        $this->expectException(NotFoundException::class);

        $this->http->shouldReceive('request')->once()
                   ->with('GET', 'https://abc.vendhq.com/api/2.0/products', Mockery::type('array'))
                   ->andReturn($response = Mockery::mock('GuzzleHttp\Psr7\Response'));

        $response->shouldReceive('getStatusCode')->twice()->andReturn(404);

        $response->shouldReceive('getBody')->once();

        $this->vend->product->get();
    }

    /** @test */
    public function test_handling_bad_request_errors()
    {
        $this->http->shouldReceive('request')->once()
                   ->with('GET', 'https://abc.vendhq.com/api/2.0/products', Mockery::type('array'))
                   ->andReturn($response = Mockery::mock('GuzzleHttp\Psr7\Response'));

        $response->shouldReceive('getStatusCode')->twice()->andReturn(400);

        $response->shouldReceive('getBody')->once()->andReturn(json_encode(['error' => 'Error!']));

        $e = new BadRequestException();

        try {
            $this->vend->product->get();
        } catch (BadRequestException $e) {
        }

        $this->assertEquals(['error' => 'Error!'], $e->errors());
    }

    /** @test */
    public function test_making_basic_requests()
    {
        $this->http->shouldReceive('request')->once()
                   ->with('GET', 'https://abc.vendhq.com/api/2.0/products', Mockery::type('array'))
                   ->andReturn($response = Mockery::mock('GuzzleHttp\Psr7\Response'));

        $response->shouldReceive('getStatusCode')->once()->andReturn(200);

        $response->shouldReceive('getBody')->once()
                 ->andReturn(json_encode(['data' => (new ProductCollection())->toArray()]));

        $this->assertInstanceOf(ProductCollection::class, $this->vend->product->get());
    }
}
