<?php
use PHPUnit\Framework\TestCase;
use PHPUnit\Framework\Attributes\DataProvider;

require_once __DIR__ . '/../src/Genre.php';
require_once __DIR__ . '/../src/Book.php';
require_once __DIR__ . '/../src/Library.php';

class LibraryTest extends TestCase 
{
    protected Library $library;

    protected function setUp(): void
    {
        $booksData = [
            ['1984', 'George Orwell', '9780451524935', Genre::Dystopian, 328],
            ['Dune', 'Frank Herbert', '9780441013593', Genre::SciFi, 412],
            ['The Name of the Rose', 'Umberto Eco', '9780151446476', Genre::Crime, 592],
            ['Dracula', 'Bram Stoker', '9780486411095', Genre::Supernatural, 588],
            ['The Adventures of Sherlock Holmes', 'Arthur Conan Doyle', '9781508475318', Genre::Adventures, 307]
        ];

        $this->library = new Library;

        foreach($booksData as $bookdata) {
            $this->library->addBook(new Book(...$bookdata));
        }
    }

    public static function provideIndexes(): array 
    {
        return [
            [0],
            [1],
            [2],
            [3],
            [4]
        ];
    }
    
    public function testAddBook(): void
    {
        $book = new Book('Le Petit Prince', 'Antoine de Saint-Exupéry', 9782070612758, Genre::Fantastic, 96);
        
        //Verification of initial state
        $this->assertCount(5, $this->library->getBooks());
        
        //Execution of tested method
        $this->library->addBook($book);

        //Verification of final state
        $this->assertCount(6, $this->library->getBooks());
        $this->assertEquals($book->getTitle(), $this->library->getBooks()[5]->getTitle());
    }

    #[DataProvider('provideIndexes')]
    public function testDeleteBook(int $index): void 
    {
        //Verification of initial state
        $this->assertCount(5, $this->library->getBooks());

        //Execution of tested method
        $this->library->deleteBook($index);

        //Verification of final state
        $this->assertCount(4, $this->library->getBooks());
    }

    #[DataProvider('provideIndexes')]
    public function testModifyBook(int $index): void
    {
        $newAtributes = [
            'Title' => 'Le Petit Prince',
            'Author' => 'Antoine de Saint-Exupéry',
            'Isbn' => 9782070612758,
            'Genre' => Genre::Fantastic, 
            'NumOfPages' => 96
        ];
        
        //Verification of initial state
        foreach($newAtributes as $atribute => $newValue) {
            $getter = 'get' . $atribute;
            $this->assertNotEquals($newValue, $this->library->getBooks()[$index]->$getter());
        }

        //Execution of tested method
        $this->library->modifyBook($index, ...array_values($newAtributes));

        //Verification of final state
        foreach($newAtributes as $atribute => $newValue) {
            $getter = 'get' . $atribute;
            $this->assertEquals($newValue, $this->library->getBooks()[$index]->$getter());
        }
    }

    public function testSearchBookByTitle()
    {
        $booksTitles = [];
        foreach($this->library->getBooks() as $book) {
            $booksTitles[] = $book->getTitle();
        }

        foreach ($this->library->getBooks() as $book) {
            $title = $book->getTitle();
            $index1 = $this->library->searchBookByTitle($title);
            $index2 = array_search($title, $booksTitles);
            $this->assertEquals($index1, $index2);
        }
    }

    public function testSearchBookByAuthor()
    {
        $booksAuthors = [];
        foreach($this->library->getBooks() as $book) {
            $booksAuthors[] = $book->getAuthor();
        }

        foreach ($this->library->getBooks() as $book) {
            $author = $book->getAuthor();
            $index1 = $this->library->searchBookByAuthor($author);
            $index2 = array_search($author, $booksAuthors);
            $this->assertEquals($index1, $index2);
        }
    }

    public function testSearchBookByIsbn()
    {
        $booksIsbns = [];
        foreach($this->library->getBooks() as $book) {
            $booksIsbns[] = $book->getIsbn();
        }

        foreach ($this->library->getBooks() as $book) {
            $isbn = $book->getIsbn();
            $index1 = $this->library->searchBookByIsbn($isbn);
            $index2 = array_search($isbn, $booksIsbns);
            $this->assertEquals($index1, $index2);
        } 
    }

    public function testSearchBookByGenre()
    {
        $booksGenres = [];
        foreach($this->library->getBooks() as $book) {
            $booksGenres[] = $book->getGenre()->value;
        }

        foreach ($this->library->getBooks() as $book) {
            $genre = $book->getGenre()->value;
            $index1 = $this->library->searchBookByGenre($genre);
            $index2 = array_search($genre, $booksGenres);
            $this->assertEquals($index1, $index2);
        }
    }

    public function testSearchLongBooks()
    {
        $longBooks = $this->library->searchLongBooks();

        $this->assertIsArray($longBooks, 'searchLongBooks() does not return an array');
        $this->assertNotEmpty($longBooks, 'searchLongBooks() returns an empty array');

        foreach($longBooks as $book) {
            $this->assertInstanceOf(Book::class, $book, 'searchLongBooks() returns an array of objects other than books');
            $this->assertTrue($book->getNumOfPages() >= 500, 'searchLongBooks() returns books with less than 500 pages');
        }
    }
}
?>