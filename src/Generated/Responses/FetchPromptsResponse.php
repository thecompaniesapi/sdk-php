<?php

namespace TheCompaniesApi\Sdk\Generated\Responses;

/**
 * FetchPromptsResponse - API response class
 * 
 * 
 */
class FetchPromptsResponse
{
    public \TheCompaniesApi\Sdk\Generated\Models\PaginationMeta $meta;
    public ?array $prompts = null;

    public function __construct(array $data = [])
    {
        $this->meta = $this->convertProperty($data['meta'] ?? null, 'meta');
        $this->prompts = $this->convertProperty($data['prompts'] ?? null, 'prompts');
    }

    private function convertProperty(mixed $value, string $property): mixed
    {
        // Handle model references and arrays
        if ($property === 'meta' && is_array($value)) {
            return new \TheCompaniesApi\Sdk\Generated\Models\PaginationMeta($value);
        }
        if ($property === 'prompts') {
            return is_array($value) ? $value : null;
        }
        return $value;
    }
}
