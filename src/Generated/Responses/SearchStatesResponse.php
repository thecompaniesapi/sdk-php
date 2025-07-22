<?php

namespace TheCompaniesApi\Sdk\Generated\Responses;

/**
 * SearchStatesResponse - API response class
 * 
 * 
 */
class SearchStatesResponse
{
    public \TheCompaniesApi\Sdk\Generated\Models\PaginationMeta $meta;
    public ?array $states = null;

    public function __construct(array $data = [])
    {
        $this->meta = $this->convertProperty($data['meta'] ?? null, 'meta');
        $this->states = $this->convertProperty($data['states'] ?? null, 'states');
    }

    private function convertProperty(mixed $value, string $property): mixed
    {
        // Handle model references and arrays
        if ($property === 'meta' && is_array($value)) {
            return new \TheCompaniesApi\Sdk\Generated\Models\PaginationMeta($value);
        }
        if ($property === 'states') {
            return is_array($value) ? $value : null;
        }
        return $value;
    }
}
