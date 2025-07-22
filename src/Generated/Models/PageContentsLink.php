<?php

namespace TheCompaniesApi\Sdk\Generated\Models;

/**
 * PageContentsLink model
 * 
 * A link found in a page content.
 */
class PageContentsLink
{
    public ?string $text = null;
    public string $url;

    public function __construct(array $data = [])
    {
        $this->text = $data['text'] ?? null;
        $this->url = $data['url'] ?? null;
    }

    public function toArray(): array
    {
        return [
            'text' => $this->text,
            'url' => $this->url,
        ];
    }
}
