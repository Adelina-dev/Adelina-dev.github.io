<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>Вкусные суши</title>
    <link rel="stylesheet" href="style.css" type="text/css" />
</head>
<body>
<div id="basic">
    <div id="head-site">
        <p>  <img src="image/logo.png" class="num"/></p>
        <img src="image/phone.png" class="telefon"/> <input type="checkbox" id="mail"/><label for="mail">заказать звонок</label>
        <img src="image/time.png"  class="time"/>
        <span>10:00 до 23:00</span>
        </p>
        <div id="popup">
            <form method="post" action="mail.php">
                <label for="mail" title="Отменить">✕</label>
                <div data-title="Например, Мария Петровна">Ваше имя: <input type='text' name='name' required /></div>
                <div data-title="Например, 89270000000">Моб. телефон: <input type="tel" name='tel' required maxlength="11" value='8' pattern="8\d{10}"/></div>
                <input type='submit' value='Заказать'/>
            </form></div>
        <p>
            <span>8 (351) 457-80-90</span>


            <img src="image/coor.png"  class="coor"/>
            <span> Челябинск</span>
        </p>

        <P>
            <img src="image/ss.png" class="ss"/>
        </p>
    </div>
</div>
<div id="menu-top">
    <div class="bg-1">
        <ul>
            <li><a href="onas.html">О нас</a></li>
            <li><a href="menu.html">Меню</a></li>
            <li><a href="akcii.html">Подарки и скидки</a></li>
            <li><a href="otz.php">Отзывы</a></li>
            <li><a href="histor.html">Интересное</a></li>
            <li class="none-bg"><a href="kont.html">Контакты</a></li>
        </ul>
    </div>
    <div class="bg-2"></div>
</div>
<div>
    <img src="image/reddown.png" class="reddown"/>
</div>
<?
if($_GET['c'] == ''){

    print "
 
<form style=padding-left:216px>
    <input type='hidden' name='c' value='obr' />
    <b>Имя:</b> <input type='text' name='name' value='' /><br>
    <b>Отзыв:</b><br>
  <textarea name='content'cols='40' rows='10'></textarea>
   <input type='submit' value='Оставить свой отзыв' />
</form>
";


    $fp = fopen("comment.txt", "r"); // Открываем файл в режиме чтения
    if ($fp)
    {
        while (!feof($fp))
        {
            $mytext = fgets($fp, 999);
            echo $mytext."<br />";
        }
    }
    else echo "Ошибка при открытии файла";
    fclose($fp);


}elseif($_GET['c'] == 'obr'){
    // заносим в массив значение полей
    $znach = array(
        1 => $_GET['name'],
        3 => $_GET['content'],
        4 => date('m.d.Y H:i'),
    );

    if( !$znach[1] ){ print "Поле <b>Имя</b>, незаполненно <br> <meta http-equiv='Refresh' content='4; url=javascript:history.go(-1);' ><a href='javascript:history.go(-1);'><<<Назад</a> <br>"; }else
        if( !$znach[3] ){ print "Поле <b>Отзыв</b>, незаполненно <br> <meta http-equiv='Refresh' content='4; url=javascript:history.go(-1);' ><a href='javascript:history.go(-1);'><<<Назад</a> <br>"; }else{


            $fp = fopen("comment.txt", "a+"); // Открываем файл в режиме записи
            $mytext = "\r\n" . "Имя: ". $znach[1] . "\r\n" . "Отзыв: ". $znach[3] . "\r\n"; // Исходная строка
            $test = fwrite($fp, $mytext); // Запись в файл
            if ($test) echo 'Данные в файл успешно занесены.';
            else echo 'Ошибка при записи в файл.';
            fclose($fp); //Закрытие файла


            print "<meta http-equiv='Refresh' content='0; url=?c=' >";
        }
}

?>
<div class="footer_main" height="100%";>
    <img src="image/redup.png" class="upred" >
    <div class="nav">
        <div class="size_block">
            <div class="blinks">
                <a class="block" href="akcii.html">Акции</a>
                <a class="block" href="akcii.html">Бонусы</a>
                <a class="block" href="new.html">Новинки</a>
            </div>
        </div>
    </div>
    <div class="nav">
        <div class="size_block">
            <div class="links">
                <a class="block" href="index.html">Новости</a>
                <a class="block" href="vakan.html">Вакансии</a>
                <a class="block" href="command.html">Наша команда</a>
            </div>
        </div>
    </div>
    <div class="nav">
        <div class="size_block">
            <div class="links">
                <a class="block">8 (351) 457-80-90 </a>
                <a class="block">sushi.shop@mail.ru</a>
                <a class="block" href="https://goo.gl/maps/2yu6unm1EX7w7DNEA">наше местоположение</a>
            </div>
        </div>
    </div>
</div>
</div>

<script src="main.js"></script>


</body>
</html>