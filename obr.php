

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
<br>
<br>
<center>
<div class="abcd" style=font-size:45px>Здесь Вы можете оформить обращение</div>
	  </center>
	  <form style="    text-align: -webkit-center;" action="processorder2.php" method=post>
	      <div class="tablecen">
	  <table border=0>
	  <td width=150> <span>Ваше Имя</span>
	  <td align=left><input type="text" name="name" size=60 maxlength=30 required>
	  <tr>
	  <td> email
	  <td align=left><input type="text" name="email" size=60 maxlength=20 required>
	  <tr>
	  <td> Обращение
	  <td align=left><p><textarea rows="10" cols="45" name="Text"></textarea></p>
	  <tr>
	      
      <td colspan=2 align=center><input style="padding:5px; height:50px; " input name=kuku type=submit value="Обратиться" >
     
	  </table>
	  </div>

<div class="abcd">Запиши Своего ребенка на тренировку сейчас! </div>
<br>
<div class="abcd">Сделай вклад в будущее Своего ребенка!</div>

	<input type="hidden" name="af_action" value="b4e71bbb1b9693f0e2e5e88216a88566">
	

</form>
 


</body>
</html>