<?php

namespace TheCompaniesApi\Sdk\Generated\Responses;

/**
 * CountCompaniesPostResponse - API response class
 * 
 * 
 */
class CountCompaniesPostResponse
{
    public float $count;

    public function __construct(array $data = [])
    {
        $this->count = $this->convertProperty($data['count'] ?? null, 'count');
    }

    private function convertProperty(mixed $value, string $property): mixed
    {
        // Handle model references and arrays
        return $value;
    }
}
