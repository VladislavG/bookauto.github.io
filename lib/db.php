<?php

// Подключение к базе данных
$link = mysqli_connect("localhost", "root", "", "carnotes");

$users = mysqli_query($link, "SELECT * FROM users WHERE name='Денис'");
$row_user = mysqli_fetch_assoc($users);

$cars = mysqli_query($link, "SELECT * FROM cars WHERE carid='$row_user[id]'");
$row_car = mysqli_fetch_assoc($cars);







?>