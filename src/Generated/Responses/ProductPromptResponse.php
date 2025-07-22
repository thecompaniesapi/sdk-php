<?php

namespace TheCompaniesApi\Sdk\Generated\Responses;

/**
 * ProductPromptResponse - API response class
 * 
 * 
 */
class ProductPromptResponse
{
    public \TheCompaniesApi\Sdk\Generated\Models\PaginationMeta $meta;
    public \TheCompaniesApi\Sdk\Generated\Models\Prompt $prompt;
    public mixed $response;

    public function __construct(array $data = [])
    {
        $this->meta = $this->convertProperty($data['meta'] ?? null, 'meta');
        $this->prompt = $this->convertProperty($data['prompt'] ?? null, 'prompt');
        $this->response = $this->convertProperty($data['response'] ?? null, 'response');
    }

    private function convertProperty(mixed $value, string $property): mixed
    {
        // Handle model references and arrays
        if ($property === 'meta' && is_array($value)) {
            return new \TheCompaniesApi\Sdk\Generated\Models\PaginationMeta($value);
        }
        if ($property === 'prompt' && is_array($value)) {
            return new \TheCompaniesApi\Sdk\Generated\Models\Prompt($value);
        }
        return $value;
    }
}
