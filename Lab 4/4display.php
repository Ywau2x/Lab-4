<?php
session_start();
if (isset($_SESSION['first_name'])) {
    echo "Имя: {$_SESSION['first_name']}<br>";
    echo "Фамилия: {$_SESSION['last_name']}<br>";
    echo "Возраст: {$_SESSION['age']}";
} else {
    echo "Данные не найдены.";
}
?>