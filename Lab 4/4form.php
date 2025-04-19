<?php
session_start();
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $_SESSION['last_name'] = $_POST['last_name'];
    $_SESSION['first_name'] = $_POST['first_name'];
    $_SESSION['age'] = $_POST['age'];
    header('Location: display.php');
    exit();
}
?>
<form method="post">
    <input type="text" name="last_name" placeholder="Фамилия">
    <input type="text" name="first_name" placeholder="Имя">
    <input type="number" name="age" placeholder="Возраст">
    <button type="submit">Сохранить</button>
</form>