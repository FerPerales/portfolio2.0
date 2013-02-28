<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>Fer Perales :: Contact</title>
		<link rel="shortcut icon" href="img/favicon.ico">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="">
		<meta name="author" content="Fer Perales">
		
		<meta property="og:title" content="Fer Perales :: Contact"/>
		<meta property="og:url" content="http://ferperales.net"/>
		<meta property="og:image" content="http://ferperales.net/img/favicon.ico"/>
		<meta property="og:type" content="website"/>
		<meta property="og:site_name" content="Fer Perales"/>
		<meta property="og:description" content="Fer Perales is a software craftsman apretience"/>

		<!-- CSS -->
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<link href="css/footer.css" rel="stylesheet">

		<!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
		<!--[if lt IE 9]>
		<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->

	</head>

	<body>

		<!-- Part 1: Wrap all page content here -->
		<div id="wrap">

			<!-- Begin page content -->
			<div class="container">
				<div class="page-header">
					<div class="row pull-right">
						<ul class="nav nav-pills">
							<li>
								<a href="index">Home</a>
							</li>
							<li>
								<a href="resume">Résumé</a>
							</li>
							<li>
								<a href="portfolio">Portfolio</a>
							</li>
							<li class="active">
								<a href="contact">Contact</a>
							</li>
							<li>
								<a href="myblog">Blog</a>
							</li>
						</ul>
					</div>
					<h1>Contact</h1>
				</div>
				<div class="span8 offset2">
					<div id="disqus_thread"></div>
				</div>
			</div>
			<div id="push"></div>
		</div>
<?php	
	require 'php/footer.php';
?>


		<!-- Le javascript
		================================================== -->
		<!-- Placed at the end of the document so the pages load faster -->
		<script src="js/jquery-1.9.1.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script type="text/javascript">
			var disqus_shortname = 'comentariosferperalesnet';
			(function() {
				var dsq = document.createElement('script');
				dsq.type = 'text/javascript';
				dsq.async = true;
				dsq.src = 'http://' + disqus_shortname + '.disqus.com/embed.js';
				(document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(dsq);
			})();
		</script>

	</body>
</html>
