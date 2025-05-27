<?php
require_once "Cinema.php";
require_once "Movie.php";

$cinemas = [];

function searchCinemaIndex(array $cinemas, string $nameOfCinema) : int 
{
    $cinemaIndex = -1;
    $nameOfCinema = strtolower($nameOfCinema);

    for ($i = 0; $i < count($cinemas); $i++) {
        if (strtolower($cinemas[$i]->getName()) == $nameOfCinema) {
            $cinemaIndex = $i;
            break;
        }
    }

    return $cinemaIndex;
}

//Execution (console interaction)

do {
    echo "Hello! What do you want to do?" . PHP_EOL
        . "1) Add cinema/s." . PHP_EOL
        . "2) Add movie/s." . PHP_EOL
        . "3) Show the movies being shown in a cinema." . PHP_EOL
        . "4) Show the longest movie being shown in a cinema." . PHP_EOL
        . "5) Show movies from a director." . PHP_EOL
        . "6) Exit." . PHP_EOL;
    $num = fgets(STDIN);
    $num = trim($num);
    
    switch ($num) {
        case 1:
            echo "How many cinemas do you want to add?" . PHP_EOL;
            $numOfCinemas = fgets(STDIN);
            $numOfCinemas = trim($numOfCinemas);
            for ($i = 0; $i < $numOfCinemas; $i++) {
                echo "Put the name of cinema number " . ($i + 1) . ":" . PHP_EOL;
                $nameOfCinema = fgets(STDIN);
                $nameOfCinema = trim($nameOfCinema);
                echo "Put the city:" . PHP_EOL;
                $city = fgets(STDIN);
                $city = trim($city);
                $cinema = new Cinema($nameOfCinema, $city);
                $cinemas[] = $cinema;
                echo $nameOfCinema . " was added to list." . PHP_EOL;
            }
            break;

        case 2:
            echo "How many movies do you want to add?" . PHP_EOL;
            $numOfMovies = fgets(STDIN);
            $numOfMovies = trim($numOfMovies);
            for ($i = 0; $i < $numOfMovies; $i++) {
                echo "Put the name of movie number " . ($i + 1) . ":" . PHP_EOL;
                $nameOfMovie = fgets(STDIN);
                $nameOfMovie = trim($nameOfMovie);
                echo "Put the duration:" . PHP_EOL;
                $duration = fgets(STDIN);
                $duration = trim($duration);
                echo "Put the director:" . PHP_EOL;
                $director = fgets(STDIN);
                $director = trim($director);
                $movie = new Movie($nameOfMovie, $duration, $director);
                echo "How many cinemas will exhibit this movie?" . PHP_EOL;
                $numOfCinemas = fgets(STDIN);
                $numOfCinemas = trim($numOfCinemas);
                for ($j = 0; $j < $numOfCinemas; $j++) {
                    $rightCinema = 0;
                    while ($rightCinema == 0) {
                        echo "Put the name of cinema number " . ($j + 1) . ":" . PHP_EOL;
                        $nameOfCinema = fgets(STDIN);
                        $nameOfCinema = trim($nameOfCinema);
                        $cinemaIndex = searchCinemaIndex($cinemas, $nameOfCinema);
                        if ($cinemaIndex != -1) {
                            $cinemas[$cinemaIndex]->addMovie($movie);
                            $rightCinema = 1;
                            echo "Movie added to " . $nameOfCinema . "." . PHP_EOL;
                        } else {
                            echo "Cinema not found. Try again." . PHP_EOL;
                        }
                    }
                }
            }
            break;

        case 3:
            $rightCinema = 0;
            while ($rightCinema == 0) {
                echo "Put the name of the cinema:" . PHP_EOL;
                $nameOfCinema = fgets(STDIN);
                $nameOfCinema = trim($nameOfCinema);
                $cinemaIndex = searchCinemaIndex($cinemas, $nameOfCinema);
                if ($cinemaIndex != -1) {
                    echo $cinemas[$cinemaIndex]->printMovies();
                    $rightCinema = 1;
                } else {
                    echo "Cinema not found. Try again." . PHP_EOL;
                }
            }
            break;

        case 4:
            $rightCinema = 0;
            while ($rightCinema == 0) {
                echo "Put the name of the cinema:" . PHP_EOL;
                $nameOfCinema = fgets(STDIN);
                $nameOfCinema = trim($nameOfCinema);
                $cinemaIndex = searchCinemaIndex($cinemas, $nameOfCinema);
                if ($cinemaIndex != -1) {
                    $movies = $cinemas[$cinemaIndex]->getMovies();
                    $maxDuration = 0;
                    foreach ($movies as $movie) {
                        if ($movie->getDuration() > $maxDuration) {
                            $maxDuration = $movie->getDuration();
                            $longestMovie = $movie->getName();
                        }
                    }
                    $rightCinema = 1;
                } else {
                    echo "Cinema not found. Try again." . PHP_EOL;
                }
            }
            echo "Longest movie: " . $longestMovie . PHP_EOL;
            break;

        case 5:
                echo "Put the name of the director:" . PHP_EOL;
                $director = fgets(STDIN);
                $director = trim($director);
                $moviesFromDirector = [];
                for ($i = 0; $i < count($cinemas); $i++) {
                    $movies = $cinemas[$i]->getMovies();
                    foreach ($movies as $movie) {
                        if ($movie->getDirector() == $director) {
                            $moviesFromDirector[] = $movie->getName();
                        }
                    }
                }
                $moviesFromDirector = array_unique($moviesFromDirector);
                foreach ($moviesFromDirector as $movie) {
                    echo $movie . PHP_EOL;
                }
    }
} while ($num != 6);
echo "Thank you! Good bye!" . PHP_EOL;
?>