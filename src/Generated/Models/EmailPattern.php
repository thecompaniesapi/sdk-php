<?php

namespace TheCompaniesApi\Sdk\Generated\Models;

/**
 * EmailPattern model
 * 
 * An email pattern and its related informations.
 */
class EmailPattern
{
    public mixed $emailsCount;
    public float $id;
    public string $pattern;
    public mixed $usagePercentage;

    public function __construct(array $data = [])
    {
        $this->emailsCount = $data['emailsCount'] ?? null;
        $this->id = $data['id'] ?? null;
        $this->pattern = $data['pattern'] ?? null;
        $this->usagePercentage = $data['usagePercentage'] ?? null;
    }

    public function toArray(): array
    {
        return [
            'emailsCount' => $this->emailsCount,
            'id' => $this->id,
            'pattern' => $this->pattern,
            'usagePercentage' => $this->usagePercentage,
        ];
    }
}
