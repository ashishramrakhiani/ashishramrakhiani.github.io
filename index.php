<?php
session_start();
if(isset($_SESSION['EMAIL']))
{
	$output=$_SESSION['EMAIL'];
}
$search='';
?>
<!DOCTYPE HTML>
<html>
	<head>
		<title>G-Max: Groceries, Simplified</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="assets/css/main.css" />
		<link rel="shortcut icon" type="image/png" href="images/favicon.png">
		<!--[if lte IE 9]><link rel="stylesheet" href="assets/css/ie9.css" /><![endif]-->
		<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
	</head>
	<body>

		
			<div id="wrapper">

				
					<header id="header" class="alt">
						<a href="index.php" class="logo"><strong>G-MAX</strong> <span>Groceries, simplified!</span></a>
						&nbsp&nbsp&nbsp&nbsp&nbsp
						<?php 
							if(isset($_SESSION['EMAIL']))
							{
								if($_SESSION['NAME']=='Admin')
								echo "<a href='#menu'>hi ".$_SESSION['NAME'].'</a>';


								else echo "hi ".$_SESSION['NAME'];
							}

						?>
						<div style="padding-left:6.5%;"?>
							<div class="0.3u 12u$(xsmall)">
								<form action="" method="post"><input type="text" placeholder="Search for Groceries" name="demo-name" id="demo-name"></imput>
							</div>
						</div>
						<input type="submit" class="button icon fa-search" name="sbutton" value="Search"></a></form>
						<?php
							include_once("dbconfig1.php");

							if(isset($_POST['sbutton']))
							{
								$search=$_POST['demo-name'];
								echo $search;
								$_SESSION['selectors']=$search;	
								header("Location:searchbar.php");
							}	
						?>
			
						<nav>
							<a href="#menu">Menu</a>
						</nav>
					</header>

				
					<nav id="menu">
						<ul class="links">
							<li><?php if(isset($_SESSION['EMAIL']))
							{
								if($_SESSION['NAME']=='Admin'){
								echo '<a href="products.php">DASHBOARD</a>';}


								else echo '<a href="#header">hi '.$_SESSION['NAME'].'!</a>';
							echo'</li>
							<!--<li><a href="index.php">My Account</a></li>-->
							<!-- <li><a href="Admin\index.html#two">My Orders</a></li> -->
							<li><a href="generic.php">My Cart</a></li>';}
							else echo'<a href="#header">hi! <strong>log in</strong><br> or <strong>sign up</strong> to continue!</a>';?></li>
							<li><a href="#footer">About</a></li>
						</ul>
						<ul class="actions vertical">
						<?php if(!isset($_SESSION['EMAIL']))
						{?>
							<li><a href="login.php" class="button special fit">Log In</a></li>
						
							<li><a href="signup.php" class="button fit">Sign Up</a></li>
							<?php } ?>
							<?php if(isset($_SESSION['EMAIL']))
							{?>
							<li><a href="logout.php" class="button special fit">Log out</a></li>
							<?php } ?>
						</ul>
					</nav>

				
					<section id="banner" class="major">
						<div class="inner">
							<header class="major">
								<h1>Welcome to G-max</h1>
							</header>
							<div class="content">
								<p>Here, you can buy a variety of your everyday groceries<br />
								at the comfort of your home!</p>
								<ul class="actions">
									<li><a href="#one" class="button next scrolly">Get Started</a></li>
								</ul>
							</div>
						</div>
					</section>

				
					<div id="main">

						<!-- One -->
							<section id="one" class="tiles">
								<article>
									<span class="image">
										<img src="images/pic01.jpg" alt="" />
									</span>
									<header class="major">
										<h3><a href="landingOils.php" class="link">Edibles</a></h3>
										<p>Edible Oil and Ghee</p>
									</header>
								</article>
								<article>
									<span class="image">
										<img src="images/pic02.jpg" alt="" />
									</span>
									<header class="major">
										<h3><a href="landingGroceries.php" class="link">Daily Groceries</a></h3>
										<p>Dals and Pulses</p>
									</header>
								</article>
								<article>
									<span class="image">
										<img src="images/pic03.jpg" alt="" />
									</span>
									<header class="major">
										<h3><a href="landingSpices.php" class="link">Spices</a></h3>
										<p>Not just Chillies</p>
									</header>
								</article>
								<article>
									<span class="image">
										<img src="images/pic04.jpg" alt="" />
									</span>
									<header class="major">
										<h3><a href="landingOccasionals.php" class="link">Occasionals</a></h3>
										<p>Dry Fruits & more</p>
									</header>
								</article>
								<article>
									<span class="image">
										<img src="images/pic05.jpg" alt="" />
									</span>
									<header class="major">
										<h3><a href="landingGrains.php" class="link">Flour, Rice and Grains</a></h3>
										<p>Where does Bran Come from?</p>
									</header>
								</article>
								<article>
									<span class="image">
										<img src="images/pic06.jpg" alt="" />
									</span>
									<header class="major">
										<h3><a href="landingTastes.php" class="link">Tastes</a></h3>
										<p>Salt and Sugar</p>
									</header>
								</article>								
							</section>
						
					</div>			

				<!-- Footer -->
					<footer id="footer">
						<div class="inner">
							<ul class="icons">
								<li><a href="#" class="icon alt fa-twitter"><span class="label">Twitter</span></a></li>
								<li><a href="#" class="icon alt fa-facebook"><span class="label">Facebook</span></a></li>
								<li><a href="#" class="icon alt fa-instagram"><span class="label">Instagram</span></a></li>
								<!--<li><a href="#" class="icon alt fa-github"><span class="label">GitHub</span></a></li>
								<li><a href="#" class="icon alt fa-linkedin"><span class="label">LinkedIn</span></a></li>-->
							</ul>
							<ul class="copyright">
								<li>&copy; G-MAX</li><li>Developers <a href="https://www.facebook.com/yashpramodshinde">Yash Shinde</a>, <a href="https://www.facebook.com/austin.nicholas.165"> &nbsp;&nbsp;Ashish Ramrakhiani</a></li>
							</ul>
							<ul class="copyright">
								<li><?php if(isset($_SESSION['EMAIL']))
								{
									echo "Logged in as  <strong>".$_SESSION['EMAIL'].'<strong>';
								}?></li>
							</ul>
						</div>
					</footer>

			</div>

		<!--Scripts--> 
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/jquery.scrollex.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
			<script src="assets/js/main.js"></script>

	</body>
</html>