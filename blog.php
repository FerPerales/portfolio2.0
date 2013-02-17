<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>Fer Perales :: Blog</title>
		<link rel="shortcut icon" href="img/favicon.ico">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="">
		<meta name="author" content="Fer Perales">
		
		<meta property="og:title" content="Fer Perales :: Blog"/>
		<meta property="og:url" content="http://ferperales.net"/>
		<meta property="og:image" content="http://ferperales.net/img/favicon.ico"/>
		<meta property="og:type" content="website"/>
		<meta property="og:site_name" content="Fer Perales"/>	
		<meta property="og:description" content="Fer Perales is a software craftsman apretience"/>

		<!-- CSS -->
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<link href="css/footer.css" rel="stylesheet">
		
		
		<script src="js/jquery-1.9.1.min.js"></script>

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
						  <li><a href="index.php">Home</a></li>
						  <li><a href="resume.php">Résumé</a></li>
						  <li><a href="portfolio.php">Portfolio</a></li>						  
						  <li><a href="contact.php">Contact</a></li>
						  <li class="active"><a href="blog.php">Blog</a></li>
						</ul>
					</div>
					<h1>Blog</h1>
				</div>
				
					<div class="row">
						<div class="span8 offset2">	
							<div class="row pull-right">
								<div class="span4">
									I have a <a href="http://blog.ferperales.net">blog</a> written mostly in Spanish where I write about technology, programming, designer, startups, music and more.						
								</div>
							</div>
							<div class="row pull-left">						
								<div class="span4">
									<div id="feeds">
										<a class="feed" href="http://blog.ferperales.net/feed">Latest entries</a>
										<a class="feed" href="http://blog.ferperales.net/category/english/">English</a> 								</div>									
									<script type="text/javascript"> 
										$(document).ready(function() { 
										        $('a.feed').gFeed( { 
										        	target: '#feeds', 
										        	tabs: true,
										        	max: 3									        
									        	 } ); 
										    }); 
									</script>
								</div>
							</div>
							
						</div>
					</div>
			</div>
			<div id="push"></div>
		</div>
		<div id="footer">
			<div class="container">
				<div class="row pull-right">
					<script src="//about.me/embed/ferperales?image=0&amp;name=0&amp;headline=0&amp;bio=0&amp;style=site"></script>
				</div>
			</div>
		</div>


		<!-- Le javascript
		================================================== -->
		<!-- Placed at the end of the document so the pages load faster -->
		
		<script src="js/bootstrap.min.js"></script>
		<script src="http://www.google.com/jsapi"></script>
		<script src="js/jquery.gfeed.js"></script>

	</body>
</html>
