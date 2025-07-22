<?php

namespace TheCompaniesApi\Sdk\Generated\Responses;

/**
 * AskCompanyResponse - API response class
 * 
 * 
 */
class AskCompanyResponse
{
    public ?array $meta = null;
    public mixed $prompt;

    public function __construct(array $data = [])
    {
        $this->meta = $this->convertProperty($data['meta'] ?? null, 'meta');
        $this->prompt = $this->convertProperty($data['prompt'] ?? null, 'prompt');
    }

    private function convertProperty(mixed $value, string $property): mixed
    {
        // Handle model references and arrays
        if ($property === 'meta') {
            return is_array($value) ? $value : null;
        }
        return $value;
    }
}
