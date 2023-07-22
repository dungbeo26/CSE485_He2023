<?php

interface IBook {
    public function getBookInfo(): string;
    public function addChapter(string $chapterName): void;
}


class Book implements IBook {
    private string $title;
    private string $author;
    private string $publisher;
    private int $year;
    private string $isbn;
    private array $chapters;

    public function __construct(string $title, string $author, string $publisher, int $year, string $isbn) {
        $this->title = $title;
        $this->author = $author;
        $this->publisher = $publisher;
        $this->year = $year;
        $this->isbn = $isbn;
        $this->chapters = [];
    }

    public function getBookInfo(): string {
        $chapters = implode(", ", $this->chapters);
        return "Tên sách: $this->title, Tác giả: $this->author, Nhà xuất bản: $this->publisher, Năm xuất bản: $this->year, ISBN: $this->isbn, Danh mục chương sách: $chapters";
    }

    public function addChapter(string $chapterName): void {
        $this->chapters[] = $chapterName;
    }
}



class BookList {
    private array $books;

    public function __construct() {
        $this->books = [];
    }

    public function addBook(Book $book): void {
        $this->books[] = $book;
    }

    public function getBooks(): array {
        return $this->books;
    }

    public function sortBooksByAuthor(): void {
        usort($this->books, function ($book1, $book2) {
            return strcmp($book1->getAuthor(), $book2->getAuthor());
        });
    }

    public function sortBooksByTitle(): void {
        usort($this->books, function ($book1, $book2) {
            return strcmp($book1->getTitle(), $book2->getTitle());
        });
    }

    public function sortBooksByYear(): void {
        usort($this->books, function ($book1, $book2) {
            return $book1->getYear() - $book2->getYear();
        });
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Quản lý sách</title>
</head>
<body>
    <h1>Danh sách các cuốn sách</h1>
    <?php
    require_once 'Book.php';
    require_once 'BookList.php';

    $bookList = new BookList();

    // Thêm sách mới
    $book1 = new Book('Sách 1', 'Tác giả 1', 'Nhà xuất bản 1', 2020, '1234567890');
    $book1->addChapter('Chương 1');
    $book1->addChapter('Chương 2');
    $bookList->addBook($book1);

    $book2 = new Book('Sách 2', 'Tác giả 2', 'Nhà xuất bản 2', 2019, '0987654321');
    $book2->addChapter('Chương 1');
    $book2->addChapter('Chương 2');
    $bookList->addBook($book2);

    // Hiển thị danh sách sách
    $books = $bookList->getBooks();
    foreach ($books as $book) {
        echo "<p>" . $book->getBookInfo() . "</p>";
    }

    // Sắp xếp sách theo tên tác giả
    $bookList->sortBooksByAuthor();
    echo "<h2>Sắp xếp sách theo tên tác giả</h2>";
    foreach ($books as $book) {
        echo "<p>" . $book->getBookInfo() . "</p>";
    }

    // Sắp xếp sách theo tên sách
    $bookList->sortBooksByTitle();
    echo "<h2>Sắp xếp sách theo tên sách</h2>";
    foreach ($books as $book) {
        echo "<p>" . $book->getBookInfo() . "</p>";
    }

    // Sắp xếp sách theo năm xuất bản
    $bookList->sortBooksByYear();
    echo "<h2>Sắp xếp sách theo năm xuất bản</h2>";
    foreach ($books as $book) {
        echo "<p>" . $book->getBookInfo() . "</p>";
    }
    ?>
</body>
</html>
