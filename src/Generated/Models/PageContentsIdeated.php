<?php

namespace TheCompaniesApi\Sdk\Generated\Models;

/**
 * PageContentsIdeated model
 * 
 * A collection of categorized facts about a company aggregated from multiple sources.
 */
class PageContentsIdeated
{
    public ?string $domain = null;
    public ?array $about = null;
    public ?array $acquired = null;
    public ?array $contacts = null;
    public ?array $customers = null;
    public ?array $features = null;
    public ?array $finances = null;
    public ?array $industries = null;
    public ?array $jobs = null;
    public ?array $locations = null;
    public ?array $others = null;
    public ?array $pricing = null;
    public ?array $related = null;
    public ?array $resources = null;
    public ?array $security = null;
    public ?array $social = null;
    public ?array $solutions = null;
    public ?array $support = null;
    public ?array $team = null;
    public ?array $technologies = null;
    public ?array $updates = null;
    public ?bool $broken = null;
    public ?bool $closed = null;
    public ?bool $forSale = null;
    public ?bool $nsfw = null;
    public ?string $updatedAt = null;
    public ?array $sources = null;
    public ?float $tokens = null;

    public function __construct(array $data = [])
    {
        $this->domain = $data['domain'] ?? null;
        $this->about = $data['about'] ?? null;
        $this->acquired = $data['acquired'] ?? null;
        $this->contacts = $data['contacts'] ?? null;
        $this->customers = $data['customers'] ?? null;
        $this->features = $data['features'] ?? null;
        $this->finances = $data['finances'] ?? null;
        $this->industries = $data['industries'] ?? null;
        $this->jobs = $data['jobs'] ?? null;
        $this->locations = $data['locations'] ?? null;
        $this->others = $data['others'] ?? null;
        $this->pricing = $data['pricing'] ?? null;
        $this->related = $data['related'] ?? null;
        $this->resources = $data['resources'] ?? null;
        $this->security = $data['security'] ?? null;
        $this->social = $data['social'] ?? null;
        $this->solutions = $data['solutions'] ?? null;
        $this->support = $data['support'] ?? null;
        $this->team = $data['team'] ?? null;
        $this->technologies = $data['technologies'] ?? null;
        $this->updates = $data['updates'] ?? null;
        $this->broken = $data['broken'] ?? null;
        $this->closed = $data['closed'] ?? null;
        $this->forSale = $data['forSale'] ?? null;
        $this->nsfw = $data['nsfw'] ?? null;
        $this->updatedAt = $data['updatedAt'] ?? null;
        $this->sources = $data['sources'] ?? null;
        $this->tokens = $data['tokens'] ?? null;
    }

    public function toArray(): array
    {
        return [
            'domain' => $this->domain,
            'about' => $this->about,
            'acquired' => $this->acquired,
            'contacts' => $this->contacts,
            'customers' => $this->customers,
            'features' => $this->features,
            'finances' => $this->finances,
            'industries' => $this->industries,
            'jobs' => $this->jobs,
            'locations' => $this->locations,
            'others' => $this->others,
            'pricing' => $this->pricing,
            'related' => $this->related,
            'resources' => $this->resources,
            'security' => $this->security,
            'social' => $this->social,
            'solutions' => $this->solutions,
            'support' => $this->support,
            'team' => $this->team,
            'technologies' => $this->technologies,
            'updates' => $this->updates,
            'broken' => $this->broken,
            'closed' => $this->closed,
            'forSale' => $this->forSale,
            'nsfw' => $this->nsfw,
            'updatedAt' => $this->updatedAt,
            'sources' => $this->sources,
            'tokens' => $this->tokens,
        ];
    }
}
