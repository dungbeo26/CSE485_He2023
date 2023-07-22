<!-- Giao diện hiển thị danh sách sách -->
<!-- (Có thể tuỳ chỉnh giao diện theo ý muốn) -->

<div id="bookList">
  <?php
  foreach ($bookList->getBooks() as $book) {
    echo "<p>{$book->getBookInfo()}</p>";
  }
  ?>
</div>
