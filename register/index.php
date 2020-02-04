<?php session_start();

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">


<head>
	<meta http-equiv="content-type" content="text/html; charset=UTF-8" />
	

	<title>Неназванный 2</title>
</head>

<body>

<style>
body
{
    background:url("../bg.jpg") center center;
    background-size:cover;
    transition:1s;
    
    
}

.horror
{
    display:none;
    
    background:url("../horror.png");
    background-size:cover;
    width:200px;
    height:200px;
    margin:50px auto;
    z-index:1;
    margin-bottom:-250px;
    
}

#myform
{
    display:block;
    position:relative;
    width:570px;
    height:290px;
    margin: 16% auto;
    background:#fcfcfc;
    padding:30px 0px 0px 0px;
    box-shadow:0 25px 50px 5px rgba(0,0,0,0.6);
    border-radius:5px;
    z-index:999;
}


#myform .left
{
    display:block;
    width:320px;
    floaT:left;
    border-right:1px solid #e8e8e8;
}
#myform .off
{
    display:block;
    position:relative;
    top:15px;
    left:35px;
    width:150px;
    height:52px;
    floaT:left;
    background:#222;
    border:none;
    margin:10px;
    color:#fff;
    border-radius:4px;
    font:14px arial;
    transition:1s;
}

#myform .on
{
    display:block;
    position:relative;
    top:15px;
    left:35px;
    width:150px;
    height:52px;
    floaT:left;
    background:#a463c7;
    border:none;
    margin:10px;
    color:#fff;
    border-radius:4px;
    font:14px arial;
    transition:1s;
}

#myform .del
{
    display:block;
    position:relative;
    top:15px;
    left:35px;
    width:150px;
    height:52px;
    floaT:left;
    background:#4caf50;
    border:none;
    margin:10px;
    color:#fff;
    border-radius:4px;
    font:14px arial;
    transition:1s;
}


.input-login
{
    display:block;
    width:240px;
    height:45px;
    margin:14px auto;
    text-align:center;
    border-radius:5px;
    border:1px solid #999;
    color:#000;
    
}
#myform .off:hover, #myform .on:hover, #myform .del:hover
{
    cursor:pointer;
    opacity:0.8;    
    width:200px;
}



.button
{
    display:block;
    width:210px;
    height:55px;
    margin:30px auto 15px;
    background-color:#495bbf;
    border:0;
    font-size:14px;
    color:#fff;
    font-weight:700;
    border-radius:5px;
    box-shadow:0 7px 20px -7px #495bbf;
    transition:0.8s;
    cursor:pointer;
}

.button:hover
{
    background:#111;
    color:gold;
    box-shadow:0 7px 20px -4px #111;
    width:180px
}

.back
{
    display:block;
    text-align:center;
    color:#495bbf;
    text-decoration:none;
    
}

b
{
    display:block;
    text-align:center;
    font:18px arial;
}
</style>
<div class="horror"></div>
<div id="myform">
<form  action="reg.php" method="POST">
<div class="left">
<b>Регистрация на сайте</b>
<input class="input-login" type="text" name="lastname" autocomplete="off" placeholder="Введите логин" autofocus/>
<input class="input-login" type="text" name="password" autocomplete="off" placeholder="Введите пароль"/>
<input class="button" type="submit" value="Зарегистрироваться"/>
<a href="/" class="back">Назад</a>
</div>

</form>

<b>Выбор темы</b>
<form action="" method="POST">
<button type="submit" name="button1" class="off" >Horror тема</button>
<button type="submit" name="button2" class="on" >Стандартная тема</button>
<button type="submit" name="button3" class="del">Авто тема</button>
</form>

<?php

if(isset($_POST['button1']))
{
    $_SESSION['theme'] = '1';
    echo '
    <script>
    document.body.style.background = "url(../bg1.jpg)";
    
    </script>';
}
if(isset($_POST['button2']))
{
    $_SESSION['theme'] = '2';
    echo '
    <script>
    document.body.style.background = "url(../bg.jpg)"
    </script>';
}
if(isset($_POST['button3']))
{
    $_SESSION['theme'] = '3';
    echo '
    <script>
    document.body.style.background = "url(../bg2.jpg)"
    </script>';
}


?>


</div>






</body>
</html>