<?php

namespace TheCompaniesApi\Sdk\Generated\Responses;

/**
 * RequestActionResponse - API response class
 * 
 * 
 */
class RequestActionResponse
{
    public ?array $actions = null;

    public function __construct(array $data = [])
    {
        $this->actions = $this->convertProperty($data['actions'] ?? null, 'actions');
    }

    private function convertProperty(mixed $value, string $property): mixed
    {
        // Handle model references and arrays
        if ($property === 'actions') {
            return is_array($value) ? $value : null;
        }
        return $value;
    }
}
