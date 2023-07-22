<!DOCTYPE html>
<html>
<head>
  <title>Quản lý danh sách sách</title>
  <link rel="stylesheet" type="text/css" href="assets/style.css">
  <style>
    /* Thiết lập font chữ mặc định */
    body {
      font-family: Arial, sans-serif;
    }

    /* Định dạng cho danh sách sách */
    #bookList {
      margin: 20px;
      padding: 10px;
      border: 1px solid #ddd;
    }

    #bookList p {
      margin: 0;
      padding: 5px;
      border-bottom: 1px solid #ddd;
    }

    /* Nút sắp xếp */
    .sort-btn {
      margin: 10px;
      padding: 5px 10px;
      cursor: pointer;
      background-color: #007bff;
      color: #fff;
      border: none;
      border-radius: 5px;
    }

    /* Kiểu hover của nút sắp xếp */
    .sort-btn:hover {
      background-color: #0056b3;
    }

    /* Kiểu active của nút sắp xếp */
    .sort-btn:active {
      background-color: #003973;
    }
  </style>
</head>
<body>
  <?php include_once __DIR__ . '/controller/bookController.php'; ?>
  <?php include __DIR__ . '/view/bookList.php'; ?>
</body>
</html>
