
 <?php 
 
 $name = $_REQUEST['name'];
 $email = $_REQUEST['email'];
 $Text = $_REQUEST['Text'];// берем переменные из формы 


 define('TIREPRICE', 100);
 define('OILPRICE', 10);
 define('SPARKPRICE', 4);


 require_once 'connect.php'; // подключаем скрипт
 
// подключаемся к серверу
$handle = mysqli_connect($host, $user, $password, $database) ;
    
 $query = "INSERT INTO soob (name,email,Text)
 VALUES ('$name','$email','$Text')";
 $result = $handle->query($query); // Выполняем запрос к бд 
 if ($result) echo "Данные сохранены, ответ придёт на ваш почтовый адрес";
 if (!$result) echo "Ошибка сохранения данных, данный идентификационный номер уже существует, введите другой";
 echo "<p><a href='register.php'>На главную</a>";

 ?>