<?php

namespace TheCompaniesApi\Sdk\Generated\Requests;

/**
 * PromptToSegmentationRequest - API request class
 */
class PromptToSegmentationRequest
{
    public ?string $context = null;
    public ?bool $force = null;
    public ?float $listId = null;
    public ?string $model = null;
    public ?string $prompt = null;

    /**
     * Create a new PromptToSegmentationRequest
     *
     * @param array $data Array of properties (for backward compatibility)
     * @param ?string $context
     * @param ?bool $force
     * @param ?float $listId
     * @param ?string $model
     * @param ?string $prompt
     */
    public function __construct(
        array $data = [],
        ?string $context = null,
        ?bool $force = null,
        ?float $listId = null,
        ?string $model = null,
        ?string $prompt = null
    ) {
        // Support both array and named parameter construction
        if (!empty($data)) {
            // Array-based construction (backward compatibility)
            $this->context = $data['context'] ?? null;
            $this->force = $data['force'] ?? null;
            $this->listId = $data['listId'] ?? null;
            $this->model = $data['model'] ?? null;
            $this->prompt = $data['prompt'] ?? null;
        } else {
            // Named parameter construction
            $this->context = $context;
            $this->force = $force;
            $this->listId = $listId;
            $this->model = $model;
            $this->prompt = $prompt;
        }
    }

    public function toArray(): array
    {
        return [
            'context' => $this->context,
            'force' => $this->force,
            'listId' => $this->listId,
            'model' => $this->model,
            'prompt' => $this->prompt,
        ];
    }
}
