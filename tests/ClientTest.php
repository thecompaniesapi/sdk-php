<?php

namespace TheCompaniesApi\Sdk\Tests;

use PHPUnit\Framework\TestCase;
use TheCompaniesApi\Sdk\Client;
use TheCompaniesApi\Sdk\Configuration;
use TheCompaniesApi\Sdk\HttpClient;
use TheCompaniesApi\Sdk\ApiException;
use TheCompaniesApi\Sdk\Generated\GeneratedClient;

class ClientTest extends TestCase
{
    public function testClientCreationWithApiToken()
    {
        $client = new Client(['apiToken' => 'test-api-token']);
        
        $this->assertInstanceOf(GeneratedClient::class, $client);
        $this->assertInstanceOf(Configuration::class, $client->getConfiguration());
        $this->assertEquals('test-api-token', $client->getConfiguration()->getApiToken());
    }

    public function testClientCreationWithArrayParameters()
    {
        $client = new Client([
            'apiToken' => 'test-api-token',
            'apiUrl' => 'https://test.api.com',
            'visitorId' => 'visitor-123',
            'timeout' => 60
        ]);
        
        $this->assertInstanceOf(GeneratedClient::class, $client);
        $this->assertInstanceOf(Configuration::class, $client->getConfiguration());
        $this->assertEquals('test-api-token', $client->getConfiguration()->getApiToken());
        $this->assertEquals('https://test.api.com', $client->getConfiguration()->getBaseUrl());
        $this->assertEquals('visitor-123', $client->getConfiguration()->getVisitorId());
        $this->assertEquals(60, $client->getConfiguration()->getTimeout());
    }

    public function testClientCreationWithConfiguration()
    {
        $config = new Configuration([
            'baseUrl' => 'https://test.api.com',
            'apiToken' => 'test-token',
            'visitorId' => 'visitor-456',
            'timeout' => 60
        ]);

        $client = new Client($config);
        
        $this->assertInstanceOf(GeneratedClient::class, $client);   
        $this->assertSame($config, $client->getConfiguration());
        $this->assertEquals('https://test.api.com', $client->getConfiguration()->getBaseUrl());
        $this->assertEquals('test-token', $client->getConfiguration()->getApiToken());
        $this->assertEquals('visitor-456', $client->getConfiguration()->getVisitorId());
        $this->assertEquals(60, $client->getConfiguration()->getTimeout());
    }

    public function testConfigurationDefaults()
    {
        $config = new Configuration();
        
        $this->assertEquals('https://api.thecompaniesapi.com', $config->getBaseUrl());
        $this->assertEquals(30, $config->getTimeout());
        $this->assertTrue($config->getVerifySSL());
        $this->assertNull($config->getApiToken());
        $this->assertNull($config->getVisitorId());
    }

    public function testConfigurationWithApiUrl()
    {
        $config = new Configuration(['apiUrl' => 'https://custom.api.com']);
        
        $this->assertEquals('https://custom.api.com', $config->getBaseUrl());
    }

    public function testConfigurationAuthHeaders()
    {
        $config = new Configuration(['apiToken' => 'test-token']);
        $headers = $config->getAuthHeaders();
        
        $this->assertEquals(['Authorization' => 'Basic test-token'], $headers);

        $config = new Configuration();
        $headers = $config->getAuthHeaders();
        
        $this->assertEquals([], $headers);
    }

    public function testConfigurationAuthHeadersWithVisitorId()
    {
        $config = new Configuration([
            'apiToken' => 'test-token',
            'visitorId' => 'visitor-123'
        ]);
        $headers = $config->getAuthHeaders();
        
        $expected = [
            'Authorization' => 'Basic test-token',
            'Tca-Visitor-Id' => 'visitor-123'
        ];
        $this->assertEquals($expected, $headers);
    }

    public function testConfigurationAllHeaders()
    {
        $config = new Configuration([
            'apiToken' => 'test-token',
            'visitorId' => 'visitor-123',
            'defaultHeaders' => ['X-Custom' => 'value']
        ]);
        
        $headers = $config->getAllHeaders();
        
        $this->assertArrayHasKey('Content-Type', $headers);
        $this->assertArrayHasKey('Accept', $headers);
        $this->assertArrayHasKey('User-Agent', $headers);
        $this->assertArrayHasKey('Authorization', $headers);
        $this->assertArrayHasKey('Tca-Visitor-Id', $headers);
        $this->assertArrayHasKey('X-Custom', $headers);
        
        $this->assertEquals('application/json', $headers['Content-Type']);
        $this->assertEquals('Basic test-token', $headers['Authorization']);
        $this->assertEquals('visitor-123', $headers['Tca-Visitor-Id']);
        $this->assertEquals('value', $headers['X-Custom']);
    }

    public function testHttpClientCreation()
    {
        $config = new Configuration(['apiToken' => 'test-token']);
        $client = new HttpClient($config);
        
        $this->assertInstanceOf(HttpClient::class, $client);
    }

    public function testApiExceptionCreation()
    {
        $exception = new ApiException('Test error', 404, ['error' => 'Not found']);
        
        $this->assertEquals('Test error', $exception->getMessage());
        $this->assertEquals(404, $exception->getStatusCode());
        $this->assertEquals(['error' => 'Not found'], $exception->getResponseData());
        $this->assertTrue($exception->isClientError());
        $this->assertFalse($exception->isServerError());
        $this->assertFalse($exception->isNetworkError());
    }

    public function testApiExceptionTypes()
    {
        // Client error (4xx)
        $clientException = new ApiException('Client error', 400);
        $this->assertTrue($clientException->isClientError());
        $this->assertFalse($clientException->isServerError());
        $this->assertFalse($clientException->isNetworkError());

        // Server error (5xx)
        $serverException = new ApiException('Server error', 500);
        $this->assertFalse($serverException->isClientError());
        $this->assertTrue($serverException->isServerError());
        $this->assertFalse($serverException->isNetworkError());

        // Network error (0)
        $networkException = new ApiException('Network error', 0);
        $this->assertFalse($networkException->isClientError());
        $this->assertFalse($networkException->isServerError());
        $this->assertTrue($networkException->isNetworkError());
    }

    public function testApiExceptionErrorDetails()
    {
        $exception = new ApiException('Test error', 422, ['validation' => 'failed']);
        $details = $exception->getErrorDetails();
        
        $this->assertArrayHasKey('message', $details);
        $this->assertArrayHasKey('status_code', $details);
        $this->assertArrayHasKey('response_data', $details);
        
        $this->assertEquals('Test error', $details['message']);
        $this->assertEquals(422, $details['status_code']);
        $this->assertEquals(['validation' => 'failed'], $details['response_data']);
    }

    public function testConfigurationFluentInterface()
    {
        $config = new Configuration();
        
        $result = $config
            ->setBaseUrl('https://custom.api.com')
            ->setApiToken('new-token')
            ->setVisitorId('visitor-789')
            ->setTimeout(120)
            ->setVerifySSL(false);
        
        $this->assertSame($config, $result);
        $this->assertEquals('https://custom.api.com', $config->getBaseUrl());
        $this->assertEquals('new-token', $config->getApiToken());
        $this->assertEquals('visitor-789', $config->getVisitorId());
        $this->assertEquals(120, $config->getTimeout());
        $this->assertFalse($config->getVerifySSL());
    }

    public function testDefaultHeadersManagement()
    {
        $config = new Configuration();
        
        $config->addDefaultHeader('X-Test', 'value1');
        $config->addDefaultHeader('X-Another', 'value2');
        
        $headers = $config->getDefaultHeaders();
        $this->assertEquals(['X-Test' => 'value1', 'X-Another' => 'value2'], $headers);

        $config->setDefaultHeaders(['X-New' => 'new-value']);
        $headers = $config->getDefaultHeaders();
        $this->assertEquals(['X-New' => 'new-value'], $headers);
    }

    public function testCreateClientDefaults()
    {
        $client = new Client();
        
        $this->assertInstanceOf(GeneratedClient::class, $client);
        $this->assertEquals('https://api.thecompaniesapi.com', $client->getConfiguration()->getBaseUrl());
        $this->assertNull($client->getConfiguration()->getApiToken());
        $this->assertNull($client->getConfiguration()->getVisitorId());
        $this->assertEquals(30, $client->getConfiguration()->getTimeout());
    }

    public function testQueryParameterSerialization()
    {
        // Test the query parameter serialization by using reflection to access the private method
        $config = new Configuration(['apiToken' => 'test-token']);
        $httpClient = new HttpClient($config);
        
        $reflection = new \ReflectionClass($httpClient);
        $method = $reflection->getMethod('buildQueryString');
        $method->setAccessible(true);
        
        // Test array serialization (should be JSON encoded)
        $arrayParams = [
            'filters' => ['industry' => 'technology', 'country' => 'US'],
            'sort' => ['name', 'date'],
            'simple' => 'value'
        ];
        
        $result = $method->invoke($httpClient, $arrayParams);
        
        // Verify arrays and objects are JSON encoded
        $this->assertStringContainsString('filters=' . urlencode('{"industry":"technology","country":"US"}'), $result);
        $this->assertStringContainsString('sort=' . urlencode('["name","date"]'), $result);
        $this->assertStringContainsString('simple=value', $result);
    }

    public function testQueryParameterSerializationWithObjects()
    {
        $config = new Configuration(['apiToken' => 'test-token']);
        $httpClient = new HttpClient($config);
        
        $reflection = new \ReflectionClass($httpClient);
        $method = $reflection->getMethod('buildQueryString');
        $method->setAccessible(true);
        
        // Test object serialization
        $objectParams = [
            'filter' => (object)['type' => 'company', 'active' => true],
            'numbers' => [1, 2, 3],
            'null_value' => null,
            'empty_string' => '',
            'zero' => 0
        ];
        
        $result = $method->invoke($httpClient, $objectParams);
        
        // Check that objects are JSON encoded
        $this->assertStringContainsString('filter=' . urlencode('{"type":"company","active":true}'), $result);
        $this->assertStringContainsString('numbers=' . urlencode('[1,2,3]'), $result);
        $this->assertStringContainsString('null_value=', $result);
        $this->assertStringContainsString('empty_string=', $result);
        $this->assertStringContainsString('zero=0', $result);
    }
}
