<?php

namespace TheCompaniesApi\Sdk;

/**
 * Configuration class for The Companies API SDK
 */
class Configuration
{
    private string $baseUrl;
    private ?string $apiToken = null;
    private ?string $visitorId = null;
    private array $defaultHeaders = [];
    private int $timeout = 30;
    private bool $verifySSL = true;

    public function __construct(array $config = [])
    {
        $this->baseUrl = $config['baseUrl'] ?? $config['apiUrl'] ?? 'https://api.thecompaniesapi.com';
        $this->apiToken = $config['apiToken'] ?? null;
        $this->visitorId = $config['visitorId'] ?? null;
        $this->timeout = $config['timeout'] ?? 30;
        $this->verifySSL = $config['verifySSL'] ?? true;
        $this->defaultHeaders = $config['defaultHeaders'] ?? [];
    }

    public function getBaseUrl(): string
    {
        return $this->baseUrl;
    }

    public function setBaseUrl(string $baseUrl): self
    {
        $this->baseUrl = $baseUrl;
        return $this;
    }

    public function getApiToken(): ?string
    {
        return $this->apiToken;
    }

    public function setApiToken(?string $apiToken): self
    {
        $this->apiToken = $apiToken;
        return $this;
    }

    public function getVisitorId(): ?string
    {
        return $this->visitorId;
    }

    public function setVisitorId(?string $visitorId): self
    {
        $this->visitorId = $visitorId;
        return $this;
    }

    public function getDefaultHeaders(): array
    {
        return $this->defaultHeaders;
    }

    public function setDefaultHeaders(array $headers): self
    {
        $this->defaultHeaders = $headers;
        return $this;
    }

    public function addDefaultHeader(string $name, string $value): self
    {
        $this->defaultHeaders[$name] = $value;
        return $this;
    }

    public function getTimeout(): int
    {
        return $this->timeout;
    }

    public function setTimeout(int $timeout): self
    {
        $this->timeout = $timeout;
        return $this;
    }

    public function getVerifySSL(): bool
    {
        return $this->verifySSL;
    }

    public function setVerifySSL(bool $verifySSL): self
    {
        $this->verifySSL = $verifySSL;
        return $this;
    }

    /**
     * Get authentication headers for requests
     */
    public function getAuthHeaders(): array
    {
        $headers = [];

        if ($this->apiToken) {
            $headers['Authorization'] = 'Basic ' . $this->apiToken;
        }

        if ($this->visitorId) {
            $headers['Tca-Visitor-Id'] = $this->visitorId;
        }

        return $headers;
    }

    /**
     * Get all headers to be used in requests
     */
    public function getAllHeaders(): array
    {
        return array_merge(
            [
                'Content-Type' => 'application/json',
                'Accept' => 'application/json',
                'User-Agent' => 'TheCompaniesApi-PHP-SDK/1.0.0',
            ],
            $this->defaultHeaders,
            $this->getAuthHeaders()
        );
    }
} 
