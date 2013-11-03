<!doctype html>
<html lang="ru">
<head>
<meta charset="UTF-8">
<title>Письмо автору</title>

<link href="bootstrap/css/bootstrap.css" rel="stylesheet" media="screen">
<link href="bootstrap/css/bootstrap-theme.css" rel="stylesheet" media="screen">

<style>
	body {
		margin: 0;
		padding: 60px 0;

		background: url(img/full-bg.jpg) no-repeat center center fixed; 
		-webkit-background-size: cover;
		-moz-background-size: cover;
		-o-background-size: cover;
		background-size: cover;
	}
	div {
		width: 400px;
		background: #fff;
		margin: 100px auto;
		text-align: center;
		padding: 10px 20px 20px;
		-webkit-box-shadow: 0 2px 10px rgba(0,0,0,.3);
		-moz-box-shadow:    0 2px 10px rgba(0,0,0,.3);
		box-shadow:         0 2px 10px rgba(0,0,0,.3);

		border-radius: 6px;
	}
	a.btn {
		min-width: 100px;
	}
</style>
</head>

<body>

<?php

$to = "mtf.svt@gmail.com";
$email = $_REQUEST['email'];
$text = $_REQUEST['message'];

$subject = "Сайт рации. Письмо разработчику от ".$email;

$header = "Content-Type: text/html; charset=utf-8 \r\n";
$header	.= " From: <".$email.">\r\n\r\n";

	if (mail($to, '=?UTF-8?B?'.base64_encode($subject).'?=', $text, $header)) {
			print "
			<div>
				<h3>Спасибо за отзыв</h3>
				<p>В скором времени автор получит ваше письмо.</p>
				<p><a href='http://radio.task-force.ru' class='btn btn-default'>ОК</a></p>
			</div>
			";
	} else {
			print "
			<div>
				<h3>Кажется, что-то сломалось :(</h3>
				<p><a href='javascript:history.back();' class='btn btn-default'>Вернуться назад</a></p>
			</div>
			";
	}

?>

</body>

</html>