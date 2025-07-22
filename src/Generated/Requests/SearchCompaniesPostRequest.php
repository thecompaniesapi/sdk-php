<?php

namespace TheCompaniesApi\Sdk\Generated\Requests;

/**
 * SearchCompaniesPostRequest - API request class
 */
class SearchCompaniesPostRequest
{
    public ?float $actionId = null;
    public ?string $domainsToExclude = null;
    public ?string $linkedinToExclude = null;
    public ?float $page = null;
    public ?array $query = null;
    public ?string $search = null;
    public ?array $searchFields = null;
    public ?bool $simplified = null;
    public ?float $size = null;
    public ?array $sortFields = null;
    public ?string $sortKey = null;
    public ?string $sortOrder = null;

    /**
     * Create a new SearchCompaniesPostRequest
     *
     * @param array $data Array of properties (for backward compatibility)
     * @param ?float $actionId
     * @param ?string $domainsToExclude
     * @param ?string $linkedinToExclude
     * @param ?float $page
     * @param ?array $query
     * @param ?string $search
     * @param ?array $searchFields
     * @param ?bool $simplified
     * @param ?float $size
     * @param ?array $sortFields
     * @param ?string $sortKey
     * @param ?string $sortOrder
     */
    public function __construct(
        array $data = [],
        ?float $actionId = null,
        ?string $domainsToExclude = null,
        ?string $linkedinToExclude = null,
        ?float $page = null,
        ?array $query = null,
        ?string $search = null,
        ?array $searchFields = null,
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
            $this->domainsToExclude = $data['domainsToExclude'] ?? null;
            $this->linkedinToExclude = $data['linkedinToExclude'] ?? null;
            $this->page = $data['page'] ?? null;
            $this->query = $data['query'] ?? null;
            $this->search = $data['search'] ?? null;
            $this->searchFields = $data['searchFields'] ?? null;
            $this->simplified = $data['simplified'] ?? null;
            $this->size = $data['size'] ?? null;
            $this->sortFields = $data['sortFields'] ?? null;
            $this->sortKey = $data['sortKey'] ?? null;
            $this->sortOrder = $data['sortOrder'] ?? null;
        } else {
            // Named parameter construction
            $this->actionId = $actionId;
            $this->domainsToExclude = $domainsToExclude;
            $this->linkedinToExclude = $linkedinToExclude;
            $this->page = $page;
            $this->query = $query;
            $this->search = $search;
            $this->searchFields = $searchFields;
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
            'domainsToExclude' => $this->domainsToExclude,
            'linkedinToExclude' => $this->linkedinToExclude,
            'page' => $this->page,
            'query' => $this->query,
            'search' => $this->search,
            'searchFields' => $this->searchFields,
            'simplified' => $this->simplified,
            'size' => $this->size,
            'sortFields' => $this->sortFields,
            'sortKey' => $this->sortKey,
            'sortOrder' => $this->sortOrder,
        ];
    }
}
