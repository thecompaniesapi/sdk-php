<?php

namespace TheCompaniesApi\Sdk\Generated\Responses;

/**
 * SearchCompaniesByNameResponse - API response class
 * 
 * 
 */
class SearchCompaniesByNameResponse
{
    public ?array $companies = null;
    public \TheCompaniesApi\Sdk\Generated\Models\PaginationMeta $meta;

    public function __construct(array $data = [])
    {
        $this->companies = $this->convertProperty($data['companies'] ?? null, 'companies');
        $this->meta = $this->convertProperty($data['meta'] ?? null, 'meta');
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
        return $value;
    }
}
