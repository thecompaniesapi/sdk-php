<?php

namespace TheCompaniesApi\Sdk\Generated\Responses;

/**
 * SearchTechnologiesResponse - API response class
 * 
 * 
 */
class SearchTechnologiesResponse
{
    public \TheCompaniesApi\Sdk\Generated\Models\PaginationMeta $meta;
    public ?array $technologies = null;

    public function __construct(array $data = [])
    {
        $this->meta = $this->convertProperty($data['meta'] ?? null, 'meta');
        $this->technologies = $this->convertProperty($data['technologies'] ?? null, 'technologies');
    }

    private function convertProperty(mixed $value, string $property): mixed
    {
        // Handle model references and arrays
        if ($property === 'meta' && is_array($value)) {
            return new \TheCompaniesApi\Sdk\Generated\Models\PaginationMeta($value);
        }
        if ($property === 'technologies') {
            return is_array($value) ? $value : null;
        }
        return $value;
    }
}
