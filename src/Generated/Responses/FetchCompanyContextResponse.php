<?php

namespace TheCompaniesApi\Sdk\Generated\Responses;

/**
 * FetchCompanyContextResponse - API response class
 * 
 * 
 */
class FetchCompanyContextResponse
{
    public ?array $context = null;
    public ?array $meta = null;

    public function __construct(array $data = [])
    {
        $this->context = $this->convertProperty($data['context'] ?? null, 'context');
        $this->meta = $this->convertProperty($data['meta'] ?? null, 'meta');
    }

    private function convertProperty(mixed $value, string $property): mixed
    {
        // Handle model references and arrays
        if ($property === 'context') {
            return is_array($value) ? $value : null;
        }
        if ($property === 'meta') {
            return is_array($value) ? $value : null;
        }
        return $value;
    }
}
