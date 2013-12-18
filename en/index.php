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
$text = file_get_contents('../res/README_EN.md');
$html = MarkdownExtra::defaultTransform($text);

?>

<!doctype html>
<html lang="ru">
<head>
	<title>Task Force Radio</title>
	<link rel="shortcut icon" href="../img/favicon.png" type="image/png">

	<meta charset="UTF-8">
	
	<link href="../bootstrap/css/bootstrap.css" rel="stylesheet" media="screen">
	<link href="../bootstrap/css/bootstrap-theme.css" rel="stylesheet" media="screen">
		
	<link href="//netdna.bootstrapcdn.com/font-awesome/4.0.1/css/font-awesome.css" rel="stylesheet">
		
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600&subset=latin,cyrillic' rel='stylesheet' type='text/css'>
		
	<link rel="stylesheet" type="text/css" href="../style.css">
		
	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
		<script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
	<![endif]-->
</head>
<body>
<!-- GitHub Ribbon -->
<a href="https://github.com/michail-nikolaev/task-force-arma-3-radio" target="_blank">
	<img style="position: absolute; top: 0; right: 0; border: 0; z-index:100;" src="../img/github-ribbon.png" alt="Fork me on GitHub">
</a>
<!-- <div class="top-alert">Страница находится в разработке.</div> -->

<div class="container">
	<div class="row">
		<!-- Left col -->
		<div class="col-xs-4 text-center">
			<img class="radio" src="../img/radio.png" alt="Radio">
			
			<p class="copyrights">Copyright&nbsp;2013<?php $y=date("Y"); if ($y != 2013) echo "—" .$y;?>&nbsp;<a href="https://github.com/michail-nikolaev">Nkey</a> <!-- Add year interval if year is not 2013 -->
			<br>Site by <a href="http://forum.task-force.ru/index.php?action=profile;u=7">MTF</a></p>
			<p class="copyrights">Squad forum of
			<br><a href="http://task-force.ru">Task&nbsp;Force:&nbsp;Arrowhead</a></p>
		</div>
		
		<!-- Right col -->
		<div class="col-xs-8">
			
			<div class="header">
				<img class="logo hires" width="425" height="69" src="../img/logo.png" alt="Radio">

				<p class="language-buttons">
				  <a href="../" class="btn btn-default btn-xs">По-русски</a>
				  <a href="en" class="btn btn-default btn-xs active">In English</a>
          <a href="../sk" class="btn btn-default btn-xs">Slovensky</a>
				</p>

				<div class="clearfix">
					<div class="credit pull-left">
						Author
						<div class="name"><a href="https://github.com/michail-nikolaev" target="_blank">[TF]Nkey</a></div>
					</div>
					<div class="credit">
						Thanks to
						<div class="name thanks">
							<a href="http://forum.task-force.ru/index.php?action=profile;u=7" target="_blank" class="tooltip-trigger" data-toggle="tooltip" 	title="Graphix, docs, site">[TF]MTF</a>,
							<a href="http://forum.task-force.ru/index.php?action=profile;u=14" target="_blank" class="tooltip-trigger" data-toggle="tooltip" 	title="Graphix">[TF]Hardckor</a>,
							<a href="http://wogames.info/profile/TRUE/" target="_blank" class="tooltip-trigger" data-toggle="tooltip" 							title="Testing">TRUE</a>,
							<a href="http://arma3.ru/forums/index.php/user/41-blender/" target="_blank" class="tooltip-trigger" data-toggle="tooltip" 			title="Font">Blender</a>,
							<a href="http://arma3.ru/forums/index.php/user/715-avi/" target="_blank" class="tooltip-trigger" data-toggle="tooltip" 				title="Code review">Avi</a>,
							<span class="tooltip-trigger" data-toggle="tooltip" 																				title="Translate">Dina</span>,
							<a href="http://arma3.ru/forums/index.php/user/1328-vaulter/" target="_blank" class="tooltip-trigger" data-toggle="tooltip" 				title="Помощь в разработке">Андрей&nbsp;Захаров</a>,
              <a href="https://github.com/vinniefalco" target="_blank" class="tooltip-trigger" data-toggle="tooltip" 								title="DSP Filters">Vinnie&nbsp;Falco</a>,
							<a href="http://task-force.ru" target="_blank" class="tooltip-trigger" data-toggle="tooltip" 										title="Testing, support and help">TF&nbsp;squad</a>,
							<a href="https://github.com/music-dsp-collection" target="_blank" class="tooltip-trigger" data-toggle="tooltip" 					title="Compressor">Music&nbsp;DSP&nbsp;Collection</a>,
							<a href="http://wogames.info" target="_blank" class="tooltip-trigger" data-toggle="tooltip" 										title="Testing">WOG&nbsp;project</a>
              <br/>
              <span class="tooltip-trigger" data-toggle="tooltip" title="See at the bottom of the page">and others</span>.
            </div>
					</div>
				</div>

				<div class="clearfix">
					<div class="pull-left margin-r-4">
						<a href="https://github.com/michail-nikolaev/task-force-arma-3-radio/raw/master/releases/0.8.3.zip" class="btn btn-primary btn-lg">
							<span class="fa fa-cloud-download fa-lg"></span>&nbsp;Download radio
						</a>
						<p class="text-center opacity07 white" id="download-version"></p>
					</div>
					<div class="pull-left margin-r-4">
						<button type="button" class="btn btn-default btn-lg" data-toggle="modal" data-target="#myModal">
							<span class="fa fa-pencil fa-lg"></span>&nbsp;Contact author
						</button>
					</div>
				</div>	

				<!-- Modal -->
				<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="writeToAuthor" aria-hidden="true">
					<div class="modal-dialog">
						<div class="modal-content">
							
							<div class="modal-header">
								<a href="#" class="close" data-dismiss="modal" aria-hidden="true">&times;</a>
								<h4 class="modal-title" id="writeToAuthor">Contact author</h4>
							</div>
							<div class="modal-body">							
								<div class="alert alert-danger hide" id="check-form-message"></div><!-- Form validation alerts -->
							
								<!-- Modal contents -->
								<form role="form" id="mailForm" method="post" action="../mail.php" onSubmit="return checkForm(this)">
									<div class="form-group">
										<label for="email">Your email</label>
										<input type="email" class="form-control" name="email" placeholder="my@email.ru" check_pattern="^[\w-]+(\.[\w-]+)*@([\w-]+\.)+[a-zA-Z]{2,7}$" check_message="Incorrect email.">
									</div>
									<div class="form-group">
										<label for="mailForm-message">Message</label>
										<textarea class="form-control" name="message" rows="5" placeholder="Thank! It's the best radio mod we ever played with!" check_message="You have not written anything."></textarea>
									</div>
								</form>								
							</div>
							<div class="modal-footer">
								<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
								<button type="submit" class="btn btn-primary" form="mailForm">Send</button>
							</div>
								
						</div><!-- /.modal-content -->
					</div><!-- /.modal-dialog -->
				</div><!-- /.modal -->				
				
			</div><!-- /.header -->	
			
			<div class="affix-container">
				<nav id="readme-nav" class="navbar navbar-inverse" role="navigation"><!-- style="position:fixed; left:300px; top:10px; z-index:200;" -->
					<ul class="nav navbar-nav">
						<!-- NAVIGATION GOES HERE -->
					</ul>
				</nav>
			</div>		
			
			
			<div id="readme-content">	
				<?php echo $html; ?><!-- MARKDOWN GOES HERE -->
			</div>
					
		</div><!-- Right col end -->
	</div><!-- /.row -->
</div><!-- /.container -->

<script src="https://code.jquery.com/jquery.js"></script>
<script src="../bootstrap/js/bootstrap.min.js"></script>
<script src="../script.js"></script>

<!-- Yandex.Metrika counter -->
<script type="text/javascript">(function (d, w, c) { (w[c] = w[c] || []).push(function() { try { w.yaCounter22791004 = new Ya.Metrika({id:22791004, webvisor:true, clickmap:true, trackLinks:true, accurateTrackBounce:true}); } catch(e) { } }); var n = d.getElementsByTagName("script")[0], s = d.createElement("script"), f = function () { n.parentNode.insertBefore(s, n); }; s.type = "text/javascript"; s.async = true; s.src = (d.location.protocol == "https:" ? "https:" : "http:") + "//mc.yandex.ru/metrika/watch.js"; if (w.opera == "[object Opera]") { d.addEventListener("DOMContentLoaded", f, false); } else { f(); } })(document, window, "yandex_metrika_callbacks");</script>

<!-- Google Analytics counter -->
<script type="text/javascript">var _gaq = _gaq || []; _gaq.push(['_setAccount', 'UA-42872207-1']); _gaq.push(['_trackPageview']); (function() { var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true; ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js'; var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s); })(); </script>

</body>
</html>