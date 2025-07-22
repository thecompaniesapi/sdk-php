<?php

namespace TheCompaniesApi\Sdk\Generated\Responses;

/**
 * SearchCitiesResponse - API response class
 * 
 * 
 */
class SearchCitiesResponse
{
    public ?array $cities = null;
    public \TheCompaniesApi\Sdk\Generated\Models\PaginationMeta $meta;

    public function __construct(array $data = [])
    {
        $this->cities = $this->convertProperty($data['cities'] ?? null, 'cities');
        $this->meta = $this->convertProperty($data['meta'] ?? null, 'meta');
    }

    private function convertProperty(mixed $value, string $property): mixed
    {
        // Handle model references and arrays
        if ($property === 'cities') {
            return is_array($value) ? $value : null;
        }
        if ($property === 'meta' && is_array($value)) {
            return new \TheCompaniesApi\Sdk\Generated\Models\PaginationMeta($value);
        }
        return $value;
    }
}
