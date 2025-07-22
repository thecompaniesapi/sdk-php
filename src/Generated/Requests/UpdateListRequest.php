<?php

namespace TheCompaniesApi\Sdk\Generated\Requests;

/**
 * UpdateListRequest - API request class
 */
class UpdateListRequest
{
    public ?bool $dynamic = null;
    public ?bool $lastSeen = null;
    public ?string $mailFrequency = null;
    public mixed $maxCompanies = null;
    public ?string $name = null;
    public ?array $query = null;
    public ?bool $resync = null;

    /**
     * Create a new UpdateListRequest
     *
     * @param array $data Array of properties (for backward compatibility)
     * @param ?bool $dynamic
     * @param ?bool $lastSeen
     * @param ?string $mailFrequency
     * @param mixed $maxCompanies
     * @param ?string $name
     * @param ?array $query
     * @param ?bool $resync
     */
    public function __construct(
        array $data = [],
        ?bool $dynamic = null,
        ?bool $lastSeen = null,
        ?string $mailFrequency = null,
        mixed $maxCompanies = null,
        ?string $name = null,
        ?array $query = null,
        ?bool $resync = null
    ) {
        // Support both array and named parameter construction
        if (!empty($data)) {
            // Array-based construction (backward compatibility)
            $this->dynamic = $data['dynamic'] ?? null;
            $this->lastSeen = $data['lastSeen'] ?? null;
            $this->mailFrequency = $data['mailFrequency'] ?? null;
            $this->maxCompanies = $data['maxCompanies'] ?? null;
            $this->name = $data['name'] ?? null;
            $this->query = $data['query'] ?? null;
            $this->resync = $data['resync'] ?? null;
        } else {
            // Named parameter construction
            $this->dynamic = $dynamic;
            $this->lastSeen = $lastSeen;
            $this->mailFrequency = $mailFrequency;
            $this->maxCompanies = $maxCompanies;
            $this->name = $name;
            $this->query = $query;
            $this->resync = $resync;
        }
    }

    public function toArray(): array
    {
        return [
            'dynamic' => $this->dynamic,
            'lastSeen' => $this->lastSeen,
            'mailFrequency' => $this->mailFrequency,
            'maxCompanies' => $this->maxCompanies,
            'name' => $this->name,
            'query' => $this->query,
            'resync' => $this->resync,
        ];
    }
}
