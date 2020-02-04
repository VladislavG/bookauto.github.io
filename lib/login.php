<?php session_start(); 

if(!empty($_SESSION['auth'])) //Если сессия уже установлена, редирект на страницу профля иначе показываем форму авторизации
{
header("Location: /mynotes.php");
exit;
}

if($_SESSION['error'] == 1) //Если сессии error присвоена 1, выдаём ошибку
{
echo "<script>setTimeout(error, 500); function error() {alert('Ошибка Авторизации! Логин и пароль не найдены.');} </script>";
$_SESSION['error'] = 0; //Обнуляем флаг ошибки
}

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<head>
	<meta http-equiv="content-type" content="text/html; charset=UTF-8" />
	<link href="../style.css" rel="stylesheet" type="text/css" />

	<title>BookAuto - дневник автомобилиста</title>
</head>

<body>


<?php
require_once ('../top-menu.php');
?>
<div class="login-form">
<span class="title">Авторизация</span>
<form action="auth.php" method="POST">
<input type="text" name="login" placeholder="Ваш логин" class="input-log"/>
<input type="text" name="pass" placeholder="Ваш пароль" class="input-log"/>
<input type="submit" class="button-log" value="Войти"/>
</form>
</div>


</body>
</html>