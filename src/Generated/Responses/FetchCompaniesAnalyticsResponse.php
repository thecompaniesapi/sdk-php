<?php

namespace TheCompaniesApi\Sdk\Generated\Responses;

/**
 * FetchCompaniesAnalyticsResponse - API response class
 * 
 * 
 */
class FetchCompaniesAnalyticsResponse
{
    public ?array $data = null;
    public ?array $meta = null;

    public function __construct(array $data = [])
    {
        $this->data = $this->convertProperty($data['data'] ?? null, 'data');
        $this->meta = $this->convertProperty($data['meta'] ?? null, 'meta');
    }

    private function convertProperty(mixed $value, string $property): mixed
    {
        // Handle model references and arrays
        if ($property === 'data') {
            return is_array($value) ? $value : null;
        }
        if ($property === 'meta') {
            return is_array($value) ? $value : null;
        }
        return $value;
    }
}
