<?php
    $name = $_POST['user_name'];
    $email = $_POST['user_email'];
    $text = $_POST['user_message'];

	$to = "mail@td-regent.ru";
	$date = date ("d.m.Y");
	$time = date ("h:i");
	$from = "13.spb@mail.ru";
	$subject = "Заявка c сайта";


	$msg="
    Имя: $name /n
    Почта: $email /n
    Текст: $text";
	mail($to, $subject, $msg, "From: $to ");

?>

<p style="color:white;font-size:24px;">Форма отправлена. Спасибо!</p>
