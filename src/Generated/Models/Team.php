<?php

namespace TheCompaniesApi\Sdk\Generated\Models;

/**
 * Team model
 * 
 * A collection of users that can access the same resources.
 */
class Team
{
    public mixed $admin;
    public mixed $country;
    public mixed $createdAt;
    public float $credits;
    public float $creditsPack;
    public float $id;
    public mixed $name;
    public mixed $role = null;
    public mixed $stripeCustomerId;
    public mixed $stripeProductId;
    public bool $stripeSubscribed;
    public mixed $stripeSubscriptionId;
    public mixed $stripeSubscriptionStatus;
    public mixed $websiteUrl;

    public function __construct(array $data = [])
    {
        $this->admin = $data['admin'] ?? null;
        $this->country = $data['country'] ?? null;
        $this->createdAt = $data['createdAt'] ?? null;
        $this->credits = $data['credits'] ?? null;
        $this->creditsPack = $data['creditsPack'] ?? null;
        $this->id = $data['id'] ?? null;
        $this->name = $data['name'] ?? null;
        $this->role = $data['role'] ?? null;
        $this->stripeCustomerId = $data['stripeCustomerId'] ?? null;
        $this->stripeProductId = $data['stripeProductId'] ?? null;
        $this->stripeSubscribed = $data['stripeSubscribed'] ?? null;
        $this->stripeSubscriptionId = $data['stripeSubscriptionId'] ?? null;
        $this->stripeSubscriptionStatus = $data['stripeSubscriptionStatus'] ?? null;
        $this->websiteUrl = $data['websiteUrl'] ?? null;
    }

    public function toArray(): array
    {
        return [
            'admin' => $this->admin,
            'country' => $this->country,
            'createdAt' => $this->createdAt,
            'credits' => $this->credits,
            'creditsPack' => $this->creditsPack,
            'id' => $this->id,
            'name' => $this->name,
            'role' => $this->role,
            'stripeCustomerId' => $this->stripeCustomerId,
            'stripeProductId' => $this->stripeProductId,
            'stripeSubscribed' => $this->stripeSubscribed,
            'stripeSubscriptionId' => $this->stripeSubscriptionId,
            'stripeSubscriptionStatus' => $this->stripeSubscriptionStatus,
            'websiteUrl' => $this->websiteUrl,
        ];
    }
}
