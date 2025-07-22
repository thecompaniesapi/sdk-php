<?php

namespace TheCompaniesApi\Sdk\Generated\Models;

/**
 * NominatimCity model
 * 
 * A city from the Nominatim API.
 */
class NominatimCity
{
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
    public mixed $nominatimCountyId = null;
    public mixed $nominatimStateId = null;
    public mixed $postcode;
    public mixed $usageCount;

    public function __construct(array $data = [])
    {
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
        $this->nominatimCountyId = $data['nominatimCountyId'] ?? null;
        $this->nominatimStateId = $data['nominatimStateId'] ?? null;
        $this->postcode = $data['postcode'] ?? null;
        $this->usageCount = $data['usageCount'] ?? null;
    }

    public function toArray(): array
    {
        return [
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
            'nominatimCountyId' => $this->nominatimCountyId,
            'nominatimStateId' => $this->nominatimStateId,
            'postcode' => $this->postcode,
            'usageCount' => $this->usageCount,
        ];
    }
}
