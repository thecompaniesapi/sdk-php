<?php

namespace TheCompaniesApi\Sdk\Generated\Responses;

/**
 * FetchApiHealthResponse - API response class
 * 
 * 
 */
class FetchApiHealthResponse
{
    public bool $healthy;
    public string $nodeName;
    public ?array $report = null;

    public function __construct(array $data = [])
    {
        $this->healthy = $this->convertProperty($data['healthy'] ?? null, 'healthy');
        $this->nodeName = $this->convertProperty($data['nodeName'] ?? null, 'nodeName');
        $this->report = $this->convertProperty($data['report'] ?? null, 'report');
    }

    private function convertProperty(mixed $value, string $property): mixed
    {
        // Handle model references and arrays
        if ($property === 'report') {
            return is_array($value) ? $value : null;
        }
        return $value;
    }
}
