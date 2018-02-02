<?php
session_start();
if(!isset($_SESSION['EMAIL']))
{
	//
}
include_once('dbconfig1.php');
?>
<!DOCTYPE HTML>
<html>
	<head>
		<title>Dry Fruits, Simplified!</title>
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

				<!-- Banner -->
				<!-- Note: The "styleN" class below should match that of the header element. -->
					<section id="banner" class="style25">
						<div class="inner">
							<span class="image">
								<img src="images/pic07.jpg" alt="" />
							</span>
							<header class="major">
								<h1>Occasionals</h1>
							</header>
							<div class="content">
								<p>Almonds, anyone?</p>
							</div>
						</div>
					</section>

				<!-- Main -->
					<div id="main">					

						<!-- Two -->
							<section id="two" class="spotlights">
								<section>
								
										<img src="http://cdn2.culinarytoursfoods.com/wp-content/uploads/2017/07/CT_Website_Products_OrngeAlmnd-02-e1501095142591.png" alt="" data-position="left" />
									</a>
									<div class="content">
										<div class="inner">
											<header class="major">
												<h3>Prozis California Almonds</h3>
											</header>
											<p><strong>Prozis Foods California Almonds–<br> Almonds… the wonder nut.<br></strong>
											   A favourite of dieters,
											   the almond has become one of the<br> most beloved nuts around the world.<br>And there are good reasons for this love affair:<br>An impressive nutrient profile, versatility,<br>and great taste.<br>
											   Prozis Foods California Almonds, being a 100% natural snack,<br> gathers the nutritional benefits of this food and provides<br> a valuable addition to your healthy eating pattern. </p>
											<ul class="actions">
												<li><a href="" class="button">200g @ ₹325</a></li>
												<form role="form" action="" method="post"><br>
												<input type="Submit" value="Add to Cart" class="button special" name="Submit4">
												</form>
												<?php
									if(isset($_POST['Submit4']))
									{
										$sql1="select * from product where pname like 'California Almonds'";
			$result1 = $conn->query($sql1);
			if ($result1->num_rows > 0)
			{		
			while($row = $result1->fetch_assoc())
			{
						
			
			
				
				$productid=$row["productid"];
			
				$pname=$row["pname"];
				
				$pprice=$row["pprice"];
				  
				 
				$pcategory=$row["pcategory"];
				 
				$pbrand=$row["pbrand"];
				
			}
			}
			$sql="INSERT INTO cart(productid,pname,pprice,pcategory,pbrand) values('$productid','$pname','$pprice','$pcategory','$pbrand')";
			if(mysqli_query($conn,$sql))
			{
		

				echo '<script> alert("Added to cart") </script>';
			}
			else{
	
			echo '<script> alert("'.mysqli_error($conn).'") </script>';
					}
	
		}?>
											</ul>
										</div>
									</div>
								</section>																							
							</section>

						<!-- Three
							<section id="three">
								<div class="inner">
									<header class="major">
										<h2>Massa libero</h2>
									</header>
									<p>Nullam et orci eu lorem consequat tincidunt vivamus et sagittis libero. Mauris aliquet magna magna sed nunc rhoncus pharetra. Pellentesque condimentum sem. In efficitur ligula tate urna. Maecenas laoreet massa vel lacinia pellentesque lorem ipsum dolor. Nullam et orci eu lorem consequat tincidunt. Vivamus et sagittis libero. Mauris aliquet magna magna sed nunc rhoncus amet pharetra et feugiat tempus.</p>
									<ul class="actions">
										<li><a href="generic.html" class="button next">Get Started</a></li>
									</ul>
								</div>
							</section>-->

					</div>

				<!-- Contact
					<section id="contact">
						<div class="inner">
							<section>
								<form method="post" action="#">
									<div class="field half first">
										<label for="name">Name</label>
										<input type="text" name="name" id="name" />
									</div>
									<div class="field half">
										<label for="email">Email</label>
										<input type="text" name="email" id="email" />
									</div>
									<div class="field">
										<label for="message">Message</label>
										<textarea name="message" id="message" rows="6"></textarea>
									</div>
									<ul class="actions">
										<li><input type="submit" value="Send Message" class="special" /></li>
										<li><input type="reset" value="Clear" /></li>
									</ul>
								</form>
							</section>
							<section class="split">
								<section>
									<div class="contact-method">
										<span class="icon alt fa-envelope"></span>
										<h3>Email</h3>
										<a href="#">information@untitled.tld</a>
									</div>
								</section>
								<section>
									<div class="contact-method">
										<span class="icon alt fa-phone"></span>
										<h3>Phone</h3>
										<span>(000) 000-0000 x12387</span>
									</div>
								</section>
								<section>
									<div class="contact-method">
										<span class="icon alt fa-home"></span>
										<h3>Address</h3>
										<span>1234 Somewhere Road #5432<br />
										Nashville, TN 00000<br />
										United States of America</span>
									</div>
								</section>
							</section>
						</div>
					</section> -->

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

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/jquery.scrollex.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
			<script src="assets/js/main.js"></script>

	</body>
</html>