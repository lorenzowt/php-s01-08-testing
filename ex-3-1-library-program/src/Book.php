<?php
namespace App;

require dirname(__DIR__) . '/vendor/autoload.php';

use App\Genre;

class Book {

    public function __construct(
    private string $title, 
    private string $author, 
    private string $isbn, 
    private Genre $genre, 
    private int $pages ) {
    }

    public function __toString(): string {
        return "Title: " . $this->title 
        . "\nAuthor: " . $this->author
        . "\nISBN: " . $this->isbn
        . "\nGenre: " . $this->genre->value
        . "\nPages: " . $this->pages;
    }

    public function getTitle()
    {
        return $this->title;
    }

    public function setTitle($title)
    {
        $this->title = $title;
    }
 
    public function getAuthor()
    {
        return $this->author;
    }

    public function setAuthor($author)
    {
        $this->author = $author;
    }
 
    public function getIsbn()
    {
        return $this->isbn;
    }

    public function setIsbn($isbn)
    {
        $this->isbn = $isbn;

    }

    public function getGenre()
    {
        return $this->genre;
    }

    public function setGenre($genre)
    {
        $this->genre = $genre;
    }

    public function getPages()
    {
        return $this->pages;
    }

    public function setPages($pages)
    {
        $this->pages = $pages;
    }
}


?>