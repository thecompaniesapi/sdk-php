<?php

namespace TheCompaniesApi\Sdk\Generated\Models;

/**
 * SegmentationCondition model
 * 
 * A condition for our platform segmentation engine.
 */
class SegmentationCondition
{
    public string $attribute;
    public ?bool $blockedOperator = null;
    public string $operator;
    public string $sign;
    public array $values;

    public function __construct(array $data = [])
    {
        $this->attribute = $data['attribute'] ?? null;
        $this->blockedOperator = $data['blockedOperator'] ?? null;
        $this->operator = $data['operator'] ?? null;
        $this->sign = $data['sign'] ?? null;
        $this->values = $data['values'] ?? null;
    }

    public function toArray(): array
    {
        return [
            'attribute' => $this->attribute,
            'blockedOperator' => $this->blockedOperator,
            'operator' => $this->operator,
            'sign' => $this->sign,
            'values' => $this->values,
        ];
    }
}
