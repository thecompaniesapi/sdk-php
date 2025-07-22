<?php

namespace TheCompaniesApi\Sdk\Generated\Requests;

/**
 * RequestActionRequest - API request class
 */
class RequestActionRequest
{
    public ?array $domains = null;
    public ?bool $estimate = null;
    public ?array $fields = null;
    public ?string $job = null;
    public ?float $listId = null;
    public ?array $names = null;
    public ?float $promptId = null;
    public ?array $query = null;
    public ?string $question = null;
    public ?string $type = null;

    /**
     * Create a new RequestActionRequest
     *
     * @param array $data Array of properties (for backward compatibility)
     * @param ?array $domains
     * @param ?bool $estimate
     * @param ?array $fields
     * @param ?string $job
     * @param ?float $listId
     * @param ?array $names
     * @param ?float $promptId
     * @param ?array $query
     * @param ?string $question
     * @param ?string $type
     */
    public function __construct(
        array $data = [],
        ?array $domains = null,
        ?bool $estimate = null,
        ?array $fields = null,
        ?string $job = null,
        ?float $listId = null,
        ?array $names = null,
        ?float $promptId = null,
        ?array $query = null,
        ?string $question = null,
        ?string $type = null
    ) {
        // Support both array and named parameter construction
        if (!empty($data)) {
            // Array-based construction (backward compatibility)
            $this->domains = $data['domains'] ?? null;
            $this->estimate = $data['estimate'] ?? null;
            $this->fields = $data['fields'] ?? null;
            $this->job = $data['job'] ?? null;
            $this->listId = $data['listId'] ?? null;
            $this->names = $data['names'] ?? null;
            $this->promptId = $data['promptId'] ?? null;
            $this->query = $data['query'] ?? null;
            $this->question = $data['question'] ?? null;
            $this->type = $data['type'] ?? null;
        } else {
            // Named parameter construction
            $this->domains = $domains;
            $this->estimate = $estimate;
            $this->fields = $fields;
            $this->job = $job;
            $this->listId = $listId;
            $this->names = $names;
            $this->promptId = $promptId;
            $this->query = $query;
            $this->question = $question;
            $this->type = $type;
        }
    }

    public function toArray(): array
    {
        return [
            'domains' => $this->domains,
            'estimate' => $this->estimate,
            'fields' => $this->fields,
            'job' => $this->job,
            'listId' => $this->listId,
            'names' => $this->names,
            'promptId' => $this->promptId,
            'query' => $this->query,
            'question' => $this->question,
            'type' => $this->type,
        ];
    }
}
