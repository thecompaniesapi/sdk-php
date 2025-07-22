<?php

namespace TheCompaniesApi\Sdk\Generated\Requests;

/**
 * FetchCompaniesInListPostRequest - API request class
 */
class FetchCompaniesInListPostRequest
{
    public ?float $actionId = null;
    public ?float $page = null;
    public ?array $query = null;
    public ?bool $simplified = null;
    public ?float $size = null;
    public ?array $sortFields = null;
    public ?string $sortKey = null;
    public ?string $sortOrder = null;

    /**
     * Create a new FetchCompaniesInListPostRequest
     *
     * @param array $data Array of properties (for backward compatibility)
     * @param ?float $actionId
     * @param ?float $page
     * @param ?array $query
     * @param ?bool $simplified
     * @param ?float $size
     * @param ?array $sortFields
     * @param ?string $sortKey
     * @param ?string $sortOrder
     */
    public function __construct(
        array $data = [],
        ?float $actionId = null,
        ?float $page = null,
        ?array $query = null,
        ?bool $simplified = null,
        ?float $size = null,
        ?array $sortFields = null,
        ?string $sortKey = null,
        ?string $sortOrder = null
    ) {
        // Support both array and named parameter construction
        if (!empty($data)) {
            // Array-based construction (backward compatibility)
            $this->actionId = $data['actionId'] ?? null;
            $this->page = $data['page'] ?? null;
            $this->query = $data['query'] ?? null;
            $this->simplified = $data['simplified'] ?? null;
            $this->size = $data['size'] ?? null;
            $this->sortFields = $data['sortFields'] ?? null;
            $this->sortKey = $data['sortKey'] ?? null;
            $this->sortOrder = $data['sortOrder'] ?? null;
        } else {
            // Named parameter construction
            $this->actionId = $actionId;
            $this->page = $page;
            $this->query = $query;
            $this->simplified = $simplified;
            $this->size = $size;
            $this->sortFields = $sortFields;
            $this->sortKey = $sortKey;
            $this->sortOrder = $sortOrder;
        }
    }

    public function toArray(): array
    {
        return [
            'actionId' => $this->actionId,
            'page' => $this->page,
            'query' => $this->query,
            'simplified' => $this->simplified,
            'size' => $this->size,
            'sortFields' => $this->sortFields,
            'sortKey' => $this->sortKey,
            'sortOrder' => $this->sortOrder,
        ];
    }
}
