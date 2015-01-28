<?php header('Content-type: text/html; charset=utf-8')?>
<?
$name = $_POST["name"];
$email = $_POST["email"];
$phone = $_POST["phone"];
$link = $_POST["link"];
$pocket = $_POST["pocket"];
$MailTo = "william@linc.company"; 


	if(mail($MailTo, "Новый заказ", "Имя Фамилия: $name \r\n Ссылка на vk: $link \r\n Телефон: $phone", "From: $email\r\nCc: $MailCC")){
		header("Location: ../home.html");
	} else{
		echo "Ошибка отправления заявки, свяжитесь с администрацией.";
	}


?>