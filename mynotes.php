<?php session_start(); ?>
<?php
require_once ('lib/db.php');

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
	<meta http-equiv="content-type" content="text/html; charset=iso-8859-1" />
    <link href="style.css" rel="stylesheet" type="text/css" />
    <link href="style-profile.css" rel="stylesheet" type="text/css" />
	<title>Дневник - <?php echo $row_user[name] .' '.$row_user[surname];?></title>
</head>

<body>

<?php

if ($_SESSION['auth'] == 1)
{

?>


<?php

require_once ('top-menu.php');

?>



<div class="content">


<div class="profile-block">
<?php echo '<a href="lib/exit.php" class="exit-link">Выйти</a>'; ?>
<span class="title">Здравствуйте <?php echo $row_user[surname] .' '. $row_user[name];?>!</span><br />

<li>Вы зарегистрированы у нас с <?php echo $row_user[regdate];?> года </li>


</div>


<div class="car-block">

<?php

if($_SESSION['error'] == 1)
{
    echo "<script> alert('Ошибка добавления! Проверьте все ли поля были заполнены.') </script>";
    $_SESSION['error'] = 0;
}

echo '<span class="title">Ваш гараж</span>';

$cars = mysqli_query($link, "SELECT * FROM cars WHERE carid='$row_user[id]'"); //  Выборка из ДБ авто с carid = id клиента

$i = mysqli_num_rows($cars); // Подсчёт количетва автомобилей в гараже

if($i !== 0) // Если в гараже больше 0 автомобилей выводим данные
{
$_SESSION['error'] = 0;
while($row_car= mysqli_fetch_assoc($cars)) // Цикл вывода автомобилей в гараже
{
    $year = date("Y"); // Текущий год
    $actual = $year - $row_car[year]; // Вычисление возраста автомобиля
    echo '<br>';
    $carid = $row_car[id];
    echo 'Ваш автомобиль: <b>' .$row_car[brend] .' ' .$row_car[model] .' </b><a href="lib/del_car.php?carid='.$carid.'" class="del-auto">Удалить</a><br>';
    echo 'Год выпуска: <b>'.$row_car[year] .' год </b><br>'; 
    echo 'Вашему автомобилю: <b>'.$actual .' лет </b></br>';
    echo 'Пробег сейчас: <b>'.$row_car[km] .' км. </b><br>';
    echo 'Пробег при покупке: <b>'.$row_car[km0] .' км. </b><br>';
    echo 'Вы проехали: <b>'.($row_car[km] - $row_car[km0]) .' км. </b><br>';
    echo 'Расходы на топливо: <b>'.($row_car[km] - $row_car[km0])/ 100 * 450 .' рублей </b> (при 45 руб./л. и расходе 10 л./100 км.)<br>';
}
}

    if($i == 0) // Если в гараже 0 автомобилей предлагаем добавить
    {
    echo  
    '<img src="addcar.png" class="add-car"/>
    ';
    
    }
    echo'<br>
    <form action="lib/add_car.php" method="POST">
    <input type="hidden" name="id" value="'.$row_user[id].'">
    <input type="text" name="brend" class="input" placeholder="Марка автомобиля">
    <input type="text" name="model" class="input" placeholder="Модель">
    <input type="number" min="1990" name="year" class="input" placeholder="Год выпуска">
    <input type="number" min="0" name="km" class="input" placeholder="Пробег сейчас">
    <input type="number" min="0" name="km0" class="input" placeholder="Пробег при покупке">
    <input type="submit" class="button" value="Добавить">
    ';
    
?>



</div>
</div>

<? 

} 





?>








</body>
</html>


<?php



?>