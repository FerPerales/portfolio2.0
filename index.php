<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>Fer Perales :: Home</title>
<?php	require 'php/common_metas.php' ?>	
		<meta property="og:title" content="Fer Perales :: Home"/>


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
<?php include_once("php/menu.php") ?>
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
							<li><a href="http://github.com/FerPerales/fancy-explorer">Fancy explorer</a> A ruby-based file explorer to make mananing your files funnier than ever! <span class="label label-success">New </span> </a></li>							
							<li><a href="https://github.com/FerPerales/RailsDO-list">A ToDo list</a> - Ruby on Rails</li>
							<li><a href="https://github.com/FerPerales/store">Store:</a> a project started in the Ruby on Rails bootcamp by Crowd Interactive - Ruby on Rails</li>
							<li><a href="http://songfly.me/">Songfly.me</a> - a collaborative social platform in which users from all around the world can upload their tracks, share them with other users and together they can create a brand new song. I'm working in both the front and the back-end </li>						
						</ul>
					</section>						
				</div>
			</div>
			<div id="push"></div>
		</div>
<?php	require 'php/footer.php' ?>

		<!-- Le javascript
		================================================== -->
		<!-- Placed at the end of the document so the pages load faster -->
		<script src="js/jquery-1.9.1.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="js/select_menu.js"></script>
	</body>
</html>
