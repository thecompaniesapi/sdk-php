<?php

namespace TheCompaniesApi\Sdk\Generated\Models;

/**
 * LLMAnswer model
 * 
 * An answer from a query made to the LLM.
 */
class LLMAnswer
{
    public float $companyId;
    public ?string $explanation = null;
    public ?array $fields = null;
    public ?bool $grounded = null;
    public array $output;
    public string $question;
    public float $score;

    public function __construct(array $data = [])
    {
        $this->companyId = $data['companyId'] ?? null;
        $this->explanation = $data['explanation'] ?? null;
        $this->fields = $data['fields'] ?? null;
        $this->grounded = $data['grounded'] ?? null;
        $this->output = $data['output'] ?? null;
        $this->question = $data['question'] ?? null;
        $this->score = $data['score'] ?? null;
    }

    public function toArray(): array
    {
        return [
            'companyId' => $this->companyId,
            'explanation' => $this->explanation,
            'fields' => $this->fields,
            'grounded' => $this->grounded,
            'output' => $this->output,
            'question' => $this->question,
            'score' => $this->score,
        ];
    }
}
