<?php

namespace TheCompaniesApi\Sdk\Generated\Requests;

/**
 * ListsToggleCompaniesRequest - API request class
 */
class ListsToggleCompaniesRequest
{
    public ?string $action = null;
    public ?array $companyIds = null;
    public ?array $domains = null;
    public ?bool $refresh = null;

    /**
     * Create a new ListsToggleCompaniesRequest
     *
     * @param array $data Array of properties (for backward compatibility)
     * @param ?string $action
     * @param ?array $companyIds
     * @param ?array $domains
     * @param ?bool $refresh
     */
    public function __construct(
        array $data = [],
        ?string $action = null,
        ?array $companyIds = null,
        ?array $domains = null,
        ?bool $refresh = null
    ) {
        // Support both array and named parameter construction
        if (!empty($data)) {
            // Array-based construction (backward compatibility)
            $this->action = $data['action'] ?? null;
            $this->companyIds = $data['companyIds'] ?? null;
            $this->domains = $data['domains'] ?? null;
            $this->refresh = $data['refresh'] ?? null;
        } else {
            // Named parameter construction
            $this->action = $action;
            $this->companyIds = $companyIds;
            $this->domains = $domains;
            $this->refresh = $refresh;
        }
    }

    public function toArray(): array
    {
        return [
            'action' => $this->action,
            'companyIds' => $this->companyIds,
            'domains' => $this->domains,
            'refresh' => $this->refresh,
        ];
    }
}
