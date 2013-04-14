<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>Fer Perales :: Blog</title>
<?php	
	require 'php/common_metas.php';
?>
		<meta property="og:title" content="Fer Perales :: Blog"/>
		
		<!-- CSS -->
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<link href="css/footer.css" rel="stylesheet">
		
		<!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
		<!--[if lt IE 9]>
		<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->

	</head>

	<body>		
		<?php include_once("php/tracking.php") ?>

		<!-- Part 1: Wrap all page content here -->
		<div id="wrap">

			<!-- Begin page content -->
			<div class="container">
				<div class="page-header">				
					<div class="row pull-right">
						<ul class="nav nav-pills">
						  <li><a href="index">Home</a></li>
						  <li><a href="resume">Résumé</a></li>
						  <li><a href="portfolio">Portfolio</a></li>						  
						  <li><a href="contact">Contact</a></li>
						  <li class="active"><a href="myblog">Blog</a></li>
						</ul>
					</div>
					<h1>Blog</h1>
				</div>
				
					<div class="row">
						<div class="span8 offset2">	
							<div class="row">
								<!--<div class="span4">-->
									I have a <a href="http://blog.ferperales.net">blog</a> written mostly in Spanish where I write about technology, programming, designer, startups, music and more.
									<h2 align="center">Latest entries:</h2>						
								<!--</div>-->
							</div>
							<div class="row">						
								<!--<div class="span4">-->
									<div id="feeds">
										<a class="feed" href="http://blog.ferperales.net/feed"></a>
									</div>									
								<!--</div>-->
							</div>
							
						</div>
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
		<script src="http://www.google.com/jsapi"></script>
		<script src="js/jquery.gfeed.js"></script>
		<script src="js/rss_feed.js">
			
		</script>

	</body>
</html>
