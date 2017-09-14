<?php

$host="localhost";
$user="user_bd";
$pass="vskfvfvf"; //установленный вами пароль
$db_name="my_bd";
$link=mysql_connect($host,$user,$pass);
mysql_select_db($db_name,$link);



//Если переменная Name передана
if (isset($_POST["Name"])) {
    //Вставляем данные, подставляя их в запрос
    $sql = mysql_query("INSERT INTO `products` (`Name`, `Price`)
                        VALUES ('".$_POST['Name']."','".$_POST['Price']."')");
    //Если вставка прошла успешно
    if ($sql) {
        echo "<p>Данные успешно добавлены в таблицу.</p>";
    } else {
        echo "<p>Произошла ошибка.</p>";
    }
}

	?>
  <?php
      $host="localhost";
      $user="user_bd";
      $pass="vskfvfvf"; //установленный вами пароль
      $db_name="my_bd";
      $link=mysql_connect($host,$user,$pass);
      mysql_select_db($db_name,$link);
  ?>

  <?php
//Если переменная Name передана
if (isset($_POST["Name"])) {
    //Вставляем данные, подставляя их в запрос
    $sql = mysql_query("INSERT INTO `forma` (`street`, `house`, `podjezd`,`code`, `flour`,'room',`corps`, `comment`)
                        VALUES ('".$_POST['srteet']."','".$_POST['house']."','".$_POST['podjezd']."','".$_POST['code']."',
                        '".$_POST['flour']."','".$_POST['room']."','".$_POST['corps']."','".$_POST['comment']."',)");
    //Если вставка прошла успешно
    if ($sql) {
        echo "<p>Данные успешно добавлены в таблицу.</p>";
    } else {
        echo "<p>Произошла ошибка.</p>";
    }
}
?>
