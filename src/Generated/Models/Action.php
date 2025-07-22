<?php

namespace TheCompaniesApi\Sdk\Generated\Models;

/**
 * Action model
 * 
 * An action tracks a request made to our job queue and its result.
 */
class Action
{
    public ?float $attempts = null;
    public mixed $cost = null;
    public mixed $createdAt = null;
    public ?array $data = null;
    public float $id;
    public ?float $listId = null;
    public ?float $promptId = null;
    public ?array $result = null;
    public string $status;
    public ?float $teamId = null;
    public ?string $type = null;
    public mixed $updatedAt = null;

    public function __construct(array $data = [])
    {
        $this->attempts = $data['attempts'] ?? null;
        $this->cost = $data['cost'] ?? null;
        $this->createdAt = $data['createdAt'] ?? null;
        $this->data = $data['data'] ?? null;
        $this->id = $data['id'] ?? null;
        $this->listId = $data['listId'] ?? null;
        $this->promptId = $data['promptId'] ?? null;
        $this->result = $data['result'] ?? null;
        $this->status = $data['status'] ?? null;
        $this->teamId = $data['teamId'] ?? null;
        $this->type = $data['type'] ?? null;
        $this->updatedAt = $data['updatedAt'] ?? null;
    }

    public function toArray(): array
    {
        return [
            'attempts' => $this->attempts,
            'cost' => $this->cost,
            'createdAt' => $this->createdAt,
            'data' => $this->data,
            'id' => $this->id,
            'listId' => $this->listId,
            'promptId' => $this->promptId,
            'result' => $this->result,
            'status' => $this->status,
            'teamId' => $this->teamId,
            'type' => $this->type,
            'updatedAt' => $this->updatedAt,
        ];
    }
}
