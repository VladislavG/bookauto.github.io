<?php session_start();

$login = $_POST[login];
$password = $_POST[pass];

if(!empty($login) && !empty($password)) //Проверяем существуют ли логин и пароль
{
    
    if($_POST[login] == 'vlad' && $_POST[pass] == '123456') //Если логин и пароль найдены в БД устанавливаем сессию
    {
        $_SESSION['auth'] = 1; //Устанавливаем сессию
        header("Location: /mynotes.php");
    }
    else
    {
    $_SESSION['error'] = 1; //Если логин и пароль не найдены устанавливаем флаг ошибки и возвращаем на страницу авторизации
    header("Location: {$_SERVER['HTTP_REFERER']}");
    }
}

else // Если переменных с логином и паролен не существует устанавливаем флаг ошибки и возвращаем на страницу авторизации
    {
    $_SESSION['error'] = 1;
    header("Location: {$_SERVER['HTTP_REFERER']}");
    }

?>