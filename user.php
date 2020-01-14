<?php
session_start();
$er = $_SESSION['peredacha'];
$er2 = $_SESSION['username2'];
$er3 = $_SESSION['email2'];
?>

<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Детская футбольная школа "Киндер"</title>
    <link href="style.css" rel="stylesheet">
<style>
    .tablecen {background-color:white;
            width: max-content;
            padding:50px;
            margin:50px;
            font-family: arial;
            line-height: 4;
    }
    td {padding:10px;}
    input {padding:10px; height:20px; font: 15px Arial;}
    
    
    
</style>
</head>
<body>
    
   <nav class="top-menu">
  <ul class="menu-main">
    <li class="left-item"><a href="index.php">Главная</a></li>
    <li class="left-item"><a href="trener.php">Тренеры</a></li>
    <li class="right-item"><a href="kont.php">Контакты</a></li>
    <li class="right-item"><a href="otziv.php">Отзывы</a></li>
    <li class="right-item"><a href="futb.php">Вопросы</a></li>
    
    <li class="left-item">
        <div class="dropdown">
  <a href="">Записаться</a>
  <div class="dropdown-child">
    <a href="register.php">Регистрация</a>
    <a href="login.php">Авторизация</a>
    <a href="zapis.php">Перезвонить</a>
    <a href="obr.php">Обратная связь</a>
  </div>
</div>
</li>
</ul>
  <a class="navbar-logo" style="font-size:50px;font-family: 'Arimo', sans-serif;color:white;">Киндер</a>
</nav>


<style>



    
.dropdown {
    position: relative;
    display: inline-block;
}
.dropdown-child {
    padding-top: 20px;
    display: none;
    background-color: black;
    box-sizing:border-box;
    position:fixed;
    z-index:999;
    
}
.dropdown-child a {
    color: white;
    text-decoration: none;
    display: block;
    border: 1px solid white;
}
.dropdown:hover .dropdown-child {
    display: block;
}
</style>
<center>
<div class="abcd">
      Это Ваша личная страничка
      
 </center>

<?php 



 define('TIREPRICE', 100);
 define('OILPRICE', 10);
 define('SPARKPRICE', 4);


 require_once 'connect.php'; // подключаем скрипт
 

echo '<div class="abcd">';
echo 'id: '.$er;
echo '<br>Логин: '.$er2;
echo '<br>Почта: '.$er3;
echo '</div>';

// подключаемся к серверу
$handle = mysqli_connect($host, $user, $password, $database) ;

$query = "SELECT * FROM 'usertbl' WHERE id = $er";
 $result = $handle->query($query); // Выполняем запрос к бд 

$row = mysqli_fetch_assoc($result);






?> 
</div>
</body>
</html>
