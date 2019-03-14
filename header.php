<?php
    include_once './session.php';
?>
<!DOCTYPE HTML>
<!--
	Intensify by TEMPLATED
	templated.co @templatedco
	Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
-->
<html>
	<head>
		<title>Generic - Intensify by TEMPLATED</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="assets/css/main.css" />
	</head>
	<body class="subpage">

		<!-- Header -->
			<header id="header">
				<nav class="left">
					<a href="#menu"><span>Menu</span></a>
				</nav>
				<a href="index.php" class="logo">intensify</a>
				<nav class="right">
                                    <?php
                                        //če je prijavljen - naj bo link na logout, če ne login 
                                        if (isset($_SESSION['user_id'])) {
                                            echo '<a href="logout.php" class="button alt">Log out</a>';
                                        }
                                        else {
                                            echo '<a href="login.php" class="button alt">Log in</a>';
                                        }
                                    ?>
					
				</nav>
			</header>

		<!-- Menu -->
			<nav id="menu">
				<ul class="links">
					<li><a href="index.php">Home</a></li>
					<li><a href="registration.php">Registracija</a></li>
					<li><a href="posts.php">Objave</a></li>
				</ul>
				<ul class="actions vertical">
					<li><a href="#" class="button fit">Login</a></li>
				</ul>
			</nav>

		<!-- Main -->
			<section id="main" class="wrapper">
				<div class="inner">