<?php

include ('db.php');

$carid = $_GET[carid]; // Принимаем carid авто которое нужно удалить
$sql = mysqli_query($link, "DELETE FROM cars WHERE id='$carid'"); // Удаляем из таблицы CARS
header("Location: {$_SERVER['HTTP_REFERER']}"); // Редирект назад
exit;
?>