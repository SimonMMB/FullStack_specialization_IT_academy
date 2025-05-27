<?php
class Movie 
{
    private string $name;
    private int $duration;
    private string $director;

    public function __construct(string $name, int $duration, string $director) 
    {
        $this->name = $name;
        $this->duration = $duration;
        $this->director = $director;
    }

    public function getName(): string 
    {
        return $this->name;
    }

    public function getDuration(): int 
    {
        return $this->duration;
    }

    public function getDirector(): string 
    {
        return $this->director;
    }

    public function __toString()
    {
        return strtoupper($this->name) . PHP_EOL 
                . "Duration: " . $this->duration . PHP_EOL
                . "Director: " . $this->director . PHP_EOL;
    }
}