<?php

namespace TheCompaniesApi\Sdk\Generated\Models;

/**
 * List model
 * 
 * A collection of companies saved or imported by a team.
 */
class List
{
    public mixed $analytics = null;
    public mixed $companyListId = null;
    public mixed $createdAt;
    public mixed $dynamic;
    public bool $exporting;
    public mixed $exportingAt;
    public float $id;
    public bool $imported;
    public mixed $mailFrequencies = null;
    public mixed $maxCompanies;
    public string $name;
    public bool $processActive;
    public mixed $processDisabled = null;
    public mixed $processingAt;
    public bool $processInitialized;
    public mixed $processMessage;
    public ?array $query = null;
    public array $querySimilar;
    public mixed $teamId = null;
    public ?array $unseenActions = null;
    public mixed $userId = null;
    public ?array $vectors = null;

    public function __construct(array $data = [])
    {
        $this->analytics = $data['analytics'] ?? null;
        $this->companyListId = $data['companyListId'] ?? null;
        $this->createdAt = $data['createdAt'] ?? null;
        $this->dynamic = $data['dynamic'] ?? null;
        $this->exporting = $data['exporting'] ?? null;
        $this->exportingAt = $data['exportingAt'] ?? null;
        $this->id = $data['id'] ?? null;
        $this->imported = $data['imported'] ?? null;
        $this->mailFrequencies = $data['mailFrequencies'] ?? null;
        $this->maxCompanies = $data['maxCompanies'] ?? null;
        $this->name = $data['name'] ?? null;
        $this->processActive = $data['processActive'] ?? null;
        $this->processDisabled = $data['processDisabled'] ?? null;
        $this->processingAt = $data['processingAt'] ?? null;
        $this->processInitialized = $data['processInitialized'] ?? null;
        $this->processMessage = $data['processMessage'] ?? null;
        $this->query = $data['query'] ?? null;
        $this->querySimilar = $data['querySimilar'] ?? null;
        $this->teamId = $data['teamId'] ?? null;
        $this->unseenActions = $data['unseenActions'] ?? null;
        $this->userId = $data['userId'] ?? null;
        $this->vectors = $data['vectors'] ?? null;
    }

    public function toArray(): array
    {
        return [
            'analytics' => $this->analytics,
            'companyListId' => $this->companyListId,
            'createdAt' => $this->createdAt,
            'dynamic' => $this->dynamic,
            'exporting' => $this->exporting,
            'exportingAt' => $this->exportingAt,
            'id' => $this->id,
            'imported' => $this->imported,
            'mailFrequencies' => $this->mailFrequencies,
            'maxCompanies' => $this->maxCompanies,
            'name' => $this->name,
            'processActive' => $this->processActive,
            'processDisabled' => $this->processDisabled,
            'processingAt' => $this->processingAt,
            'processInitialized' => $this->processInitialized,
            'processMessage' => $this->processMessage,
            'query' => $this->query,
            'querySimilar' => $this->querySimilar,
            'teamId' => $this->teamId,
            'unseenActions' => $this->unseenActions,
            'userId' => $this->userId,
            'vectors' => $this->vectors,
        ];
    }
}
