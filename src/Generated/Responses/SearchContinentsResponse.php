<?php

namespace TheCompaniesApi\Sdk\Generated\Responses;

/**
 * SearchContinentsResponse - API response class
 * 
 * 
 */
class SearchContinentsResponse
{
    public ?array $continents = null;
    public \TheCompaniesApi\Sdk\Generated\Models\PaginationMeta $meta;

    public function __construct(array $data = [])
    {
        $this->continents = $this->convertProperty($data['continents'] ?? null, 'continents');
        $this->meta = $this->convertProperty($data['meta'] ?? null, 'meta');
    }

    private function convertProperty(mixed $value, string $property): mixed
    {
        // Handle model references and arrays
        if ($property === 'continents') {
            return is_array($value) ? $value : null;
        }
        if ($property === 'meta' && is_array($value)) {
            return new \TheCompaniesApi\Sdk\Generated\Models\PaginationMeta($value);
        }
        return $value;
    }
}
