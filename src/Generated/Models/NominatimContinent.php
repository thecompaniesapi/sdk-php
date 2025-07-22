<?php

namespace TheCompaniesApi\Sdk\Generated\Models;

/**
 * NominatimContinent model
 * 
 * A continent from the Nominatim API.
 */
class NominatimContinent
{
    public mixed $citiesCount;
    public string $code;
    public mixed $companiesCount;
    public mixed $countiesCount;
    public mixed $countriesCount;
    public mixed $icon;
    public float $id;
    public mixed $latitude;
    public mixed $linkedinHeadline = null;
    public mixed $linkedinId = null;
    public mixed $longitude;
    public string $name;
    public string $nameEs;
    public string $nameFr;
    public mixed $statesCount;
    public mixed $usageCount;

    public function __construct(array $data = [])
    {
        $this->citiesCount = $data['citiesCount'] ?? null;
        $this->code = $data['code'] ?? null;
        $this->companiesCount = $data['companiesCount'] ?? null;
        $this->countiesCount = $data['countiesCount'] ?? null;
        $this->countriesCount = $data['countriesCount'] ?? null;
        $this->icon = $data['icon'] ?? null;
        $this->id = $data['id'] ?? null;
        $this->latitude = $data['latitude'] ?? null;
        $this->linkedinHeadline = $data['linkedinHeadline'] ?? null;
        $this->linkedinId = $data['linkedinId'] ?? null;
        $this->longitude = $data['longitude'] ?? null;
        $this->name = $data['name'] ?? null;
        $this->nameEs = $data['nameEs'] ?? null;
        $this->nameFr = $data['nameFr'] ?? null;
        $this->statesCount = $data['statesCount'] ?? null;
        $this->usageCount = $data['usageCount'] ?? null;
    }

    public function toArray(): array
    {
        return [
            'citiesCount' => $this->citiesCount,
            'code' => $this->code,
            'companiesCount' => $this->companiesCount,
            'countiesCount' => $this->countiesCount,
            'countriesCount' => $this->countriesCount,
            'icon' => $this->icon,
            'id' => $this->id,
            'latitude' => $this->latitude,
            'linkedinHeadline' => $this->linkedinHeadline,
            'linkedinId' => $this->linkedinId,
            'longitude' => $this->longitude,
            'name' => $this->name,
            'nameEs' => $this->nameEs,
            'nameFr' => $this->nameFr,
            'statesCount' => $this->statesCount,
            'usageCount' => $this->usageCount,
        ];
    }
}
