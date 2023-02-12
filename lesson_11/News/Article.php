<?php

class Article
{
    private string $title;
    private string $content;
    private string $publicationAt;
    private bool $isDraft;
    private string $slug;

    public function __construct(string $title, string $content, string $publicationAt, bool $isDraft, string $slug)
    {
        $this->title = $title;
        $this->content = $content;
        $this->publicationAt = $publicationAt;
        $this->isDraft = $isDraft;
        $this->slug = self::createSlug($slug);
    }

    /**
     * @return string
     */
    public function getTitle(): string
    {
        return $this->title;
    }

    /**
     * @param string $title
     */
    public function setTitle(string $title): void
    {
        $this->title = $title;
    }

    /**
     * @return string
     */
    public function getSlug(): string
    {
        return $this->slug;
    }

    /**
     * @param string $slug
     */
    public function setSlug(string $slug): void
    {
        $this->slug = $slug;
    }

    /**
     * @return bool
     */
    public function isDraft(): bool
    {
        return $this->isDraft;
    }

    /**
     * @param bool $isDraft
     */
    public function setIsDraft(bool $isDraft): void
    {
        $this->isDraft = $isDraft;
    }

    /**
     * @return string
     */
    public function getPublicationAt(): string
    {
        return $this->publicationAt;
    }

    /**
     * @param string $publicationAt
     */
    public function setPublicationAt(string $publicationAt): void
    {
        $this->publicationAt = $publicationAt;
    }

    /**
     * @return string
     */
    public function getContent(): string
    {
        return $this->content;
    }

    /**
     * @param string $content
     */
    public function setContent(string $content): void
    {
        $this->content = $content;
    }

    public function __clone(): void
    {
        $this->title = "Copy " . $this->getTitle();
        $this->isDraft = true;
        $this->publicationAt = date('Y-m-d H:i', strtotime("+1 day"));
        $this->slug = $this->slug . "-copy";
    }

    public static function createSlug($str, $delimiter = '-'){
        return strtolower(trim(preg_replace('/[\s-]+/', $delimiter, preg_replace('/[^A-Za-z0-9-]+/', $delimiter, preg_replace('/[&]/', 'and', preg_replace('/[\']/', '', iconv('UTF-8', 'ASCII//TRANSLIT', $str))))), $delimiter));
    }
}
