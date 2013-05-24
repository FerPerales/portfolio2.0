<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>Fer Perales :: Contact</title>
<?php	require 'php/common_metas.php' ?>
		<meta property="og:title" content="Fer Perales :: Contact"/>
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<link href="css/footer.css" rel="stylesheet">

		<!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
		<!--[if lt IE 9]>
		<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->

	</head>

	<body>
<?php include_once("php/tracking.php") ?>
		
		<div id="wrap">
			<div class="container">
				<div class="page-header">
<?php include_once("php/menu.php") ?>		
					<h1>Contact</h1>
				</div>
				<div class="span8 offset2">
					<div id="disqus_thread"></div>
				</div>
			</div>
			<div id="push"></div>
		</div>
<?php	require 'php/footer.php' ?>

		<script src="js/jquery-1.9.1.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="js/select_menu.js"></script>
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
