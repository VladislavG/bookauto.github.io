<?php session_start();



$name = $_POST['lastname'];
$pass = $_POST['password'];


if (!mysqli_connect(localhost, root)) 
{
echo "Ошибка подключения к серверу MySQL";
exit;
}
$db = mysqli_connect(localhost, root);
$base = mysqli_select_db($db, test);


$sql = mysqli_query($db, "INSERT INTO `user` (`name`, `pass`) VALUES ('$name', '$pass')");
      
if($sql)
{
    echo "Запись добавлена";
    echo '<meta http-equiv="refresh" content="3; url=/">';
}
else
{
    echo "Ошибка записи";
}



?>