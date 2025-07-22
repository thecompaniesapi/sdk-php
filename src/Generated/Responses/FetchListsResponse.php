<?php

namespace TheCompaniesApi\Sdk\Generated\Responses;

/**
 * FetchListsResponse - API response class
 * 
 * 
 */
class FetchListsResponse
{
    public ?array $lists = null;
    public \TheCompaniesApi\Sdk\Generated\Models\PaginationMeta $meta;

    public function __construct(array $data = [])
    {
        $this->lists = $this->convertProperty($data['lists'] ?? null, 'lists');
        $this->meta = $this->convertProperty($data['meta'] ?? null, 'meta');
    }

    private function convertProperty(mixed $value, string $property): mixed
    {
        // Handle model references and arrays
        if ($property === 'lists') {
            return is_array($value) ? $value : null;
        }
        if ($property === 'meta' && is_array($value)) {
            return new \TheCompaniesApi\Sdk\Generated\Models\PaginationMeta($value);
        }
        return $value;
    }
}
