<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>Fer Perales :: Portfolio</title>
		
<?php	require 'php/common_metas.php' ?>

		<meta property="og:title" content="Fer Perales :: Portfolio"/>

		<!-- CSS -->
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<link href="css/footer.css" rel="stylesheet">
		<link rel="stylesheet" href="css/gallery.css" />
		<style type="text/css">
			.breadcrumb li {
				color: #0088cc;
				cursor:pointer;
			}
		</style>
		

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
<?php include_once("php/menu.php") ?>
					<h1>Portfolio</h1>
				</div>
				
				<div class="row">
					<h1 align="center">Still working on</h1>
					
					<div class="span8 offset2">
						<hr/>
						<ul class="breadcrumb">
							<li class="active" data-language="all">All <span class="divider">|</span></li>
							<li data-language="java">Java <span class="divider">|</span></li>
							<li data-language="csharp">C# <span class="divider">|</span></li>				
							<li data-language="ruby">Ruby <span class="divider">|</span></li>	
							<li data-language="frontend">HTML + CSS + Javascript <span class="divider">|</span></li>			  
							<li data-language="php">PHP <span class="divider">|</span></li>
							<li data-language="rails">Ruby on Rails <span class="divider">|</span></li>			
							<li data-language="bash">BASH <span class="divider">|</span></li>
							<li data-language="other">Other </li>						  
						</ul>
					</div>
				</div>
								
				<div class="span8 offset2">		
					<div class="row">						
						<ul class="thumbnails">
							<li class="span4" data-language="java">
								<div class="hover-div">
									<a href="#" class="thumbnail" >
										<img src="img/thumbnails/videoadmin.png" alt="">
									</a>
									<span class="hover-text">
										<p>VideoAdmin</p>
									</span>
								</div>
							</li>
							<li class="span4" data-language="java">
								<div class="hover-div">
									<a href="#" class="thumbnail" >
										<img src="img/thumbnails/sharealla.png" alt="">
									</a>
									<span class="hover-text">
										<p>Sharealla</p>
									</span>
								</div>
							</li>					
						</ul>
					</div>	
						
					<div class="row">
						<ul class="thumbnails">
							<li class="span4" data-language="java">
								<div class="hover-div">
									<a href="#" class="thumbnail" >
										<img src="img/thumbnails/scolarship.png" alt="">
									</a>
									<span class="hover-text">
										<p>Scolarship Unit</p>
									</span>
								</div>
							</li>							
							<li class="span4" data-language="bash">
								<div class="hover-div">
									<a href="#" class="thumbnail" >
										<img src="http://placehold.it/350x150" alt="">
									</a>
									<span class="hover-text">
										<a href="#"></a>
										<p>LTSP3</p>
									</span>
								</div>
							</li>																				
						</ul>
					</div>	
					
					<div class="row">
						<ul class="thumbnails">
							<li class="span4" data-language="frontend">
								<div class="hover-div">
									<a href="#" class="thumbnail" >
										<img src="img/thumbnails/html5.png" alt="">
									</a>
									<span class="hover-text">
										<p>HTML5 training</p>
									</span>
								</div>
							</li>
							<li class="span4" data-language="other">
								<div class="hover-div">
									<a href="#" class="thumbnail" >
										<img src="img/thumbnails/NWN.png" alt="">
									</a>
									<span class="hover-text">
										<p>NWN module</p>
									</span>
								</div>
							</li>								
						</ul>
					</div>	
					
					<div class="row">
						<ul class="thumbnails">
							<li class="span4" data-language="csharp">
								<div class="hover-div">
									<a href="#" class="thumbnail" >
										<img src="http://placehold.it/350x150" alt="">
									</a>
									<span class="hover-text">
										<p>Memorama</p>
									</span>
								</div>
							</li>
							<li class="span4" data-language="csharp">
								<div class="hover-div">
									<a href="#" class="thumbnail" >
										<img src="img/thumbnails/crosswords.png" alt="">
									</a>
									<span class="hover-text">
										<p>Cross Words</p>
									</span>
								</div>
							</li>								
						</ul>
					</div>	
					
					<div class="row">
						<ul class="thumbnails">
							<li class="span4" data-language="csharp">
								<div class="hover-div">
									<a href="#" class="thumbnail" >
										<img src="img/thumbnails/todolist.png" alt="">
									</a>
									<span class="hover-text">
										<p>ToDo list</p>
									</span>
								</div>
							</li>
							<li class="span4" data-language="php">
								<div class="hover-div">
									<a href="#" class="thumbnail" >
										<img src="img/thumbnails/eventosHG.png" alt="">
									</a>
									<span class="hover-text">
										<p>Eventos HG (Hacker Garage)</p>
									</span>
								</div>
							</li>						
						</ul>
					</div>										
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
		<script type="text/javascript">
			var projects = $('.thumbnails');
			var language = "all";
			var prev = language;
			var prevOption = $('li[data-language*="all"]');
			$('.breadcrumb').on('click', 'li', function(){	
				language = $(this).data("language");				
				if (language == 'all') {
					projects.find('li').show(1000);
				}	else {					
					language = $(this).data("language");	
					projects.find('li[data-language*="' + language + '"]').show(1000);
					projects.find('li:not([data-language*="' + language + '"])').hide(1000);
				}				
				prevOption.removeClass('active');				
				prevOption = $(this);
				prevOption.addClass('active');
			});
		</script>
	</body>
</html>
