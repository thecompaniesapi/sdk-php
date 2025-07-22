<?php

namespace TheCompaniesApi\Sdk\Generated\Responses;

/**
 * PromptToSegmentationResponse - API response class
 * 
 * 
 */
class PromptToSegmentationResponse
{
    public \TheCompaniesApi\Sdk\Generated\Models\PaginationMeta $meta;
    public \TheCompaniesApi\Sdk\Generated\Models\Prompt $prompt;
    public ?array $response = null;

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
        if ($property === 'response') {
            return is_array($value) ? $value : null;
        }
        return $value;
    }
}
