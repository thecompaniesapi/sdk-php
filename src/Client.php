<?php

namespace TheCompaniesApi\Sdk;

/**
 * The main client for The Companies API SDK
 */
class Client
{
    private HttpClient $httpClient;
    private Configuration $config;

    public function __construct(Configuration $config)
    {
        $this->config = $config;
        $this->httpClient = new HttpClient($config);
    }

    /**
     * Create a client with API token authentication
     */
    public static function withApiToken(string $apiToken, array $options = []): self
    {
        $config = new Configuration(array_merge($options, ['apiToken' => $apiToken]));
        return new self($config);
    }

    /**
     * Create a client with custom configuration
     */
    public static function withConfiguration(Configuration $config): self
    {
        return new self($config);
    }

    /**
     * Create a client with parameters similar to TypeScript SDK
     */
    public static function create(array $params = []): self
    {
        $config = new Configuration([
            'apiToken' => $params['apiToken'] ?? null,
            'apiUrl' => $params['apiUrl'] ?? 'https://api.thecompaniesapi.com',
            'visitorId' => $params['visitorId'] ?? null,
            'timeout' => $params['timeout'] ?? 30,
            'verifySSL' => $params['verifySSL'] ?? true,
        ]);
        
        return new self($config);
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

    // Here you can add specific API endpoint methods
    // For example:
    
    /**
     * Example method for companies endpoint
     * This would be replaced with actual API endpoints once you know the API structure
     */
    public function getCompany(string $id, array $params = []): array
    {
        return $this->get("/companies/{$id}", $params);
    }

    /**
     * Example method for searching companies
     * This would be replaced with actual API endpoints once you know the API structure
     */
    public function searchCompanies(array $searchParams = []): array
    {
        return $this->get("/companies", $searchParams);
    }

    /**
     * Example method for getting company data with filters
     * This would be replaced with actual API endpoints once you know the API structure
     */
    public function getCompanies(array $filters = []): array
    {
        return $this->get("/companies", $filters);
    }
}
