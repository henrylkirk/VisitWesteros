<!doctype html>

<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<link rel="icon" type="image/png" href="assets/media/favicon-32x32.png" sizes="32x32" />
	
	<!-- Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">

	<!-- Bootstrap -->
	<link href="assets/css/bootstrap-theme.css" rel="stylesheet">
	<link href="assets/css/bootstrap.css" rel="stylesheet">

	<!-- Custom CSS for this site -->
	<link rel="stylesheet" type="text/css" href="assets/css/nav.css">
	<link rel="stylesheet" type="text/css" href="assets/css/sidebar.css">
	<link rel="stylesheet" type="text/css" href="assets/css/custom.css">
	<link rel="stylesheet" type="text/css" href="assets/css/comments.css">

	<title>Visit Westeros | <?= $page_title ?> </title>

</head>
<body onresize="reloadPage()">
	<?php include "assets/includes/sidebar.inc.php"; ?>

	<!-- Large logo -->
	<div id="logo-big">
		<a href="../index.html">
			<img src="assets/media/logo.png" style="height: 40px;" alt="logo">
		</a>
	</div>
	<!-- Small logo -->
	<!-- <div id="logo-small">
		<a href="../index.html">
			<img src="assets/media/logo_small.png" style="height: 40px;" alt="logo">
		</a>
	</div> -->
	<nav class="navbar navbar-inverse" data-spy="affix" data-offset-top="80">
		<div class="container">
			<div class="navbar-header">
				<!-- <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="sr-only">Toggle navigation</span>
				</button> -->
			</div>
			<div id="navbar" class="collapse navbar-collapse">
				<ul class="nav navbar-nav">
					<li><a href="index.php">Home</a></li>

					<li class="dropdown active">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Attractions <b class="caret"></b></a>
						<ul class="dropdown-menu">
							<li><a href="wall.php">The Wall</a></li>
							<li><a href="citadel.php">The Citadel</a></li>
							<li role="separator" class="divider"></li>
						</ul>
					</li>

					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Castles 
							<b class="caret"></b></a>
							<ul class="dropdown-menu">
								<li><a href="winterfell.php">Winterfell</a></li>
								<li><a href="eyrie.php">The Eyrie</a></li>
								<li><a href="riverrun.php">Riverrun</a></li>
								<li role="separator" class="divider"></li>
							</ul>
						</li>

						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Islands <b class="caret"></b></a>
							<ul class="dropdown-menu">
								<li><a href="ironislands.php">Iron Islands</a></li>
								<li><a href="dragonstone.php">Dragonstone</a></li>
								<li role="separator" class="divider"></li>
							</ul>
						</li>

						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Castles <b class="caret"></b></a>
							<ul class="dropdown-menu">
								<li><a href="kingslanding.php">King's Landing</a></li>
								<li><a href="sunspear.php">Sunspear</a></li>
								<li role="separator" class="divider"></li>
							</ul>
						</li>

					</ul>
				</div><!--/.nav-collapse -->
			</div>
		</nav>

	<div class="center-area">
		<h1><?= $page_title ?></h1>
		<div class="main-article">
			<figure>

