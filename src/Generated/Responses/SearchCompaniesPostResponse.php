<?php

namespace TheCompaniesApi\Sdk\Generated\Responses;

/**
 * SearchCompaniesPostResponse - API response class
 * 
 * 
 */
class SearchCompaniesPostResponse
{
    public ?array $companies = null;
    public \TheCompaniesApi\Sdk\Generated\Models\PaginationMeta $meta;
    public ?array $query = null;

    public function __construct(array $data = [])
    {
        $this->companies = $this->convertProperty($data['companies'] ?? null, 'companies');
        $this->meta = $this->convertProperty($data['meta'] ?? null, 'meta');
        $this->query = $this->convertProperty($data['query'] ?? null, 'query');
    }

    private function convertProperty(mixed $value, string $property): mixed
    {
        // Handle model references and arrays
        if ($property === 'companies') {
            return is_array($value) ? $value : null;
        }
        if ($property === 'meta' && is_array($value)) {
            return new \TheCompaniesApi\Sdk\Generated\Models\PaginationMeta($value);
        }
        if ($property === 'query') {
            return is_array($value) ? $value : null;
        }
        return $value;
    }
}
