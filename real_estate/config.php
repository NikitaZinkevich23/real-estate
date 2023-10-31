<?php
$servername = "localhost"; 
$username = "root";
$password = "";
$dbname = "real_estate_db";

// Подключение к базе данных
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Проверка, успешно ли подключились к базе данных
if (!$conn) {
    die("Ошибка подключения к базе данных: " . mysqli_connect_error());
}
?>