<?php
session_start();
$carid = $_POST[id];
$brend = $_POST[brend];
$model = $_POST[model];
$year = $_POST[year];
$km = $_POST[km];
$km0 = $_POST[km0];

if(!empty($carid) && !empty($brend) && !empty($model))
{
require_once ('db.php');
$sql = mysqli_query($link, "INSERT INTO `cars` (`id`, `carid`, `brend`, `model`, `year`, `km`, `km0` ) VALUES (NULL, '$carid', '$brend', '$model', '$year', '$km', '$km0')");
header("Location: {$_SERVER['HTTP_REFERER']}");
}

else
{
$_SESSION['error'] = '1';
header("Location: {$_SERVER['HTTP_REFERER']}");
}


?>