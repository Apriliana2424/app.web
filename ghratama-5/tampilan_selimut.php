<!DOCTYPE html>
<html lang="en">
<?php
include "master.php";
?>
	<head>
		<title>GHRATAMA LAUNDRY</title>
		<style type="text/css">
			header, section, footer, aside, nav, article, figure, figcaption {
				display: block;}
			body {
				color: #666666;
				background-color: #f9f8f6;
				background-image: url("images/dark-wood.jpg");
				background-position: center;
				font-family: Georgia, Times, serif;
				line-height: 1.4em;
				margin: 0px;}
			.wrapper {
				width: 940px;
				margin: 20px auto 20px auto;
				border: 2px solid #000000;
				background-color: #ffffff;}
			header {
				height: 160px;
				background-image: url(images/header.png);}
			h1 {
				text-indent: -9999px;
				width: 940px;
				height: 130px;
				margin: 0px;}
			nav, footer {
				clear: both;
				color: #ffffff;
				background-color: #aeaca8;
				height: 30px;}
			nav ul {
				margin: 0px;
				padding: 5px 0px 5px 30px;}
			nav li {
				display: inline;
				margin-right: 40px;}
			nav li a {
				color: #ffffff;}
			nav li a:hover, nav li a.current {
				color: #000000;}
			section.courses {
				float: left;
				width: 659px;
				border-right: 1px solid #eeeeee;}
			article {
				clear: both;
				overflow: auto;
				width: 100%;}
			hgroup {
				margin-top: 40px;}
			figure {
				float: left;
				width: 290px;
				height: 220px;
				padding: 5px;
				margin: 20px;
				border: 1px solid #eeeeee;}
			figcaption {
				font-size: 90%;
				text-align: left;}
			aside {
				width: 230px;
				float: left;
				padding: 0px 0px 0px 20px;}
			aside section a {
				display: block;
				padding: 10px;
				border-bottom: 1px solid #eeeeee;}
			aside section a:hover {
				color: #985d6a;
				background-color: #efefef;}
			a {
				color: #de6581;
				text-decoration: none;}
			h1, h2, h3 {
				font-weight: normal;}
			h2 {
				margin: 10px 0px 5px 0px;
				padding: 0px;}
			h3 {
				margin: 0px 0px 10px 0px;
				color: #de6581;}
			aside h2 {
				padding: 30px 0px 10px 0px;
				color: #de6581;}
			footer {
				font-size: 80%;
				padding: 7px 0px 0px 20px;}
		</style>
		<!--[if lt IE 9]>
		<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->
	</head>
	<body>
		<div class="wrapper">
			<header>
				<h1>GHRATAMA LAUNDRY</h1>
				<nav>
					<ul>
						<li><a href="tampilan_baju.php">BAJU</a></li>
						<li><a href="tampilan_selimut.php">SELIMUT</a></li>
						<li><a href="tampilan_boneka.php">BONEKA</a></li>
						<li><a href="tampilan_celana.php">CELANA</a></li>
					</ul>
				</nav>
			</header>
			<section class="courses">
				<article>
					<figure>
						<img src="images/selimut2.png" alt="selimut" />
						<figcaption>Selimut 1 kilo</figcaption>
					</figure>
					<hgroup>
						<h2>1 KILO</h2>
						<h3>1 Kilo akan di tentukan secara otomatis</h3>
					</hgroup>
					<p></p>
				</article>    
				<article>
					<figure>
						<img src="images/selimut.jpg" alt="selimut" />
						<figcaption>selimut 2 kilo</figcaption>
					</figure>
					<hgroup>
						<h2>2 KILO</h2>
						<h3>2 kilo akan di tentukan secara otomatis</h3>
					</hgroup>
					<p></p>
				</article>    
			</section>
			<aside>
				<section class="popular-recipes">
					<h2>KATEGORI</h2>
					<a href="input.php">Baju</a>
					<a href="input.php">Selimut</a>
					<a href="input.php">Boneka</a>
					<a href="input.php">Celana</a>
				</section>
				<section class="contact-details">
					<p>Ghratama Laudry<br />
				<a href="login.php" onClick='self.history()'>
				<input type="Submit" name="logout" value="Logout"></a>
				</section>
			</aside>
			<footer>
				&copy; 2018 Ghratama Laundry
			</footer>
		</div><!-- .wrapper -->
	</body>
</html>