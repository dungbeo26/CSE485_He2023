<?php
include_once 'model/Book.php';

$bookList = new BookList();

// Thêm sách vào danh sách
$bookList->addBook(new Book("Title 1", "Author C", "Publisher X", 2010, "1234567890", ["Chapter 1", "Chapter 2"]));
$bookList->addBook(new Book("Title 2", "Author A", "Publisher Y", 2005, "0987654321", ["Chapter 1", "Chapter 2", "Chapter 3"]));
$bookList->addBook(new Book("Title 3", "Author B", "Publisher Z", 2018, "5432167890", ["Chapter 1", "Chapter 2", "Chapter 3", "Chapter 4"]));
?>
