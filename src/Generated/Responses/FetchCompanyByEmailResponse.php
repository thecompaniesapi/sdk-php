<?php

namespace TheCompaniesApi\Sdk\Generated\Responses;

/**
 * FetchCompanyByEmailResponse - API response class
 * 
 * 
 */
class FetchCompanyByEmailResponse
{
    public ?\TheCompaniesApi\Sdk\Generated\Models\CompanyV2 $company = null;
    public ?array $email = null;
    public ?array $meta = null;

    public function __construct(array $data = [])
    {
        $this->company = $this->convertProperty($data['company'] ?? null, 'company');
        $this->email = $this->convertProperty($data['email'] ?? null, 'email');
        $this->meta = $this->convertProperty($data['meta'] ?? null, 'meta');
    }

    private function convertProperty(mixed $value, string $property): mixed
    {
        // Handle model references and arrays
        if ($property === 'company' && is_array($value)) {
            return new \TheCompaniesApi\Sdk\Generated\Models\CompanyV2($value);
        }
        if ($property === 'email') {
            return is_array($value) ? $value : null;
        }
        if ($property === 'meta') {
            return is_array($value) ? $value : null;
        }
        return $value;
    }
}
