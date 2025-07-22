<?php

namespace TheCompaniesApi\Sdk\Generated\Responses;

/**
 * FetchActionsResponse - API response class
 * 
 * 
 */
class FetchActionsResponse
{
    public ?array $actions = null;
    public \TheCompaniesApi\Sdk\Generated\Models\PaginationMeta $meta;

    public function __construct(array $data = [])
    {
        $this->actions = $this->convertProperty($data['actions'] ?? null, 'actions');
        $this->meta = $this->convertProperty($data['meta'] ?? null, 'meta');
    }

    private function convertProperty(mixed $value, string $property): mixed
    {
        // Handle model references and arrays
        if ($property === 'actions') {
            return is_array($value) ? $value : null;
        }
        if ($property === 'meta' && is_array($value)) {
            return new \TheCompaniesApi\Sdk\Generated\Models\PaginationMeta($value);
        }
        return $value;
    }
}
