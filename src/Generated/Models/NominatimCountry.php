<?php

namespace TheCompaniesApi\Sdk\Generated\Models;

/**
 * NominatimCountry model
 * 
 * A country from the Nominatim API.
 */
class NominatimCountry
{
    public mixed $citiesCount;
    public string $code;
    public mixed $companiesCount;
    public mixed $continent;
    public mixed $continentCode;
    public mixed $countiesCount;
    public float $id;
    public mixed $latitude;
    public mixed $linkedinHeadline = null;
    public mixed $linkedinId = null;
    public mixed $longitude;
    public string $name;
    public string $nameEs;
    public string $nameFr;
    public string $nameNative;
    public mixed $population;
    public mixed $statesCount;
    public mixed $usageCount;

    public function __construct(array $data = [])
    {
        $this->citiesCount = $data['citiesCount'] ?? null;
        $this->code = $data['code'] ?? null;
        $this->companiesCount = $data['companiesCount'] ?? null;
        $this->continent = $data['continent'] ?? null;
        $this->continentCode = $data['continentCode'] ?? null;
        $this->countiesCount = $data['countiesCount'] ?? null;
        $this->id = $data['id'] ?? null;
        $this->latitude = $data['latitude'] ?? null;
        $this->linkedinHeadline = $data['linkedinHeadline'] ?? null;
        $this->linkedinId = $data['linkedinId'] ?? null;
        $this->longitude = $data['longitude'] ?? null;
        $this->name = $data['name'] ?? null;
        $this->nameEs = $data['nameEs'] ?? null;
        $this->nameFr = $data['nameFr'] ?? null;
        $this->nameNative = $data['nameNative'] ?? null;
        $this->population = $data['population'] ?? null;
        $this->statesCount = $data['statesCount'] ?? null;
        $this->usageCount = $data['usageCount'] ?? null;
    }

    public function toArray(): array
    {
        return [
            'citiesCount' => $this->citiesCount,
            'code' => $this->code,
            'companiesCount' => $this->companiesCount,
            'continent' => $this->continent,
            'continentCode' => $this->continentCode,
            'countiesCount' => $this->countiesCount,
            'id' => $this->id,
            'latitude' => $this->latitude,
            'linkedinHeadline' => $this->linkedinHeadline,
            'linkedinId' => $this->linkedinId,
            'longitude' => $this->longitude,
            'name' => $this->name,
            'nameEs' => $this->nameEs,
            'nameFr' => $this->nameFr,
            'nameNative' => $this->nameNative,
            'population' => $this->population,
            'statesCount' => $this->statesCount,
            'usageCount' => $this->usageCount,
        ];
    }
}
