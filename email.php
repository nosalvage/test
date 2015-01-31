
<?php

$name = $_POST["name"];
$email = $_POST["email"];
$phone = $_POST["phone"];
$link = $_POST["link"];
$pocket = $_POST["pocket"];
$MailTo = "linc.order@gmail.com"; 


	if(mail ($MailTo,
      "Новый заказ (от: $name)",
      " Имя: $name \n Ссылка vk: $link \n Телефон: $phone \n Email: $email",
      "Content-type:text/plain; charset=utf-8")){
		header("Location: ../index.php");
	} else{
		echo "Ошибка отправления заявки, свяжитесь с нами 87079525955";
	}


?>