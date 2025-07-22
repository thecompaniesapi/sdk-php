<?php

namespace TheCompaniesApi\Sdk\Generated\Requests;

/**
 * ProductPromptRequest - API request class
 */
class ProductPromptRequest
{
    public ?float $companyId = null;
    public ?string $context = null;
    public ?string $feature = null;
    public ?bool $force = null;
    public ?float $listId = null;
    public ?string $model = null;
    public ?string $prompt = null;

    /**
     * Create a new ProductPromptRequest
     *
     * @param array $data Array of properties (for backward compatibility)
     * @param ?float $companyId
     * @param ?string $context
     * @param ?string $feature
     * @param ?bool $force
     * @param ?float $listId
     * @param ?string $model
     * @param ?string $prompt
     */
    public function __construct(
        array $data = [],
        ?float $companyId = null,
        ?string $context = null,
        ?string $feature = null,
        ?bool $force = null,
        ?float $listId = null,
        ?string $model = null,
        ?string $prompt = null
    ) {
        // Support both array and named parameter construction
        if (!empty($data)) {
            // Array-based construction (backward compatibility)
            $this->companyId = $data['companyId'] ?? null;
            $this->context = $data['context'] ?? null;
            $this->feature = $data['feature'] ?? null;
            $this->force = $data['force'] ?? null;
            $this->listId = $data['listId'] ?? null;
            $this->model = $data['model'] ?? null;
            $this->prompt = $data['prompt'] ?? null;
        } else {
            // Named parameter construction
            $this->companyId = $companyId;
            $this->context = $context;
            $this->feature = $feature;
            $this->force = $force;
            $this->listId = $listId;
            $this->model = $model;
            $this->prompt = $prompt;
        }
    }

    public function toArray(): array
    {
        return [
            'companyId' => $this->companyId,
            'context' => $this->context,
            'feature' => $this->feature,
            'force' => $this->force,
            'listId' => $this->listId,
            'model' => $this->model,
            'prompt' => $this->prompt,
        ];
    }
}
