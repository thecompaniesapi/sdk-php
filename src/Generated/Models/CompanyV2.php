<?php

namespace TheCompaniesApi\Sdk\Generated\Models;

/**
 * CompanyV2 model
 * 
 * Our complete schema for company data.
 */
class CompanyV2
{
    public ?string $id = null;
    public ?array $about = null;
    public ?array $analytics = null;
    public ?array $apps = null;
    public ?array $assets = null;
    public ?array $codes = null;
    public ?array $companies = null;
    public ?array $contacts = null;
    public ?array $contents = null;
    public ?array $descriptions = null;
    public ?array $domain = null;
    public ?array $finances = null;
    public ?array $locations = null;
    public ?array $meta = null;
    public ?array $people = null;
    public ?array $secondaries = null;
    public ?array $socials = null;
    public ?array $technologies = null;
    public ?array $urls = null;
    public ?array $vectors = null;
    public ?array $action = null;

    public function __construct(array $data = [])
    {
        $this->id = $data['id'] ?? null;
        $this->about = $data['about'] ?? null;
        $this->analytics = $data['analytics'] ?? null;
        $this->apps = $data['apps'] ?? null;
        $this->assets = $data['assets'] ?? null;
        $this->codes = $data['codes'] ?? null;
        $this->companies = $data['companies'] ?? null;
        $this->contacts = $data['contacts'] ?? null;
        $this->contents = $data['contents'] ?? null;
        $this->descriptions = $data['descriptions'] ?? null;
        $this->domain = $data['domain'] ?? null;
        $this->finances = $data['finances'] ?? null;
        $this->locations = $data['locations'] ?? null;
        $this->meta = $data['meta'] ?? null;
        $this->people = $data['people'] ?? null;
        $this->secondaries = $data['secondaries'] ?? null;
        $this->socials = $data['socials'] ?? null;
        $this->technologies = $data['technologies'] ?? null;
        $this->urls = $data['urls'] ?? null;
        $this->vectors = $data['vectors'] ?? null;
        $this->action = $data['action'] ?? null;
    }

    public function toArray(): array
    {
        return [
            'id' => $this->id,
            'about' => $this->about,
            'analytics' => $this->analytics,
            'apps' => $this->apps,
            'assets' => $this->assets,
            'codes' => $this->codes,
            'companies' => $this->companies,
            'contacts' => $this->contacts,
            'contents' => $this->contents,
            'descriptions' => $this->descriptions,
            'domain' => $this->domain,
            'finances' => $this->finances,
            'locations' => $this->locations,
            'meta' => $this->meta,
            'people' => $this->people,
            'secondaries' => $this->secondaries,
            'socials' => $this->socials,
            'technologies' => $this->technologies,
            'urls' => $this->urls,
            'vectors' => $this->vectors,
            'action' => $this->action,
        ];
    }
}
