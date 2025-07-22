<?php

namespace TheCompaniesApi\Sdk\Generated\Responses;

/**
 * SearchCountriesResponse - API response class
 * 
 * 
 */
class SearchCountriesResponse
{
    public ?array $countries = null;
    public \TheCompaniesApi\Sdk\Generated\Models\PaginationMeta $meta;

    public function __construct(array $data = [])
    {
        $this->countries = $this->convertProperty($data['countries'] ?? null, 'countries');
        $this->meta = $this->convertProperty($data['meta'] ?? null, 'meta');
    }

    private function convertProperty(mixed $value, string $property): mixed
    {
        // Handle model references and arrays
        if ($property === 'countries') {
            return is_array($value) ? $value : null;
        }
        if ($property === 'meta' && is_array($value)) {
            return new \TheCompaniesApi\Sdk\Generated\Models\PaginationMeta($value);
        }
        return $value;
    }
}
