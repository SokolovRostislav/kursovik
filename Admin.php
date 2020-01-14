<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Детская футбольная школа "Киндер"</title>
    <link href="style.css" rel="stylesheet">


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
td {height: auto;}
</style>




</body>
</html>
<div class="abcd">
      Обращения от пользователей на перезвонить!
      </div>
<div class="abcd">
<?php 

$name = $_REQUEST['name'];
 $age = $_REQUEST['age'];
 $text = $_REQUEST['text'];// берем переменные из формы 


 define('TIREPRICE', 100);
 define('OILPRICE', 10);
 define('SPARKPRICE', 4);


 require_once 'connect.php'; // подключаем скрипт
 
// подключаемся к серверу
$handle = mysqli_connect($host, $user, $password, $database) ;
    
$query = "SELECT * FROM mytable";
 $result = $handle->query($query);
 $numresult=$result->num_rows; 
 
 echo '<table border=1 width="20%">';
 echo '<th>Имя</th>';
 echo '<th>Возраст ребенка</th>';
 echo '<th>Номер телефона </th>';
 echo '<th>Комментарий</th>';
 echo '<th>Сохранение</th>';
 echo '<th>Удаление</th>';
  echo '</form>';
  
 for ($i=0;$i<$numresult;$i++)  //Заполнение таблицы
 {
 $row=$result->fetch_assoc();
 echo "<form action=Admin.php  id='".$i;echo"' method=post><input type=hidden name=save value='".$row['id'];echo"'></input>";
 echo '<tr><td>'.$row['name'];
 echo '</td><td>'.$row['age'];
 echo '</td><td>'.$row['text'];
 echo '</td><td><input type="text" name="kom" value="'.$row['kom'];echo'">';
 echo '</td><td><input type="submit" value="Cохранить" ></td>';
  echo '</form>';
 echo '<form action="delorder.php" method="post">';
 echo '</td><td><input type="hidden" name="id" value="'.$row['id'].'">';
 echo '<input type="submit" value="Удалить">';
 echo '</form>';
 }
 echo '</table>';
?>


  
  <div class="abcd">
      Обращения от пользователей на сообщение
      </div>
      <?php
     $query = "SELECT * FROM soob";
 $result = $handle->query($query);
 $numresult=$result->num_rows; 
 
 echo '<table border=1>';
 echo '<th>Имя</th>';
 echo '<th>email</th>';
 echo '<th>Текст обращения </th>';
 echo '<th>Статус ответа  </th>';
 echo '<th>Сохранение  </th>';
 
 for ($i=0;$i<$numresult;$i++)  //Заполнение таблицы
 {
 $row=$result->fetch_assoc();
  echo "<form action=Admin.php  id='".$i;echo"' method=post><input type=hidden name=save1 value='".$row['id'];echo"'></input>";
 echo '<tr><td>'.$row['name'];
 echo '</td><td>'.$row['email'];
 echo '</td ><td>'.$row['Text'];
 echo '</td><td><input type="text" name="Stat" value="'.$row['Stat'];echo'">';
 echo '</td><td><input type="submit" value="Cохранить" ></td>';
echo '</form>';
 
 }
 echo '</table>';
?>

<?php
   if(isset($_POST['save']))
{
    $id = $_POST['save'];

    $komm = $_POST['kom'];
 $query = "UPDATE mytable SET kom = '$komm' WHERE id='$id'";
 $result = $handle->query($query);


}
?>

<?php
   if(isset($_POST['save1']))
{

    $komm1 = $_POST['Stat'];
 $query = "UPDATE soob SET Stat = '$komm1' WHERE id='$id1'";
 $result = $handle->query($query);


}
?>
</div>