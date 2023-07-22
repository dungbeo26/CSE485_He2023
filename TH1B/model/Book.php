<?php
// Định nghĩa interface IBook
interface IBook {
  public function getBookInfo();
}

// Định nghĩa lớp Book kế thừa từ IBook
class Book implements IBook {
  private $title;
  private $author;
  private $publisher;
  private $year;
  private $isbn;
  private $chapters;

  public function __construct($title, $author, $publisher, $year, $isbn, $chapters) {
    $this->title = $title;
    $this->author = $author;
    $this->publisher = $publisher;
    $this->year = $year;
    $this->isbn = $isbn;
    $this->chapters = $chapters;
  }

  public function getBookInfo() {
    return "Title: {$this->title}, Author: {$this->author}, Publisher: {$this->publisher}, Year: {$this->year}, ISBN: {$this->isbn}";
  }

  // Các phương thức getter
  public function getTitle() {
    return $this->title;
  }

  public function getAuthor() {
    return $this->author;
  }

  public function getYear() {
    return $this->year;
  }
}

// Định nghĩa lớp BookList quản lý danh sách các đối tượng Book
class BookList {
  private $books = [];

  public function addBook($book) {
    $this->books[] = $book;
  }

  public function sortBooksByAuthor() {
    usort($this->books, function($a, $b) {
      return strcmp($a->getAuthor(), $b->getAuthor());
    });
  }

  public function sortBooksByTitle() {
    usort($this->books, function($a, $b) {
      return strcmp($a->getTitle(), $b->getTitle());
    });
  }

  public function sortBooksByYear() {
    usort($this->books, function($a, $b) {
      return $a->getYear() - $b->getYear();
    });
  }

  public function getBooks() {
    return $this->books;
  }
}
?>
