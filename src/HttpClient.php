<?php

namespace TheCompaniesApi\Sdk;

use GuzzleHttp\Client as GuzzleClient;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Exception\ClientException;
use GuzzleHttp\Exception\ServerException;
use GuzzleHttp\Psr7\Request;
use Psr\Http\Message\ResponseInterface;

/**
 * HTTP Client for The Companies API
 */
class HttpClient
{
    private GuzzleClient $client;
    private Configuration $config;

    public function __construct(Configuration $config)
    {
        $this->config = $config;
        $this->client = new GuzzleClient([
            'timeout' => $config->getTimeout(),
            'verify' => $config->getVerifySSL(),
            'base_uri' => $config->getBaseUrl(),
        ]);
    }

    /**
     * Make a GET request
     */
    public function get(string $endpoint, array $params = [], array $headers = []): array
    {
        $url = $this->buildUrl($endpoint, $params);
        return $this->makeRequest('GET', $url, [], $headers);
    }

    /**
     * Make a POST request
     */
    public function post(string $endpoint, array $data = [], array $headers = []): array
    {
        return $this->makeRequest('POST', $endpoint, $data, $headers);
    }

    /**
     * Make a PUT request
     */
    public function put(string $endpoint, array $data = [], array $headers = []): array
    {
        return $this->makeRequest('PUT', $endpoint, $data, $headers);
    }

    /**
     * Make a PATCH request
     */
    public function patch(string $endpoint, array $data = [], array $headers = []): array
    {
        return $this->makeRequest('PATCH', $endpoint, $data, $headers);
    }

    /**
     * Make a DELETE request
     */
    public function delete(string $endpoint, array $headers = []): array
    {
        return $this->makeRequest('DELETE', $endpoint, [], $headers);
    }

    /**
     * Make an HTTP request
     */
    private function makeRequest(string $method, string $endpoint, array $data = [], array $headers = []): array
    {
        try {
            $requestHeaders = array_merge($this->config->getAllHeaders(), $headers);
            
            $options = [
                'headers' => $requestHeaders,
            ];

            if (!empty($data) && in_array($method, ['POST', 'PUT', 'PATCH'])) {
                $options['json'] = $data;
            }

            $response = $this->client->request($method, $endpoint, $options);
            
            return $this->parseResponse($response);
        } catch (ClientException $e) {
            throw $this->handleClientException($e);
        } catch (ServerException $e) {
            throw $this->handleServerException($e);
        } catch (RequestException $e) {
            throw $this->handleRequestException($e);
        }
    }

    /**
     * Build URL with query parameters
     */
    private function buildUrl(string $endpoint, array $params = []): string
    {
        if (empty($params)) {
            return $endpoint;
        }

        $queryString = $this->buildQueryString($params);
        $separator = strpos($endpoint, '?') !== false ? '&' : '?';
        
        return $endpoint . $separator . $queryString;
    }

    /**
     * Build query string from parameters
     */
    private function buildQueryString(array $params): string
    {
        $queryPairs = [];
        
        foreach ($params as $key => $value) {
            if (is_array($value) || is_object($value)) {
                $jsonEncoded = json_encode($value);
                $queryPairs[] = urlencode($key) . '=' . urlencode($jsonEncoded);
            } else {
                // Convert to string and URL encode
                $stringValue = $value !== null ? (string)$value : '';
                $queryPairs[] = urlencode($key) . '=' . urlencode($stringValue);
            }
        }

        return implode('&', $queryPairs);
    }

    /**
     * Parse HTTP response
     */
    private function parseResponse(ResponseInterface $response): array
    {
        $body = $response->getBody()->getContents();
        $statusCode = $response->getStatusCode();
        
        // Try to decode JSON response
        $data = json_decode($body, true);
        
        if (json_last_error() !== JSON_ERROR_NONE) {
            // If not JSON, return raw response
            return [
                'status_code' => $statusCode,
                'headers' => $this->getResponseHeaders($response),
                'data' => $body,
                'raw' => true,
            ];
        }

        return [
            'status_code' => $statusCode,
            'headers' => $this->getResponseHeaders($response),
            'data' => $data,
            'raw' => false,
        ];
    }

    /**
     * Get response headers as associative array
     */
    private function getResponseHeaders(ResponseInterface $response): array
    {
        $headers = [];
        foreach ($response->getHeaders() as $name => $values) {
            $headers[$name] = implode(', ', $values);
        }
        return $headers;
    }

    /**
     * Handle client exceptions (4xx errors)
     */
    private function handleClientException(ClientException $e): ApiException
    {
        $response = $e->getResponse();
        $statusCode = $response ? $response->getStatusCode() : 0;
        $body = $response ? $response->getBody()->getContents() : '';
        
        $data = json_decode($body, true);
        $message = $data['message'] ?? $e->getMessage();
        
        return new ApiException(
            $message,
            $statusCode,
            $data ?? ['error' => $message]
        );
    }

    /**
     * Handle server exceptions (5xx errors)
     */
    private function handleServerException(ServerException $e): ApiException
    {
        $response = $e->getResponse();
        $statusCode = $response ? $response->getStatusCode() : 500;
        $body = $response ? $response->getBody()->getContents() : '';
        
        $data = json_decode($body, true);
        $message = $data['message'] ?? 'Server error occurred';
        
        return new ApiException(
            $message,
            $statusCode,
            $data ?? ['error' => $message]
        );
    }

    /**
     * Handle request exceptions (network errors, etc.)
     */
    private function handleRequestException(RequestException $e): ApiException
    {
        return new ApiException(
            'Request failed: ' . $e->getMessage(),
            0,
            ['error' => $e->getMessage()]
        );
    }
} 
