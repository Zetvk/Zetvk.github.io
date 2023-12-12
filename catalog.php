<?php
include 'script.php';
?>
<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/style.css" type="text/css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet"> 
    <title>Каталог магазина</title>
    <link type="Image/x-icon" href="./assets/images/favicon.ico" rel="icon">
</head>
<body>
<header class="header">
        <div class="container-fluid">
            <nav class="navbar-expand-lg">
                <a class="nav-link" href="index.html">
                    <img src="assets/images/book-logo.jpg" style="width: 75px; height: 65px;" alt="logo">
                </a>
                <a class="nav-link" href="catalog.php"> Каталог </a>
                <a class="nav-link" href="order.php"> Корзина </a>
            </nav>
        </div>
    </header>
    <div class="center">
<form>
  <a class="search-input">
  <input type="text" id="search-input" placeholder="Поиск по названию книги...">
  </a>
</form>
</div>
</header>
    <div class="container">
    <div class="row justify-content-center mt-4">
    <?php
// Цикл по результату запроса к базе данных
foreach ($result as $row) {
  // Вывод данных о каждом элементе в HTML-формате
  echo "<div class='col-sm-4'>";
  echo "<div class='card m-4'>";
  echo "<img src='" . $row["image"] . "' class='card-img-top' alt='" . $row["title"] . "'>";
  echo "<div class='card-body'>";
  echo "<h5 class='card-title'>" . $row["title"] . "</h5>";
  echo "<p class='card-text'>" . $row["description"] . "</p>";
  echo "<p class='card-text'>" . $row["price"] . " ₽</p>";
  echo "<a href='#' class='btnc'>В корзину</a>";
  echo "</div>";
  echo "</div>";
  echo "</div>";
}
?>
</div>
      </div>
    <footer class="footer">
        <div class="container-fluid">
            <div class="row" style="align-items: center;">
                <div class="col">
                    <p class="footer-info">2023 Демонстрационный сайт <br> студента УлГУ группы <br> ИС-О-20/1 Половникова Дмитрия</p>
                </div>
                <div class="col" style="text-align: end;">
                    <img src="assets/images/book-logo.jpg" style="width: 10%; height: 10%;" alt="logo">
                </div>
            </div>
        </div>
    </footer>
    <script src="script2.js"></script>
</body>



