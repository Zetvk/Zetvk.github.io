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

// Запрос к базе данных для получения всех строк из таблицы items
$sql = "SELECT * FROM items";
$result = $conn->query($sql);

// Закрытие подключения к базе данных
$conn->close();
?>