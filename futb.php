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
    <a href="registr.php">Регистрация</a>
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
<div class="abcd" style= style=font-size:45px>Здесь Вы можете найти ответы на интересующие Вас вопросы!</div>
</center>
<br>

<div class="demo">
    <input type="checkbox" id="hd-1" class="hide"/>
    <label for="hd-1" ><b>Как и где проходят тренировки?</b></label>
    <div>
       Мы занимаемся в Политехническом колледже в спортивном зале. У нас есть все, что нужно для тренировок: просторные мини-футбольные залы, удобные раздевалки, душевые, а также необходимый спортивный инвентарь: мячи, манишки, конусы и др. Любая тренировка начинается с разминки, поэтому мы рекомендуем прийти за 10-15 минут до начала тренировки, чтобы ребёнок мог переодеть форму и в спокойной обстановке подготовиться к началу занятия.
    </div>
    <br/>
    <br/>
    <input type="checkbox" id="hd-2" class="hide abcd" />
    <label for="hd-2"><b>Обучаете ли девочек?</b></label>
    <div>
    Да, девочек мы также записываем. Приходите на пробное занятие.
    </div>
    <br/>
    <br/>
    <input type="checkbox" id="hd-3" class="hide"/>
    <label for="hd-3" ><b>Можно ли родителям присутствовать на тренировках?</b></label>
    <div>
Родители могут присутствовать на тренировках, где можно увидеть достижения ребёнка, новые освоенные приёмы и, конечно, поболеть за ребёнка и его команду во время товарищеского матча.
</div>
    <br/>
    <br/>
    <input type="checkbox" id="hd-4" class="hide"/>
    <label for="hd-4"><b>Выдаётся ли форма?</b></label>
    <div>
      Да, форма выдается, по достижению и количеству посещений
    </div>

<br/>
    <br/>
    <input type="checkbox" id="hd-5" class="hide"/>
    <label for="hd-5"><b>Можно ли заморозить абонемент, если ребёнок заболел?</b></label>
    <div>
      Да, конечно же! Ваш абонемент перенесётся на другое занятие.А также, возможна оплата по одному занятию
    </div>

<br/>
    <br/>
    <input type="checkbox" id="hd-6" class="hide"/>
    <label for="hd-6"><b>Можно ли записать в Киндер ребёнка младше 5 лет?</b></label>
    <div>
У нас занимаются дети и младше 5 лет. Приводите ребёнка на пробное занятие, по его итогам тренер даст рекомендации.
</div>
<br/>
    <br/>
    <input type="checkbox" id="hd-7" class="hide"/>
    <label for="hd-7"><b>Присутствует ли система поощрений?</b></label>
    <div>
Да, в нашей школе присутствует система поощрения, после каждой тренировке Ваш ребёнок получает медаль. В дальнейшем, по накоплению медалей их можно обменять на кубки. Конечным итогом будет именная форма от Детской футбольной школы "Киндер"!
    </div>
    
    <br/>
    <br/>
    <input type="checkbox" id="hd-8" class="hide"/>
    <label for="hd-8"><b>Как к Вам попасть?</b></label>
    <div>
      <p><a href="zapis.php">Оставьте Ваши данные, и мы Вас запишем!</a></p>
    </div>
    <br><br><br>
    
  <p class="abcd" style=font-size:30px> Если у Вас имеется другой вопрос, то Вы можете связаться с нами!   <a href="zapis.php">Связаться</p>


</body>
</html>