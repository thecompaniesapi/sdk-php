<?php

namespace TheCompaniesApi\Sdk\Generated\Requests;

/**
 * UpdateTeamRequest - API request class
 */
class UpdateTeamRequest
{
    public ?string $country = null;
    public ?string $name = null;
    public ?string $websiteUrl = null;

    /**
     * Create a new UpdateTeamRequest
     *
     * @param array $data Array of properties (for backward compatibility)
     * @param ?string $country
     * @param ?string $name
     * @param ?string $websiteUrl
     */
    public function __construct(
        array $data = [],
        ?string $country = null,
        ?string $name = null,
        ?string $websiteUrl = null
    ) {
        // Support both array and named parameter construction
        if (!empty($data)) {
            // Array-based construction (backward compatibility)
            $this->country = $data['country'] ?? null;
            $this->name = $data['name'] ?? null;
            $this->websiteUrl = $data['websiteUrl'] ?? null;
        } else {
            // Named parameter construction
            $this->country = $country;
            $this->name = $name;
            $this->websiteUrl = $websiteUrl;
        }
    }

    public function toArray(): array
    {
        return [
            'country' => $this->country,
            'name' => $this->name,
            'websiteUrl' => $this->websiteUrl,
        ];
    }
}
