<?php

namespace TheCompaniesApi\Sdk\Generated\Models;

/**
 * Technology model
 * 
 * A technology description from our platform.
 */
class Technology
{
    public mixed $categories = null;
    public mixed $companiesCount;
    public mixed $createdAt = null;
    public string $editor;
    public mixed $free;
    public float $id;
    public string $name;
    public mixed $nameSynonyms;
    public mixed $paid;
    public string $slug;
    public mixed $updatedAt;
    public mixed $usageCount;
    public mixed $websiteUrl;

    public function __construct(array $data = [])
    {
        $this->categories = $data['categories'] ?? null;
        $this->companiesCount = $data['companiesCount'] ?? null;
        $this->createdAt = $data['createdAt'] ?? null;
        $this->editor = $data['editor'] ?? null;
        $this->free = $data['free'] ?? null;
        $this->id = $data['id'] ?? null;
        $this->name = $data['name'] ?? null;
        $this->nameSynonyms = $data['nameSynonyms'] ?? null;
        $this->paid = $data['paid'] ?? null;
        $this->slug = $data['slug'] ?? null;
        $this->updatedAt = $data['updatedAt'] ?? null;
        $this->usageCount = $data['usageCount'] ?? null;
        $this->websiteUrl = $data['websiteUrl'] ?? null;
    }

    public function toArray(): array
    {
        return [
            'categories' => $this->categories,
            'companiesCount' => $this->companiesCount,
            'createdAt' => $this->createdAt,
            'editor' => $this->editor,
            'free' => $this->free,
            'id' => $this->id,
            'name' => $this->name,
            'nameSynonyms' => $this->nameSynonyms,
            'paid' => $this->paid,
            'slug' => $this->slug,
            'updatedAt' => $this->updatedAt,
            'usageCount' => $this->usageCount,
            'websiteUrl' => $this->websiteUrl,
        ];
    }
}
