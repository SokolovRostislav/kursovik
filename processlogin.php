
 <?php 
 
 $name = $_REQUEST['name'];
 $password2 = $_REQUEST['password'];// берем переменные из формы 
 require_once 'connect.php'; // подключаем скрипт
 
// подключаемся к серверу
$handle = mysqli_connect($host, $user, $password, $database) ;
   $query = "SELECT * FROM usertbl WHERE username = '$name' and password = '$password2' ";
 $result = $handle->query($query); // Выполняем запрос к бд 

$row = mysqli_fetch_assoc($result);



// файл 1.php
session_start();
$_SESSION['peredacha'] = $row['id'];
$_SESSION['username2'] = $row['username'];
$_SESSION['email2'] = $row['email'];

switch($row['rolle']){
    case "admin":
       echo"<script type='text/javascript'>location.replace('http://b910925u.beget.tech/syte/Admin.php')</script>";

    case "":
      echo"<script type='text/javascript'>location.replace('http://b910925u.beget.tech/syte/user.php')</script>";
          if (!$result) echo "Ошибка, такого пользователя нет";
    echo "<p><a href='index.php'>На главную</a>";
   
}

 ?>

