<?php

namespace TheCompaniesApi\Sdk\Generated\Requests;

/**
 * CountCompaniesPostRequest - API request class
 */
class CountCompaniesPostRequest
{
    public ?float $actionId = null;
    public ?array $query = null;
    public ?string $search = null;
    public ?array $searchFields = null;

    /**
     * Create a new CountCompaniesPostRequest
     *
     * @param array $data Array of properties (for backward compatibility)
     * @param ?float $actionId
     * @param ?array $query
     * @param ?string $search
     * @param ?array $searchFields
     */
    public function __construct(
        array $data = [],
        ?float $actionId = null,
        ?array $query = null,
        ?string $search = null,
        ?array $searchFields = null
    ) {
        // Support both array and named parameter construction
        if (!empty($data)) {
            // Array-based construction (backward compatibility)
            $this->actionId = $data['actionId'] ?? null;
            $this->query = $data['query'] ?? null;
            $this->search = $data['search'] ?? null;
            $this->searchFields = $data['searchFields'] ?? null;
        } else {
            // Named parameter construction
            $this->actionId = $actionId;
            $this->query = $query;
            $this->search = $search;
            $this->searchFields = $searchFields;
        }
    }

    public function toArray(): array
    {
        return [
            'actionId' => $this->actionId,
            'query' => $this->query,
            'search' => $this->search,
            'searchFields' => $this->searchFields,
        ];
    }
}
