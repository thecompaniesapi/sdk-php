<?php

namespace TheCompaniesApi\Sdk\Generated\Models;

/**
 * User model
 * 
 * A user of the platform.
 */
class User
{
    public ?string $colorMode = null;
    public mixed $createdAt = null;
    public mixed $currentTeamId;
    public string $email;
    public mixed $emailFree;
    public mixed $emailVerified;
    public mixed $emailVerifiedResentAt;
    public mixed $fullName;
    public float $id;
    public mixed $locale = null;
    public mixed $pictureUrl;
    public mixed $referral = null;
    public mixed $role = null;

    public function __construct(array $data = [])
    {
        $this->colorMode = $data['colorMode'] ?? null;
        $this->createdAt = $data['createdAt'] ?? null;
        $this->currentTeamId = $data['currentTeamId'] ?? null;
        $this->email = $data['email'] ?? null;
        $this->emailFree = $data['emailFree'] ?? null;
        $this->emailVerified = $data['emailVerified'] ?? null;
        $this->emailVerifiedResentAt = $data['emailVerifiedResentAt'] ?? null;
        $this->fullName = $data['fullName'] ?? null;
        $this->id = $data['id'] ?? null;
        $this->locale = $data['locale'] ?? null;
        $this->pictureUrl = $data['pictureUrl'] ?? null;
        $this->referral = $data['referral'] ?? null;
        $this->role = $data['role'] ?? null;
    }

    public function toArray(): array
    {
        return [
            'colorMode' => $this->colorMode,
            'createdAt' => $this->createdAt,
            'currentTeamId' => $this->currentTeamId,
            'email' => $this->email,
            'emailFree' => $this->emailFree,
            'emailVerified' => $this->emailVerified,
            'emailVerifiedResentAt' => $this->emailVerifiedResentAt,
            'fullName' => $this->fullName,
            'id' => $this->id,
            'locale' => $this->locale,
            'pictureUrl' => $this->pictureUrl,
            'referral' => $this->referral,
            'role' => $this->role,
        ];
    }
}
