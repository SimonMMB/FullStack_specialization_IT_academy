<?php
require_once 'Genre.php';

class Book 
{
    private string $title;
    private string $author;
    private string $isbn;
    private Genre $genre;
    private int $numOfPages;

    public function __construct(string $title, string $author, string $isbn, Genre $genre, int $numOfPages) 
    {
        $this->title = $title;
        $this->author = $author;
        $this->isbn = $isbn;
        $this->genre = $genre;
        $this->numOfPages = $numOfPages;
    }

    public function getTitle(): string
    {
        return $this->title;
    }

    public function getAuthor(): string
    {
        return $this->author;
    }

    public function getIsbn(): string
    {
        return $this->isbn;
    }

    public function getGenre(): Genre
    {
        return $this->genre;
    }

    public function getNumOfPages(): int 
    {
        return $this->numOfPages;
    }

    public function setTitle(string $title): void
    {
        $this->title = $title;
    }

    public function setAuthor(string $author): void
    {
        $this->author = $author;
    }

    public function setIsbn(string $isbn): void
    {
        $this->isbn = $isbn;
    }

    public function setGenre(Genre $genre): void
    {
        $this->genre = $genre;
    }

    public function setNumOfPages(int $numOfPages): void
    {
        $this->numOfPages = $numOfPages;
    }
}
?>