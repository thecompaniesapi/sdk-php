<?php

namespace TheCompaniesApi\Sdk\Generated\Models;

/**
 * NominatimCounty model
 * 
 * A county from the Nominatim API.
 */
class NominatimCounty
{
    public mixed $citiesCount;
    public string $code;
    public mixed $companiesCount;
    public float $id;
    public mixed $latitude;
    public mixed $linkedinHeadline = null;
    public mixed $linkedinId = null;
    public mixed $linkedinQuery = null;
    public mixed $longitude;
    public string $name;
    public mixed $nominatimCountryId = null;
    public mixed $nominatimStateId = null;
    public mixed $usageCount;

    public function __construct(array $data = [])
    {
        $this->citiesCount = $data['citiesCount'] ?? null;
        $this->code = $data['code'] ?? null;
        $this->companiesCount = $data['companiesCount'] ?? null;
        $this->id = $data['id'] ?? null;
        $this->latitude = $data['latitude'] ?? null;
        $this->linkedinHeadline = $data['linkedinHeadline'] ?? null;
        $this->linkedinId = $data['linkedinId'] ?? null;
        $this->linkedinQuery = $data['linkedinQuery'] ?? null;
        $this->longitude = $data['longitude'] ?? null;
        $this->name = $data['name'] ?? null;
        $this->nominatimCountryId = $data['nominatimCountryId'] ?? null;
        $this->nominatimStateId = $data['nominatimStateId'] ?? null;
        $this->usageCount = $data['usageCount'] ?? null;
    }

    public function toArray(): array
    {
        return [
            'citiesCount' => $this->citiesCount,
            'code' => $this->code,
            'companiesCount' => $this->companiesCount,
            'id' => $this->id,
            'latitude' => $this->latitude,
            'linkedinHeadline' => $this->linkedinHeadline,
            'linkedinId' => $this->linkedinId,
            'linkedinQuery' => $this->linkedinQuery,
            'longitude' => $this->longitude,
            'name' => $this->name,
            'nominatimCountryId' => $this->nominatimCountryId,
            'nominatimStateId' => $this->nominatimStateId,
            'usageCount' => $this->usageCount,
        ];
    }
}
