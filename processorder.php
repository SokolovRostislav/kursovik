
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
    
 $query = "INSERT INTO mytable (name,age,text)
 VALUES ('$name','$age','$text')";
 $result = $handle->query($query); // Выполняем запрос к бд 
 if ($result) echo "Данные сохранены";
 if (!$result) echo "Ошибка сохранения данных, данный идентификационный номер уже существует, введите другой";
 echo "<p><a href='index.php'>На главную</a>";
 
 ?>
