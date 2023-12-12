<?php
// Подключение к БД
$servername = "localhost"; // адрес сервера MySQL
$username = "root"; // имя пользователя MySQL
$password = "Daedalus5150!"; // пароль пользователя MySQL
$dbname = "site_db"; // имя базы данных MySQL
$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
  die("Ошибка подключения: " . mysqli_connect_error());
}

// Проверка, была ли нажата кнопка отправки формы
if (isset($_POST["submit"])) {
  // Получение данных из формы
  $mail = $_POST["mail"]; // поле mail
  $name = $_POST["name"]; // поле name
  $phone = $_POST["phone"]; // поле phone
  $address = $_POST["address"]; // поле address
  $sql = "INSERT INTO `customers` (mail, name, phone, address) VALUES ('$mail','$name','$phone','$address')";
  if (mysqli_query($conn, $sql)) {
    echo "Данные успешно сохранены!";
  } else {
    echo "Error: " . $sql . ":-" . mysqli_error($conn);
  }
}

// Закрытие подключения к БД
mysqli_close($conn);
?>