<?php session_start(); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">


<head>
	<meta http-equiv="content-type" content="text/html; charset=UTF-8" />
	<link href="style.css" rel="stylesheet" type="text/css" />

	<title>BookAuto - дневник автомобилиста</title>
</head>

<body>


<?php
require_once ('top-menu.php');
?>
<header>

<h1>Сервис для создания онлайн дневника по техническому обслуживанию автомобиля</h1>
<p>
Наш сервис помогает вести учет расхода топлива, расхода денежных средств на техническое обслуживание и ремонт автомобиля за весь период владения им. 
Узнайте сколько Вы потратили денег на содержание Вашего автомобиля. При продаже автомобиля Вы сможете показать Ваш дневник в доказательство своевременного обслуживания.
</p>

<div class="button-block">
<a href="lib/login.php" class="log-button">Войти в дневник</a>
<a href="" class="reg-button">Завести дневник</a>
</div>


</header>




</body>
</html>