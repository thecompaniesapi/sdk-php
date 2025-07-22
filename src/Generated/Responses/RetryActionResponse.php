<?php

namespace TheCompaniesApi\Sdk\Generated\Responses;

/**
 * RetryActionResponse - API response class
 * 
 * 
 */
class RetryActionResponse
{
    public \TheCompaniesApi\Sdk\Generated\Models\Action $action;

    public function __construct(array $data = [])
    {
        $this->action = $this->convertProperty($data['action'] ?? null, 'action');
    }

    private function convertProperty(mixed $value, string $property): mixed
    {
        // Handle model references and arrays
        if ($property === 'action' && is_array($value)) {
            return new \TheCompaniesApi\Sdk\Generated\Models\Action($value);
        }
        return $value;
    }
}
