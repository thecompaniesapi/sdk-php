<?php

namespace TheCompaniesApi\Sdk\Generated\Responses;

/**
 * SearchIndustriesSimilarResponse - API response class
 * 
 * 
 */
class SearchIndustriesSimilarResponse
{
    public ?array $industries = null;
    public \TheCompaniesApi\Sdk\Generated\Models\PaginationMeta $meta;

    public function __construct(array $data = [])
    {
        $this->industries = $this->convertProperty($data['industries'] ?? null, 'industries');
        $this->meta = $this->convertProperty($data['meta'] ?? null, 'meta');
    }

    private function convertProperty(mixed $value, string $property): mixed
    {
        // Handle model references and arrays
        if ($property === 'industries') {
            return is_array($value) ? $value : null;
        }
        if ($property === 'meta' && is_array($value)) {
            return new \TheCompaniesApi\Sdk\Generated\Models\PaginationMeta($value);
        }
        return $value;
    }
}
