<?php
require_once 'connect.php'; // подключаем скрипт
// подключаемся к серверу
$handle = mysqli_connect($host, $user, $password, $database) ;

if(isset($_POST['id']))
 {
 $delete1 = $_POST['id'];
 

 $query = "DELETE FROM mytable WHERE id=$delete1";
 $result = $handle->query($query);
 if ($result) echo "Данные удалены";
 if (!$result) echo "Ошибка удаления данных";
 echo "<p><a href='Admin.php'>Назад</a>";
}
 ?>
