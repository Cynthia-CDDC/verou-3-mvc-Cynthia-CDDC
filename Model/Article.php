<?php

declare(strict_types=1);

class Article
{   
    public int $id;
    public string $title;
    public ?string $description;
    public ?string $publishDate;
    public string $image;
    public string $author;

    public function __construct(int $id, string $title, ?string $description, ?string $publishDate, string $image, string $author)
    {   
        $this->id = $id;
        $this->title = $title;
        $this->description = $description;
        $this->publishDate = $publishDate;
        $this->image = $image;
        $this->author = $author;
    }

    public function formatPublishDate($format = 'd-m-Y')
    {
        // return the date in the required format
        $newDate = date($format, strtotime($this->publishDate));
        return $newDate;
    }
}