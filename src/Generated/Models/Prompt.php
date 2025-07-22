<?php

namespace TheCompaniesApi\Sdk\Generated\Models;

/**
 * Prompt model
 * 
 * A natural language request made to the platform resolving to a specific action or search segment.
 */
class Prompt
{
    public ?float $companyId = null;
    public string $context;
    public ?string $createdAt = null;
    public ?array $data = null;
    public ?string $feature = null;
    public ?float $hits = null;
    public float $id;
    public ?string $model = null;
    public string $prompt;
    public string $promptKey;
    public mixed $response = null;
    public ?string $updatedAt = null;

    public function __construct(array $data = [])
    {
        $this->companyId = $data['companyId'] ?? null;
        $this->context = $data['context'] ?? null;
        $this->createdAt = $data['createdAt'] ?? null;
        $this->data = $data['data'] ?? null;
        $this->feature = $data['feature'] ?? null;
        $this->hits = $data['hits'] ?? null;
        $this->id = $data['id'] ?? null;
        $this->model = $data['model'] ?? null;
        $this->prompt = $data['prompt'] ?? null;
        $this->promptKey = $data['promptKey'] ?? null;
        $this->response = $data['response'] ?? null;
        $this->updatedAt = $data['updatedAt'] ?? null;
    }

    public function toArray(): array
    {
        return [
            'companyId' => $this->companyId,
            'context' => $this->context,
            'createdAt' => $this->createdAt,
            'data' => $this->data,
            'feature' => $this->feature,
            'hits' => $this->hits,
            'id' => $this->id,
            'model' => $this->model,
            'prompt' => $this->prompt,
            'promptKey' => $this->promptKey,
            'response' => $this->response,
            'updatedAt' => $this->updatedAt,
        ];
    }
}
