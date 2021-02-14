<?php

namespace App\Services\DTO;



class ArticleDTO
{
    /**
     * @var int
     */
    private $id;
    /**
     * @var string
     */
    private $title;
    /**
     * @var string
     */
    private $body;
    /**
     * @var string
     */
    private $author;

    /**
     * ArticleDTO constructor.
     * @param int $id
     * @param string $title
     * @param string $body
     * @param string $author
     */
    public function __construct(
        int $id,
        string $title,
        string $body,
        string $author
    )
    {

        $this->id = $id;
        $this->title = $title;
        $this->body = $body;
        $this->author = $author;
    }

    /**
     * @return array
     */
    public function toArray(): array
    {
        return [
            'id' => $this->id,
            'title' => $this->title,
            'body' => $this->body,
            'author' => $this->author,
        ];
    }
}
