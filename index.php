<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>Fer Perales :: Home</title>
		<link rel="shortcut icon" href="img/favicon.ico">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="">
		<meta name="author" content="Fer Perales">
		
		<meta property="og:title" content="Fer Perales :: Home"/>
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
		<?php include_once("php/tracking.php") ?>
		
		<!-- Part 1: Wrap all page content here -->
		<div id="wrap">
			<!-- Begin page content -->
			<div class="container">
				<div class="page-header">				
					<div class="row pull-right">
						<ul class="nav nav-pills">
						  <li class="active"><a href="index">Home</a></li>
						  <li><a href="resume">Résumé</a></li>
						  <li><a href="portfolio">Portfolio</a></li>						  
						  <li><a href="contact">Contact</a></li>
						  <li><a href="myblog">Blog</a></li>
						</ul>
					</div>
					<h1>Fer Perales</h1>
				</div>			
				<div class="span8 offset2">
					<h2 align="center">About me</h2>
					<p>
						<script src="//about.me/embed/ferperales?image=0&amp;name=0&amp;apps=0&amp;style=site"></script>
					</p>
					<hr/>
					<section>
						<h2 align="center">What I'm doing</h2>
						<p>Some of the things I've been working on in the last months are:</p>
						<ul>						
							<li><a href="http://fb.com/groups/rubyCUCEI">The rubyCUCEI self-learning group:</a> We gathered every saturday to learn ruby and ruby on rails </a><span class="label label-warning">On hold until February 2013 </span></li>							
							<li><a href="https://github.com/FerPerales/RailsDO-list">A ToDo list</a> - Ruby on Rails</li>
							<li><a href="https://github.com/FerPerales/store">Store: </a>a project started in the Ruby on Rails bootcamp by Crowd Interactive - Ruby on Rails</li>
							<li><a href="http://songfly.me/">Songfly.me</a> - a collaborative social platform in which users from all around the world can upload their tracks, share them with other users and together they can create a brand new song. I'm working in both the front and the back-end </li>						
						</ul>
					</section>						
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

	</body>
</html>
