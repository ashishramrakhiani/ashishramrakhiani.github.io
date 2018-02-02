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
		<title>Pulses and Dals, Simplified!</title>
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
								<h1>Daily Groceries</h1>
							</header>
							<div class="content">
								<p>Dals and Pulses <strong>Down You Go!</strong>?<br />
								At G-Max, we got you covered!</p>
							</div>
						</div>
					</section>

				<!-- Main -->
					<div id="main">					

						<!-- Two -->
							<section id="two" class="spotlights">								
								<section>
									<a href="generic.html" class="image">
										<img src="http://tatasampann.com/product_images/MID-Masoor-Dal.png" alt="" data-position="top center" />
									</a>
									<div class="content">
										<div class="inner">
											<header class="major">
												<h3>Tata Sampann Masoor Dal</h3>
											</header>
											<p>Considered as an important part of a vegetarian diet in the Indian subcontinent, masoor dal is know for its high levels of antioxidants and also as a good source of iron and potassium.</p>
											<ul class="actions">
												<li><a href="" class="button">500g @ ₹94</a></li>
												<form role="form" action="" method="post"><br>
												<input type="Submit" value="Add to Cart" class="button special" name="Submit4">
												</form>
												<?php
									if(isset($_POST['Submit4']))
									{
										$sql1="select * from product where pname like 'Masoor Dal'";
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
								<section>
									<a href="generic.html" class="image">
										<img src="https://cdn.shopify.com/s/files/1/1337/0877/products/URAD-KALI-DAL-500g_0d727922-bbca-40eb-8726-c92fa8ad4273_1024x1024.png?v=1498646253" alt="" data-position="25% 25%" />
									</a>
									<div class="content">
										<div class="inner">
											<header class="major">
												<h3>Tata Sampann Urad Kali Dal</h3>
											</header>
											<p>Wholesome and delicious, the Urad Kali from Tata Sampann is perfect for your dal makhni..</p>
											<ul class="actions">
												<li><a href="" class="button">1kg @ ₹195</a></li>
												<form role="form" action="" method="post"><br>
												<input type="Submit" value="Add to Cart" class="button special" name="Submit5">
												</form>
												<?php
									if(isset($_POST['Submit5']))
									{
										$sql1="select * from product where pname like 'Urad Kali Dal'";
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