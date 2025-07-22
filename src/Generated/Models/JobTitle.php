<?php

namespace TheCompaniesApi\Sdk\Generated\Models;

/**
 * JobTitle model
 * 
 * A job title and its related informations.
 */
class JobTitle
{
    public mixed $department;
    public mixed $departmentSecondary;
    public ?float $id = null;
    public mixed $linkedinCount = null;
    public string $name;
    public mixed $nameEs;
    public mixed $nameFr;
    public mixed $seniorityLevel;
    public mixed $seniorityLevelSecondary;
    public mixed $usageCount = null;

    public function __construct(array $data = [])
    {
        $this->department = $data['department'] ?? null;
        $this->departmentSecondary = $data['departmentSecondary'] ?? null;
        $this->id = $data['id'] ?? null;
        $this->linkedinCount = $data['linkedinCount'] ?? null;
        $this->name = $data['name'] ?? null;
        $this->nameEs = $data['nameEs'] ?? null;
        $this->nameFr = $data['nameFr'] ?? null;
        $this->seniorityLevel = $data['seniorityLevel'] ?? null;
        $this->seniorityLevelSecondary = $data['seniorityLevelSecondary'] ?? null;
        $this->usageCount = $data['usageCount'] ?? null;
    }

    public function toArray(): array
    {
        return [
            'department' => $this->department,
            'departmentSecondary' => $this->departmentSecondary,
            'id' => $this->id,
            'linkedinCount' => $this->linkedinCount,
            'name' => $this->name,
            'nameEs' => $this->nameEs,
            'nameFr' => $this->nameFr,
            'seniorityLevel' => $this->seniorityLevel,
            'seniorityLevelSecondary' => $this->seniorityLevelSecondary,
            'usageCount' => $this->usageCount,
        ];
    }
}
