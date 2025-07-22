<?php

namespace TheCompaniesApi\Sdk\Generated\Requests;

/**
 * CreateListRequest - API request class
 */
class CreateListRequest
{
    public ?bool $dynamic = null;
    public ?bool $imported = null;
    public ?string $mailFrequency = null;
    public ?float $maxCompanies = null;
    public ?string $name = null;
    public ?bool $processInitialized = null;
    public ?array $query = null;
    public ?array $similarDomains = null;

    /**
     * Create a new CreateListRequest
     *
     * @param array $data Array of properties (for backward compatibility)
     * @param ?bool $dynamic
     * @param ?bool $imported
     * @param ?string $mailFrequency
     * @param ?float $maxCompanies
     * @param ?string $name
     * @param ?bool $processInitialized
     * @param ?array $query
     * @param ?array $similarDomains
     */
    public function __construct(
        array $data = [],
        ?bool $dynamic = null,
        ?bool $imported = null,
        ?string $mailFrequency = null,
        ?float $maxCompanies = null,
        ?string $name = null,
        ?bool $processInitialized = null,
        ?array $query = null,
        ?array $similarDomains = null
    ) {
        // Support both array and named parameter construction
        if (!empty($data)) {
            // Array-based construction (backward compatibility)
            $this->dynamic = $data['dynamic'] ?? null;
            $this->imported = $data['imported'] ?? null;
            $this->mailFrequency = $data['mailFrequency'] ?? null;
            $this->maxCompanies = $data['maxCompanies'] ?? null;
            $this->name = $data['name'] ?? null;
            $this->processInitialized = $data['processInitialized'] ?? null;
            $this->query = $data['query'] ?? null;
            $this->similarDomains = $data['similarDomains'] ?? null;
        } else {
            // Named parameter construction
            $this->dynamic = $dynamic;
            $this->imported = $imported;
            $this->mailFrequency = $mailFrequency;
            $this->maxCompanies = $maxCompanies;
            $this->name = $name;
            $this->processInitialized = $processInitialized;
            $this->query = $query;
            $this->similarDomains = $similarDomains;
        }
    }

    public function toArray(): array
    {
        return [
            'dynamic' => $this->dynamic,
            'imported' => $this->imported,
            'mailFrequency' => $this->mailFrequency,
            'maxCompanies' => $this->maxCompanies,
            'name' => $this->name,
            'processInitialized' => $this->processInitialized,
            'query' => $this->query,
            'similarDomains' => $this->similarDomains,
        ];
    }
}
