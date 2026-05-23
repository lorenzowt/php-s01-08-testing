<?php
namespace App;

require dirname(__DIR__) . '/vendor/autoload.php';
use App\Book;
use App\Genre;

class Library {

    private const BIG_BOOK_THRESHOLD = 500;

    public function __construct(
        private array $bookCollection = []
    ) {}

    public function addBook(Book $book) {
        $this->bookCollection[] = $book;
    }

    public function removeBook(string $title) {
        $this->bookCollection = array_values(array_filter(
            $this->bookCollection,
            fn($book) => strtolower($title) !== strtolower($book->getTitle())
        ));
    }

    public function updateBook(string $isbn, array $data) {
        foreach ($this->bookCollection as $book) {
            
            if ($book->getIsbn() === $isbn) {
                if(isset($data['title'])){
                    $book->setTitle($data['title']);
                }
                if(isset($data['author'])){
                    $book->setAuthor($data['author']);
                }
                if(isset($data['isbn'])){
                    $book->setIsbn($data['isbn']);
                }
                if(isset($data['genre'])){
                    $book->setGenre($data['genre']);
                }
                if(isset($data['pages'])){
                    $book->setPages($data['pages']);
                }
            }
        }
    }

    public function getBooksByTitle(string $title): array {
        return array_filter(
            $this->bookCollection,
            fn($book) => strtolower($title) === strtolower($book->getTitle())
        );
    }

    public function getBooksByGenre(string $genre): array {
        return array_filter(
            $this->bookCollection,
            fn($book) => strtolower($genre) === strtolower($book->getGenre()->value)
        );
    }

    public function getBooksByIsbn(string $isbn): array {
        return array_filter(
            $this->bookCollection,
            fn($book) => $isbn === $book->getIsbn()
        );
    }

    public function getBooksByAuthor(string $author): array {
        return array_filter(
            $this->bookCollection,
            fn($book) => strtolower($author) === strtolower($book->getAuthor())
        );
    }

    public function getBigBooks(): array {
        return array_filter(
            $this->bookCollection,
            fn($book) => $book->getPages() > self::BIG_BOOK_THRESHOLD
        );
    }

    public function getBooks(): array {
        return $this->bookCollection;
    }
}

?>