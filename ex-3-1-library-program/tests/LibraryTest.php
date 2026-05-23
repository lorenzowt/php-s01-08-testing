<?php

namespace Tests;

require dirname(__DIR__) . '/vendor/autoload.php';

use PHPUnit\Framework\TestCase;
use App\Library;
use App\Book;
use App\Genre;

class LibraryTest extends TestCase {

    public function testAddBookStoresBookInLibrary(): void {
        $book = new Book(
            'The Hunger Games',
            'Suzanne Collins',
            '978-0-439-02352-8',
            Genre::DYSTOPIA,
            510
        );

        $library = new Library();

        $library->addBook($book);

        $this->assertCount(1, $library->getBooks());
        $this->assertSame($book, $library->getBooks()[0]);
    }

    public function testRemoveBookDeletesBook(): void {
        $book = new Book(
            'The Hunger Games',
            'Suzanne Collins',
            '978-0-439-02352-8',
            Genre::DYSTOPIA,
            510
        );

        $library = new Library();

        $library->addBook($book);
        $library->removeBook('the hunger games');

        $this->assertEmpty($library->getBooks());      
    }

    public function testUpdateBookChangesInfo(): void {
        $book = new Book(
            'Hunger Games',
            'Suzanne',
            '978-0-439-02352-8',
            Genre::DYSTOPIA,
            510
        );

        $library = new Library();

        $library->addBook($book);
        $library->updateBook('978-0-439-02352-8', [
            'title' => 'The Hunger Games', 
            'author'=> 'Suzanne Collins' 
        ]);
        $this->assertSame('The Hunger Games', $library->getBooks()[0]->getTitle()); 
        $this->assertSame('Suzanne Collins', $library->getBooks()[0]->getAuthor());       
    }

    public function testGetBookByTitleReturnsBook(): void {
        $book = new Book(
            'The Hunger Games',
            'Suzanne Collins',
            '978-0-439-02352-8',
            Genre::DYSTOPIA,
            510
        );

        $library = new Library();

        $library->addBook($book);
        $this->assertCount(1, $library->getBooksByTitle('the hunger games'));
        $this->assertSame($book, $library->getBooksByTitle('the hunger games')[0]);
    }

    public function testGetBookByGenreReturnsBook(): void {
        $book = new Book(
            'The Hunger Games',
            'Suzanne Collins',
            '978-0-439-02352-8',
            Genre::DYSTOPIA,
            510
        );

        $library = new Library();

        $library->addBook($book);
        $this->assertCount(1, $library->getBooksByGenre('dystopia'));
        $this->assertSame($book, $library->getBooksByGenre('dystopia')[0]);
    }

    public function testGetBookByIsbnReturnsBook(): void {
        $book = new Book(
            'The Hunger Games',
            'Suzanne Collins',
            '978-0-439-02352-8',
            Genre::DYSTOPIA,
            510
        );

        $library = new Library();

        $library->addBook($book);
        $this->assertCount(1, $library->getBooksByIsbn('978-0-439-02352-8'));
        $this->assertSame($book, $library->getBooksByIsbn('978-0-439-02352-8')[0]);
    }

    public function testGetBookByAuthorReturnsBook(): void {
        $book = new Book(
            'The Hunger Games',
            'Suzanne Collins',
            '978-0-439-02352-8',
            Genre::DYSTOPIA,
            510
        );

        $library = new Library();

        $library->addBook($book);
        $this->assertCount(1, $library->getBooksByAuthor('Suzanne Collins'));
        $this->assertSame($book, $library->getBooksByAuthor('Suzanne Collins')[0]);
    }

        public function testGetBigBooksReturnsBook(): void {
        $book = new Book(
            'The Hunger Games',
            'Suzanne Collins',
            '978-0-439-02352-8',
            Genre::DYSTOPIA,
            510
        );

        $library = new Library();

        $library->addBook($book);
        $this->assertCount(1, $library->getBigBooks());
        $this->assertSame($book, $library->getBigBooks()[0]);
    }


}
