<?php

namespace TheCompaniesApi\Sdk;

/**
 * Base HTTP client for The Companies API SDK
 * 
 * This provides the core HTTP functionality and is extended by the GeneratedClient
 * to provide typed API methods.
 */
class BaseClient
{
    private HttpClient $httpClient;
    private Configuration $config;

    /**
     * Create a new client instance
     * 
     * @param Configuration|array $config Configuration object or array of parameters
     */
    public function __construct(Configuration|array $config = [])
    {
        // Support both Configuration objects and parameter arrays
        if (is_array($config)) {
            $this->config = new Configuration([
                'apiToken' => $config['apiToken'] ?? null,
                'apiUrl' => $config['apiUrl'] ?? 'https://api.thecompaniesapi.com',
                'visitorId' => $config['visitorId'] ?? null,
                'timeout' => $config['timeout'] ?? 30,
                'verifySSL' => $config['verifySSL'] ?? true,
            ]);
        } else {
            $this->config = $config;
        }
        
        $this->httpClient = new HttpClient($this->config);
    }



    /**
     * Get the configuration
     */
    public function getConfiguration(): Configuration
    {
        return $this->config;
    }

    /**
     * Get the HTTP client
     */
    public function getHttpClient(): HttpClient
    {
        return $this->httpClient;
    }

    /**
     * Make a GET request to any endpoint
     */
    public function get(string $endpoint, array $params = [], array $headers = []): array
    {
        return $this->httpClient->get($endpoint, $params, $headers);
    }

    /**
     * Make a POST request to any endpoint
     */
    public function post(string $endpoint, array $data = [], array $headers = []): array
    {
        return $this->httpClient->post($endpoint, $data, $headers);
    }

    /**
     * Make a PUT request to any endpoint
     */
    public function put(string $endpoint, array $data = [], array $headers = []): array
    {
        return $this->httpClient->put($endpoint, $data, $headers);
    }

    /**
     * Make a PATCH request to any endpoint
     */
    public function patch(string $endpoint, array $data = [], array $headers = []): array
    {
        return $this->httpClient->patch($endpoint, $data, $headers);
    }

    /**
     * Make a DELETE request to any endpoint
     */
    public function delete(string $endpoint, array $headers = []): array
    {
        return $this->httpClient->delete($endpoint, $headers);
    }
}
