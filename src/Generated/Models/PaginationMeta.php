<?php

namespace TheCompaniesApi\Sdk\Generated\Models;

/**
 * PaginationMeta model
 * 
 * Metadata about a paginated or billed response.
 */
class PaginationMeta
{
    public float $cost;
    public float $credits;
    public float $currentPage;
    public float $firstPage;
    public bool $freeRequest;
    public float $lastPage;
    public ?bool $maxScrollResultsReached = null;
    public float $perPage;
    public float $total;

    public function __construct(array $data = [])
    {
        $this->cost = $data['cost'] ?? null;
        $this->credits = $data['credits'] ?? null;
        $this->currentPage = $data['currentPage'] ?? null;
        $this->firstPage = $data['firstPage'] ?? null;
        $this->freeRequest = $data['freeRequest'] ?? null;
        $this->lastPage = $data['lastPage'] ?? null;
        $this->maxScrollResultsReached = $data['maxScrollResultsReached'] ?? null;
        $this->perPage = $data['perPage'] ?? null;
        $this->total = $data['total'] ?? null;
    }

    public function toArray(): array
    {
        return [
            'cost' => $this->cost,
            'credits' => $this->credits,
            'currentPage' => $this->currentPage,
            'firstPage' => $this->firstPage,
            'freeRequest' => $this->freeRequest,
            'lastPage' => $this->lastPage,
            'maxScrollResultsReached' => $this->maxScrollResultsReached,
            'perPage' => $this->perPage,
            'total' => $this->total,
        ];
    }
}
