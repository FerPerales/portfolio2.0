<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>Fer Perales :: Résumé</title>
		<link rel="shortcut icon" href="img/favicon.ico">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="">
		<meta name="author" content="Fer Perales">
		
		<meta property="og:title" content="Fer Perales :: Resume"/>
		<meta property="og:url" content="http://ferperales.net"/>
		<meta property="og:image" content="http://ferperales.net/img/favicon.ico"/>
		<meta property="og:type" content="website"/>
		<meta property="og:site_name" content="Fer Perales"/>
		<meta property="og:description" content="Fer Perales is a software craftsman apretience"/>

		<!-- CSS -->
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<link href="css/footer.css" rel="stylesheet">
		<link href="css/font-awesome.min.css" rel="stylesheet"/>
		<link rel="stylesheet" href="css/font-awesome-social.css" />
		<link rel="stylesheet" href="css/font-awesome-ext.css" />
		<link rel="stylesheet" href="css/style.css" />
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
							<li>
								<a href="index">Home</a>
							</li>
							<li class="active">
								<a href="resume">Résumé</a>
							</li>
							<li>
								<a href="portfolio">Portfolio</a>
							</li>
							<li>
								<a href="contact">Contact</a>
							</li>
							<li>
								<a href="myblog">Blog</a>
							</li>
						</ul>
					</div>
					<h1>Résumé</h1>
				</div>
				<div class="row">
					<div class="pull-right">															
						Download<a href="cv" id="times"> <i class="icon-adobe-pdf"></i></a>
<?php
	$hit_count = @file_get_contents('count.txt');
	$string_var = $hit_count == 1? 'time' : 'times';
	echo ' | <i class="icon-download"></i> <small><span class="download-count">'.$hit_count.'</span> '.$string_var.'</small>'
?>
					</div>
				</div>
				<div class="row">
					<div class="span8 offset2">
						<div class="row">
							<div class="span4 pull-left">
								<p>
									<h2><i class="icon-user"></i> Personal information</h2>
								</p>
								<p>
									<i class="icon-calendar"></i> October 17th, 1989
								</p>
								<p>
									<i class="icon-map-marker"></i> Colima, Colima, Mexico
								</p>
								<p>
									<i class="icon-envelope-alt"></i> <img src="img/gmail.png" alt="me@thisdomain" />
								</p>
								<p>
									<i class="icon-phone-sign"></i> 33 1088 5718
								</p>
								<p>
									<i class="icon-skype"></i><a href="skype:ferperalesm?chat"> FerPeralesM</a>
								</p>
							</div>
							<div class="span4 pull-right">
								<p>
									<h2>Social <i class="icon-comments-alt"></i></h2>
								</p>
								<p>
									<a href="http://ferperales.net">ferperales.net </a><i class="icon-home"></i>
								</p>
								<p>
									<a href="http://blog.ferperales.net" target="_blank">blog.ferperales.net </a><i class="icon-rss"></i>
								</p>
								<p>
									<a href="http://linkedin.com/in/FerPerales" target="_blank">linkedin.com/in/FerPerales </a><i class="icon-linkedin"></i>
								</p>
								<p>
									<a href="http://github.com/FerPerales" target="_blank">github.com/FerPerales </a><i class="icon-github-alt"></i>
								</p>
								<p>
									<a href="http://twitter.com/FerPeralesM" target="_blank">@FerPeralesM </a><i class="icon-twitter"></i>
								</p>
							</div>
						</div>
						<hr />
						<div class="accordion" id="accordion2">
							<div class="accordion-group">
								<div class="accordion-heading">
									<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseOne"> <h3 align="center"><i class="icon-book"></i> Academic formation <i class="icon-book"></i></h3> </a>
								</div>
								<div id="collapseOne" class="accordion-body collapse in">
									<div class="accordion-inner">
										<h4 align="center">University of Guadalajara – University Center of Exact Sciences and Engineering (CUCEI)</h4>
										<p>
											B. Cs. Computer Engineering
										</p>
										<p>
											2008 - 2012
										</p>
										<h4 align="center">Instituto Cultural Mexicano-Norteamericano de Jalisco</h4>
										<p>
											Basic program of English for Adults (1 year)
										</p>
										<p>
											Proficiency program of English for Adults (1 year)
										</p>
										<p>
											Teacher Training Program (1 year)
										</p>
									</div>
								</div>
							</div>
							<div class="accordion-group">
								<div class="accordion-heading">
									<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseTwo"> <h3 align="center"><i class="icon-cog"></i> Technical experience* <i class="icon-cog"></i></h3> </a>
								</div>
								<div id="collapseTwo" class="accordion-body collapse">
									<div class="accordion-inner">
										<div class="row">
											<div class="span3 pull-left">
												<h4>Programming languages</h4>
												<ul>
													<li>
														Java
													</li>
													<li>
														C
													</li>
													<li>
														C#
													</li>
													<li>
														Python
													</li>
													<li>
														Ruby
													</li>
												</ul>
												<h4>Web development </h4>
												<ul>
													<li>
														HTML5
													</li>
													<li>
														CSS3
													</li>
													<li>
														JavaScript
													</li>
													<li>
														PHP
													</li>
													<li>
														Ajax
													</li>
												</ul>
											</div>
											<div class="span3 pull-right">
												<h4>Mobile development</h4>
												<ul class="right-bullet" dir="rtl">
													<li>
														Android
													</li>
												</ul>
												<h4>Frameworks, APIs and other tools</h4>
												<ul class="right-bullet" dir="rtl">
													<li>
														JDBC/ODBC
													</li>
													<li>
														Foundation and Bootstrap
													</li>
													<li>
														jQuery
													</li>
													<li>
														jasperReports
													</li>
													<li>
														Drupal/Wordpress
													</li>
													<li>
														backbone.js, knockout.js and sammy.js
													</li>
													<li>
														node.js
													</li>
													<li>
														Twitter API PHP
													</li>
												</ul>
												</h4>
												<p class="text-info">
													*(Descending order of experience)
												</p>
											</div>
										</div>

										<div class="row">
											<div class="span8">
												<h4>Extras</h4>
												<ul>
													<li>
														Databases (mySQL, postgreSQL and BD2)
													</li>
													<li>
														CASE tools (DIA, mySQL Workbench)
													</li>
													<li>
														Mockup tools (Pencil, Balsamiq mockups)
													</li>
													<li>
														IDEs/text editors (Eclipse, AptanaStudio, SharpDevelop, Codeblock, SublimeText, vim)
													</li>
													<li>
														Scripting (basic knowledge of CMD and BASH)
													</li>
													<li>
														CVS (git)
													</li>
													<li>
														Deployment (Heroku, FTP)
													</li>
												</ul>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="accordion-group">
								<div class="accordion-heading">
									<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseThree"> <h3 align="center"><i class="icon-trophy"></i> Certificacions and diplomas <i class="icon-trophy"></i></h3> </a>
								</div>
								<div id="collapseThree" class="accordion-body collapse">
									<div class="accordion-inner">
										<ul>
											<li>
												IBM BD2 Certified Academic Associate
											</li>
											<li>
												ICMNJ Certified Teacher Training Program
											</li>
											<li>
												Microsoft HTML5 &amp; Internet Explorer 9 Developer Fundamentals
											</li>
											<li>
												Oracle Certified Java Programmer
											</li>
										</ul>
									</div>
								</div>
							</div>
							<div class="accordion-group">
								<div class="accordion-heading">
									<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseFour"> <h3 align="center"><i class="icon-briefcase"></i> Laboral experience <i class="icon-briefcase"></i></h3> </a>
								</div>
								<div id="collapseFour" class="accordion-body collapse">
									<div class="accordion-inner">
										<h4 align="center">Crowd Interactive</h4>
										<p>
											Ruby on Rails trainee
										</p>
										<p>
											Feb 2013 - Actual
										</p>
																				
									</div>
								</div>
							</div>
							
							<div class="accordion-group">
								<div class="accordion-heading">
									<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseFive"> <h3 align="center"><i class="icon-wrench"></i> Latest projects <i class="icon-wrench"></i></h3> </a>
								</div>
								<div id="collapseFive" class="accordion-body collapse">
									<div class="accordion-inner">
										<div class="span3 pull-left">
											<h4>Online event registration platform for Hacker Garage</h4>
											Skills/technologies/languages used:
											<ul>
												<li>
													HTML5/CSS3
												</li>
												<li>
													JavaScript
												</li>
												<li>
													jQuery
												</li>
												<li>
													MySQL
												</li>
												<li>
													PHP
												</li>
											</ul>
											<p>
												Participation: complete development (along with 2 friends)
											</p>
											<p>
												Duration: September 2012 – December 2012
											</p>
										</div>
										<div class="span3 pull-right">
											<h4>Control system for the Scholarship department for C.U.C.E.I.</h4>
											Skills/technologies/languages used:
											<ul class="right-bullet" dir="rtl">
												<li>
													Java
												</li>
												<li>
													WindowBuilder
												</li>
												<li>
													jasperReports
												</li>
												<li>
													JDBC
												</li>
												<li>
													PostgreSQL
												</li>
											</ul>
											<p>
												Participation: complete development
											</p>
											<p>
												Duration: March 2011 – November 2011
											</p>
										</div>
									</div>
								</div>
							</div>
							<div class="accordion-group">
								<div class="accordion-heading">
									<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseSix"> <h3 align="center"><i class="icon-certificate"></i> Workshops and courses given <i class="icon-certificate"></i></h3> </a>
								</div>
								<div id="collapseSix" class="accordion-body collapse">
									<div class="accordion-inner">
										<h4>DIVECFest 2012 – Universidad de Guadalajara – CUCEI</h4>
										<ul>
											<li>
												Workshop: Desarrollo de aplicaciones móviles con Phonegap (Mobile application development with Phonegap) (4 hours)
											</li>
											<li>
												Conference: Introducción a bases de datos noSQL (Introduction to noSQL databases) (1 hour)
											</li>
											<li>
												Conference: Piensa y emprende: introducción a la metodología Lean Startup (Think and startup: introduction to Lean Startup methodology) (1 hour)
											</li>
										</ul>
										<h4>2do encuentro estudiantil Ingenieros al ataque – Centro del Software</h4>
										<ul>
											<li>
												Informal talk: Introducción a Lean Startup (Introduction to Lean Startup) (1 hour)
											</li>
										</ul>
									</div>
								</div>
							</div>
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
		<script src="js/counter.js"</script>
		<script type="text/javascript">
			console.log("prueba");
		</script>
	</body>
</html>