<?php
// Параметры подключения к базе данных
$servername = "localhost"; // адрес сервера MySQL
$username = "root"; // имя пользователя MySQL
$password = "Daedalus5150!"; // пароль пользователя MySQL
$dbname = "site_db"; // имя базы данных MySQL

// Создание подключения к базе данных с помощью объекта mysqli
$conn = new mysqli($servername, $username, $password, $dbname);

// Проверка успешности подключения
if ($conn->connect_error) {
  die("Ошибка подключения: " . $conn->connect_error);
}

// Проверка, была ли нажата кнопка отправки формы
if (isset($_POST["submit"])) {
  // Получение данных из формы
  $mail = $_POST["mail"]; // поле mail
  $name = $_POST["name"]; // поле name
  $phone = $_POST["phone"]; // поле phone
  $address = $_POST["address"]; // поле address
  // Запрос к базе данных для вставки данных из формы в таблицу customers
  $sql = "INSERT INTO `customers` (mail, name, phone, address) VALUES ('$mail','$name','$phone','$address')";
  if (mysqli_query($conn, $sql)) {
    echo "Данные успешно сохранены!";
  } else {
    echo "Error: " . $sql . ":-" . mysqli_error($conn);
  }
}

// Запрос к таблице items
$sql = "SELECT * FROM items";
// Выполнение запроса и получение результата
$result = $conn->query($sql);
// Начало HTML-кода
echo "<div class='row justify-content-center mt-4'>";
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
// Конец HTML-кода
echo "</div>";
// Закрытие подключения к БД
mysqli_close($conn);
?>






