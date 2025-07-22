<?php

namespace TheCompaniesApi\Sdk\Generated\Requests;

/**
 * AskCompanyRequest - API request class
 */
class AskCompanyRequest
{
    public ?bool $explain = null;
    public ?array $fields = null;
    public ?float $listId = null;
    public ?string $model = null;
    public ?array $query = null;
    public ?string $question = null;

    /**
     * Create a new AskCompanyRequest
     *
     * @param array $data Array of properties (for backward compatibility)
     * @param ?bool $explain
     * @param ?array $fields
     * @param ?float $listId
     * @param ?string $model
     * @param ?array $query
     * @param ?string $question
     */
    public function __construct(
        array $data = [],
        ?bool $explain = null,
        ?array $fields = null,
        ?float $listId = null,
        ?string $model = null,
        ?array $query = null,
        ?string $question = null
    ) {
        // Support both array and named parameter construction
        if (!empty($data)) {
            // Array-based construction (backward compatibility)
            $this->explain = $data['explain'] ?? null;
            $this->fields = $data['fields'] ?? null;
            $this->listId = $data['listId'] ?? null;
            $this->model = $data['model'] ?? null;
            $this->query = $data['query'] ?? null;
            $this->question = $data['question'] ?? null;
        } else {
            // Named parameter construction
            $this->explain = $explain;
            $this->fields = $fields;
            $this->listId = $listId;
            $this->model = $model;
            $this->query = $query;
            $this->question = $question;
        }
    }

    public function toArray(): array
    {
        return [
            'explain' => $this->explain,
            'fields' => $this->fields,
            'listId' => $this->listId,
            'model' => $this->model,
            'query' => $this->query,
            'question' => $this->question,
        ];
    }
}
