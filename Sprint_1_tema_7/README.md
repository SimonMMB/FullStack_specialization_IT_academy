# Sprint_1_tema_7
Testing

=> 03-FEB-25: LEVEL 3

📄 EXERCISES DESCRIPTION

LEVELS 1 & 2

- Exercise 1: Given the NumberChecker class, program the unit tests needed.
-> Files: src/NumberChecker.php, tests/NumberCheckerTest.php, composer.json

- Exercise 2: Program the unit tests needed to certify the correct operation of function written in exercise 5 of Basic PHP level 1.
-> Files: src/DetermineGrade.php, tests/DetermineGradeTest.php, composer.json

LEVEL 3

- Exercise 1: We need to create a small software for processing information in a library. For this we need to represent the information of a book, which has:
    - Title
    - Author
    - ISBN
    - Genre, which can be: Adventure, Science Fiction, Short Story, Crime Novel, Paranormal, Dystopian, Fantastic
    - No. of pages.
We need to store the set of books and have methods that:
    - Add, delete and modify a book from the library.
    - Allow to consult books by title, genre, ISBN or author.
    - Return large books (more than 500 pages).
Develop this program using TDD to ensure that it meets all the functionalities requested by the statement.

💻 TECHNOLOGIES USED

- XAMPP package (PHP, Apache web server, MySQL database)
- Visual Studio Code
- PHP 8.2.4 
- PHPUnit 11.5.1
- Git/Github

📋 NOTE

* In case needed (afer executing composer install), phpunit.xml file functional code is as follow:
<!--
<?xml version="1.0" encoding="UTF-8"?>
<phpunit bootstrap="vendor/autoload.php" colors="true">
    <testsuites>
        <testsuite name="Unit">
            <directory>tests</directory>
        </testsuite>
    </testsuites>
</phpunit>
-->