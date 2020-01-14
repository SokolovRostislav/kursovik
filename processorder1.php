
 <?php 
 
 $username = $_REQUEST['username'];
 $email = $_REQUEST['email'];
 $password2 = $_REQUEST['password'];// берем переменные из формы 


 define('TIREPRICE', 100);
 define('OILPRICE', 10);
 define('SPARKPRICE', 4);


 require_once 'connect.php'; // подключаем скрипт
 
// подключаемся к серверу
$handle = mysqli_connect($host, $user, $password, $database) ;
    
 $query = "INSERT INTO usertbl (username,email,password)
 VALUES ('$username','$email','$password2')";
 $result = $handle->query($query); // Выполняем запрос к бд 
 if ($result) echo "Данные сохранены";
 if (!$result) echo "Ошибка сохранения данных, данный идентификационный номер уже существует, введите другой";
 echo "<p><a href='register.php'>На главную</a>";

 ?>
