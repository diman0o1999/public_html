<?php
//Коннект к БД
$db_name = 'supporwv_pl';
$db_user = 'supporwv_pl';
$db_pass = 'prrrrrr';
$db_loc = 'localhost';
//Подключение БД
$db = @mysql_connect($db_loc,$db_user,$db_pass);
mysql_query ("set character_set_client='utf8'");
mysql_query ("set character_set_results='utf8'");
mysql_query ("set collation_connection='utf8_bin'");
//Проверка подключения
if(!@mysql_select_db($db_name,$db))
{
    echo( 'База данных '.$db_name.' недоступна!');
}

$link = mysqli_connect($db_loc, $db_user, $db_pass, $db_name)
or die("Ошибка " . mysqli_error($link));



?>