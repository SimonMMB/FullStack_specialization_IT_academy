<?php
require_once 'Movie.php';

class Cinema 
{
    private string $name;
    private string $city;
    private array $movies;

    public function __construct(string $name, string $city) 
    {
        $this->name = $name;
        $this->city = $city;
        $this->movies = [];
    }

    public function getName(): string 
    {
        return $this->name;
    }

    public function getMovies(): array 
    {
        return $this->movies;
    }

    public function addMovie(Movie $movie): void 
    {
        $this->movies[] = $movie;
    }

    public function printMovies()
    {
        foreach ($this->movies as $movie) {
            echo $movie;
        }
    }
}
?>