<?php

namespace TheCompaniesApi\Sdk\Generated\Requests;

/**
 * ExportCompaniesAnalyticsRequest - API request class
 */
class ExportCompaniesAnalyticsRequest
{
    public ?float $actionId = null;
    public ?array $attributes = null;
    public ?string $format = null;
    public ?bool $full = null;
    public ?float $listId = null;
    public ?array $query = null;
    public ?float $size = null;
    public ?string $sort = null;

    /**
     * Create a new ExportCompaniesAnalyticsRequest
     *
     * @param array $data Array of properties (for backward compatibility)
     * @param ?float $actionId
     * @param ?array $attributes
     * @param ?string $format
     * @param ?bool $full
     * @param ?float $listId
     * @param ?array $query
     * @param ?float $size
     * @param ?string $sort
     */
    public function __construct(
        array $data = [],
        ?float $actionId = null,
        ?array $attributes = null,
        ?string $format = null,
        ?bool $full = null,
        ?float $listId = null,
        ?array $query = null,
        ?float $size = null,
        ?string $sort = null
    ) {
        // Support both array and named parameter construction
        if (!empty($data)) {
            // Array-based construction (backward compatibility)
            $this->actionId = $data['actionId'] ?? null;
            $this->attributes = $data['attributes'] ?? null;
            $this->format = $data['format'] ?? null;
            $this->full = $data['full'] ?? null;
            $this->listId = $data['listId'] ?? null;
            $this->query = $data['query'] ?? null;
            $this->size = $data['size'] ?? null;
            $this->sort = $data['sort'] ?? null;
        } else {
            // Named parameter construction
            $this->actionId = $actionId;
            $this->attributes = $attributes;
            $this->format = $format;
            $this->full = $full;
            $this->listId = $listId;
            $this->query = $query;
            $this->size = $size;
            $this->sort = $sort;
        }
    }

    public function toArray(): array
    {
        return [
            'actionId' => $this->actionId,
            'attributes' => $this->attributes,
            'format' => $this->format,
            'full' => $this->full,
            'listId' => $this->listId,
            'query' => $this->query,
            'size' => $this->size,
            'sort' => $this->sort,
        ];
    }
}
