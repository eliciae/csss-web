<!DOCTYPE html>
<html>
	<head>
		<title>U of S CSSS</title>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link href='http://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>
		<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
		<link rel="stylesheet" type="text/css" href="css/bootstrap-theme.css">
		<link rel="stylesheet" type="text/css" href="css/style.css">
		<script type="text/javascript" src="js/jquery-2.1.1.min.js"></script>
		<script type="text/javascript" src="js/bootstrap.js"></script>
		<script type="text/javascript" src="js/csss.js"></script>
	</head>
	<body>
		<nav class="navbar navbar-fixed-top" role="navigation">
			<div class="container">
				<!-- Brand and toggle get grouped for better mobile display -->
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="index.php"><img src="imgs/white_csss_logo.png" width="57" height="20" id="logo"></a>
				</div>

				<?php
				$url = $_SERVER['REQUEST_URI'];
				$page = strrchr($url, '/');
				echo '<div id='.$page.'></div>'
				?>

				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse" id="navbar-collapse">
					<ul class="nav navbar-nav navbar-right">
						<li <?php if ($page == '/index.php') echo 'class="hover-bar nav-select" id="curpage"'; else echo 'class="hover-bar"' ?>><a href="index.php">Home</a></li>
						<li <?php if ($page == '/calendar.php') echo 'class="hover-bar nav-select" id="curpage"'; else echo 'class="hover-bar"' ?>><a href="calendar.php">Events</a></li>
						<li <?php if ($page == '/execs.php') echo 'class="hover-bar nav-select" id="curpage"'; else echo 'class="hover-bar"' ?>><a href="execs.php">Executives</a></li>
						<li <?php if ($page == '/constitution.php') echo 'class="hover-bar nav-select" id="curpage"'; else echo 'class="hover-bar"' ?>><a href="constitution.php">Constitution</a></li>
						<li <?php if ($page == '/career-fair.php')  echo 'class="hover-bar nav-select" id="curpage"'; else echo 'class="hover-bar"' ?>><a href="career-fair.php">Career Fair</a></li>
					</ul>
				</div><!-- /.navbar-collapse -->
			</div><!-- /.container -->
		</nav>