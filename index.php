<?php

# This file passes the content of the Readme.md file in the same directory
# through the Markdown filter. You can adapt this sample code in any way
# you like.

# Install PSR-0-compatible class autoloader
spl_autoload_register(function($class){
	require preg_replace('{\\\\|_(?!.*\\\\)}', DIRECTORY_SEPARATOR, ltrim($class, '\\')).'.php';
});

# Get Markdown class
use \Michelf\Markdown;

# Read file and pass content through the Markdown praser
$text = file_get_contents('example-md/README.md');
$html = Markdown::defaultTransform($text);

?>

<html lang="ru">
<head>
	<title>Task Force Radio</title>

	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	
	<link href="bootstrap/css/bootstrap.css" rel="stylesheet" media="screen">
		
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

<div class="container">
	<div class="row">
		<!-- Left col -->
		<div class="col-xs-3 text-right">
			<img class="radio" src="img/radio.png" alt="Radio">
		</div>
		
		<!-- Right col -->
		<div class="col-xs-8 col-xs-offset-1">
			
			<div class="header">
				<img class="logo" src="img/logo.png" alt="Radio">

				<div class="clearfix">
					<div class="credit pull-left">
						Created by
						<div class="name"><a href="#">[TF]Nkey</a></div>
					</div>
					<div class="credit pull-left">
						Created by
						<div class="name"><a href="#">[TF]Nkey</a></div>
					</div>
				</div>

				<button type="button" class="btn btn-primary btn-lg">
					<span class="glyphicon glyphicon-cloud-download"></span>&nbsp;Скачать
				</button>
			</div><!-- /.header -->	
					
				
				<?php
			# Put HTML content in the document
			echo $html;
		?>
				
					
		</div><!-- Right col end -->
	</div><!-- /.row -->
</div>


<script src="https://code.jquery.com/jquery.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>
</body>
</html>