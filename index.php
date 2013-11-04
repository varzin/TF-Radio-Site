<?php

# This file passes the content of the Readme.md file in the same directory
# through the Markdown filter. You can adapt this sample code in any way
# you like.

# Install PSR-0-compatible class autoloader
spl_autoload_register(function($class){
	require preg_replace('{\\\\|_(?!.*\\\\)}', DIRECTORY_SEPARATOR, ltrim($class, '\\')).'.php';
});

# Get Markdown class
use \Michelf\MarkdownExtra;

# Read file and pass content through the Markdown praser
$text = file_get_contents('example-md/README.md');
$html = MarkdownExtra::defaultTransform($text);

?>

<html lang="ru">
<head>
	<title>Task Force Radio</title>

	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	
	<link href="bootstrap/css/bootstrap.css" rel="stylesheet" media="screen">
	<link href="bootstrap/css/bootstrap-theme.css" rel="stylesheet" media="screen">
		
	<link href="//netdna.bootstrapcdn.com/font-awesome/4.0.1/css/font-awesome.css" rel="stylesheet">
		
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600&subset=latin,cyrillic' rel='stylesheet' type='text/css'>
		
	<link rel="stylesheet" type="text/css" href="style.css">
		
	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
		<script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
	<![endif]-->
</head>
<body>
<!-- GitHub Ribbon -->
<a href="https://github.com/michail-nikolaev/task-force-arma-3-radio" target="_blank">
	<img style="position: absolute; top: 0; right: 0; border: 0; z-index:100;" src="img/github-ribbon.png" alt="Fork me on GitHub">
</a>
<div style="position:absolute;left:0;top:0;z-index:99;width:100%;height:20px;text-align:center;color:white;font-weight:600;font-size:12px;background-image: -moz-linear-gradient(bottom, #f17101 0%, #f9a103 100%);background-image: -o-linear-gradient(bottom, #f17101 0%, #f9a103 100%);background-image: -webkit-linear-gradient(bottom, #f17101 0%, #f9a103 100%);background-image: linear-gradient(bottom, #f17101 0%, #f9a103 100%);">
	Страница находится в разработке.
</div>

<div class="container">
	<div class="row">
		<!-- Left col -->
		<div class="col-xs-3 text-right">
			<img class="radio" src="img/radio.png" alt="Radio">
		</div>
		
		<!-- Right col -->
		<div class="col-xs-8 col-xs-offset-1">
			
			<div class="header">
				<img class="logo hires" width="425" height="69" src="img/logo.png" alt="Radio">

				<div class="clearfix">
					<div class="credit pull-left">
						Created by
						<div class="name"><a href="#" target="_blank">[TF]Nkey</a></div>
					</div>
					<div class="credit">
						Thanks to
						<div class="name thanks">
							<a href="http://forum.task-force.ru/index.php?action=profile;u=7" target="_blank">[TF]MTF</a>, <a href="http://forum.task-force.ru/index.php?action=profile;u=14" target="_blank">[TF]Hardckor</a>, Andrey Z.
						</div>
					</div>
				</div>

				<a href="#" class="btn btn-primary btn-lg">
					<span class="fa fa-cloud-download fa-lg"></span>&nbsp;Скачать рацию
				</a>
				
				<button type="button" class="btn btn-default btn-lg" data-toggle="modal" data-target="#myModal">
					<span class="fa fa-pencil fa-lg"></span>&nbsp;Написать автору
				</button>

				<!-- Modal -->
				<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="writeToAuthor" aria-hidden="true">
					<div class="modal-dialog">
						<div class="modal-content">
							
							<div class="modal-header">
								<a href="#" class="close" data-dismiss="modal" aria-hidden="true">&times;</a>
								<h4 class="modal-title" id="writeToAuthor">Написать автору</h4>
							</div>
							<div class="modal-body">							
								<div class="alert alert-danger hide" id="check-form-message"></div><!-- Form validation alerts -->
							
								<!-- Modal contents -->
								<form role="form" id="mailForm" method="post" action="mail.php" onSubmit="return checkForm(this)">
									<div class="form-group">
										<label for="email">Ваш email</label>
										<input type="email" class="form-control" name="email" placeholder="my@email.ru" check_pattern="^[\w-]+(\.[\w-]+)*@([\w-]+\.)+[a-zA-Z]{2,7}$" check_message="Введите правильный email.">
									</div>
									<div class="form-group">
										<label for="mailForm-message">Сообщение</label>
										<textarea class="form-control" name="message" rows="5" placeholder="Спасибо! Это лучшая рация, с которой мы играли!" check_message="Вы ничего не написали."></textarea>
									</div>
								</form>								
							</div>
							<div class="modal-footer">
								<button type="button" class="btn btn-default" data-dismiss="modal">Закрыть</button>
								<button type="submit" class="btn btn-primary" form="mailForm">Отправить</button>
							</div>
								
						</div><!-- /.modal-content -->
					</div><!-- /.modal-dialog -->
				</div><!-- /.modal -->				
				
			</div><!-- /.header -->						
			
			<div id="readme-content">	
				<?php echo $html; ?><!-- MARKDOWN GOES HERE -->
			</div>
					
		</div><!-- Right col end -->
	</div><!-- /.row -->
</div>s

<script src="https://code.jquery.com/jquery.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>
<script src="script.js"></script>
</body>
</html>