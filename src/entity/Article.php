<?php

namespace Entity;

use DateTime;

class Article implements EntityInterface
{
    private $id;

    private $title;

    private $content;

    private $createdAt;

    private $updatedAt;

    private $author;

    public function setId(int $id): self
    {
        $this->id = $id;

        return $this;
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function setTitle(string $title): self
    {
        $this->title = $title;

        return $this;
    }

    public function getTitle(): string
    {
        return $this->title;
    }

    public function setContent(string $content): self
    {
        $this->content = $content;

        return $this;
    }

    public function getContent(): string
    {
        return $this->content;
    }

    public function setCreatedAt(DateTime $createdAt): self
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    public function getCreatedAt(): DateTime
    {
        return $this->createdAt;
    }

    public function setUpdatedAt(DateTime $updatedAt): self
    {
        $this->updatedAt = $updatedAt;

        return $this;
    }

    public function getUpdatedAt(): DateTime
    {
        return $this->updatedAt;
    }

    public function setAuthor($author)
    {
        $this->author = $author;

        return $this;
    }

    public function getAuthor()
    {
        return $this->author;
    }

    static public function hydrateAll(array $articlesInput): array
    {
        $articles = array();
        foreach ($articlesInput as $articleInput) {
            $article = new Article();
            $article->id = isset($articleInput['id']) ? $articleInput['id'] : null;
            $article->title = isset($articleInput['title']) ? $articleInput['title'] : null;
            $article->content = isset($articleInput['content']) ? $articleInput['content'] : null;
            $article->createdAt = isset($articleInput['created_at']) ? DateTime::createFromFormat('Y-d-m H:i:s', $articleInput['created_at']) : null;
            $article->createdAt = isset($articleInput['updated_at']) ? DateTime::createFromFormat('Y-d-m H:i:s', $articleInput['updated_at']) : null;
            $article->author = isset($articleInput['author']) ? DateTime::createFromFormat('Y-d-m H:i:s', $articleInput['author']) : null;
            array_push($articles, $article);
        }

        return $articles;
    }
}
