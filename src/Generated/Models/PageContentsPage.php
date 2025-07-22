<?php

namespace TheCompaniesApi\Sdk\Generated\Models;

/**
 * PageContentsPage model
 * 
 * A page content saved as a source for a company context.
 */
class PageContentsPage
{
    public string $url;
    public ?string $content = null;
    public ?string $html = null;
    public ?string $description = null;
    public ?string $title = null;
    public ?array $externals = null;
    public ?array $navigation = null;
    public ?string $visitedAt = null;

    public function __construct(array $data = [])
    {
        $this->url = $data['url'] ?? null;
        $this->content = $data['content'] ?? null;
        $this->html = $data['html'] ?? null;
        $this->description = $data['description'] ?? null;
        $this->title = $data['title'] ?? null;
        $this->externals = $data['externals'] ?? null;
        $this->navigation = $data['navigation'] ?? null;
        $this->visitedAt = $data['visitedAt'] ?? null;
    }

    public function toArray(): array
    {
        return [
            'url' => $this->url,
            'content' => $this->content,
            'html' => $this->html,
            'description' => $this->description,
            'title' => $this->title,
            'externals' => $this->externals,
            'navigation' => $this->navigation,
            'visitedAt' => $this->visitedAt,
        ];
    }
}
