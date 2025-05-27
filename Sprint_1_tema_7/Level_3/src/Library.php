<?php
require_once 'Genre.php';
require_once 'Book.php';

class Library 
{
    private array $books;

    public function __construct()
    {
        $this->books = [];
    }

    public function getBooks(): array
    {
        return $this->books;
    }

    public function addBook(Book $book): void
    {
        $this->books[] = $book;
    }
    
    public function deleteBook(int $bookIndex): void
    {
        unset($this->books[$bookIndex]);
    }

    public function modifyBook(int $bookIndex, string $newTitle, string $newAuthor, int $newIsbn, Genre $newGenre, int $newNumOfPages): void
    {
        $intParameters = [$bookIndex, $newIsbn, $newNumOfPages];
        $stringParameters = [$newTitle, $newAuthor];
        $rightParameters = true;

        foreach($intParameters as $parameter) {
            if(!is_int($parameter)) {
                $rightParameters = false;
            }
        }

        foreach($stringParameters as $parameter) {
            if(!is_string($parameter)) {
                $rightParameters = false;
            }
        }

        if(!($newGenre instanceof Genre)) {
            $rightParameters = false;
        }

        if ($rightParameters) {
            $newAtributes = [
                'Title' => $newTitle,
                'Author' => $newAuthor,
                'Isbn' => $newIsbn,
                'Genre' => $newGenre,
                'NumOfPages' => $newNumOfPages
            ];

            foreach($newAtributes as $atribute => $newValue) {
                $setter = 'set' . $atribute;
                $this->books[$bookIndex]->$setter($newValue);
            }
        } else {
            echo 'Error. Invalid parameter type';
        }
    }

    public function searchBookByTitle(string $title): int 
    {
        $bookIndex = -1;
        if (is_string($title)) {
            for ($i = 0; $i < count($this->books); $i++) {
                if (strtolower($this->books[$i]->getTitle()) == strtolower($title)) {
                    $bookIndex = $i;
                    break;
                }
            }
        } else {
            echo 'Error. Invalid parameter type';
        }
        return $bookIndex;
    }

    public function searchBookByAuthor(string $author): int 
    {
        $bookIndex = -1;
        if (is_string($author)) {
            for ($i = 0; $i < count($this->books); $i++) {
                if (strtolower($this->books[$i]->getAuthor()) == strtolower($author)) {
                    $bookIndex = $i;
                    break;
                }
            }
        } else {
            echo 'Error. Invalid parameter type';
        }
        return $bookIndex;
    }

    public function searchBookByIsbn(string $isbn): int 
    {
        $bookIndex = -1;
        if (is_string($isbn) && strlen($isbn) === 13) {
            for ($i = 0; $i < count($this->books); $i++) {
                if ($this->books[$i]->getIsbn() == $isbn) {
                    $bookIndex = $i;
                    break;
                }
            }
        } else {
            echo 'Error. Invalid parameter type';
        }
        return $bookIndex;
    }

    public function searchBookByGenre(string $genre): int
    {
        $bookIndex = -1;
        if (is_string($genre)) {
            for ($i = 0; $i < count($this->books); $i++) {
                if (strtolower($this->books[$i]->getGenre()->value) == strtolower($genre)) {
                    $bookIndex = $i;
                    break;
                }
            }
        } else {
            echo 'Error. Invalid parameter type';
        }
        return $bookIndex;
    }

    public function searchLongBooks(): array
    {
        define('PAGES_OF_LONG_BOOKS', 500);
        $longBooks = [];
        foreach($this->books as $book) {
            if ($book->getNumOfPages() >= PAGES_OF_LONG_BOOKS) {
                $longBooks[] = $book;
            }
        }
        return $longBooks;
    }
}
?>