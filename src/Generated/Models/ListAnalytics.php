<?php

namespace TheCompaniesApi\Sdk\Generated\Models;

/**
 * ListAnalytics model
 * 
 * Analytics collection of a list.
 */
class ListAnalytics
{
    public mixed $companiesCount = null;
    public ?float $id = null;
    public mixed $listId = null;

    public function __construct(array $data = [])
    {
        $this->companiesCount = $data['companiesCount'] ?? null;
        $this->id = $data['id'] ?? null;
        $this->listId = $data['listId'] ?? null;
    }

    public function toArray(): array
    {
        return [
            'companiesCount' => $this->companiesCount,
            'id' => $this->id,
            'listId' => $this->listId,
        ];
    }
}
