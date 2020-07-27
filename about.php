<?php

session_start();
include("includes/db.php");
include("includes/functions.php");

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>About</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="img/favicon.png"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/themify/themify-icons.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/elegant-font/html-css/style.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/slick/slick.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
</head>
<body class="animsition">

	<!-- Header -->
	<header class="header1">
		<!-- Header desktop -->
		<div class="container-menu-header">
			<div class="topbar">
				<div class="topbar-social">
					<a href="#" class="topbar-social-item fa fa-facebook"></a>
					<a href="#" class="topbar-social-item fa fa-instagram"></a>
					<a href="#" class="topbar-social-item fa fa-youtube-play"></a>
				</div>

				<div class="topbar-child1">
					<span style="margin-left:960px">
						<a class="topbar-child1" href="login.php">LOGIN/REGISTER</a>
					</span>
				</div>

				<span class="linedivide1"></span>

				<div class="topbar-child2">
					<span style="margin-right:110px">
						<a class="topbar-child1" href="register.php">MY ACCOUNT</a>
					</span>
				</div>
			</div>

			<div class="wrap_header">
				<!-- Logo -->
				<a href="index.php" class="logo">
					<img src="img/logo2.png" alt="IMG-LOGO">
				</a>

				<?php getIp(); ?>
          		<?php cart(); ?>
				<!-- Menu -->
				<div class="wrap_menu">
					<nav class="menu">
						<ul class="main_menu">
							<li>
								<a href="index.php">Home</a>
							</li>

							<li >
								<a href="product.php">Shop</a>
							</li>

							<li class="sale-noti">
								<a href="About.php">About</a>
							</li>

							<li>
								<a href="contact.php">Contact</a>
							</li>
						</ul>
					</nav>
				</div>

				<!-- Header Icon -->
				
				<div class="header-icons">
					<?php
					if(isset($_SESSION['username'])){
							echo "<a href='#' class='header-wrapicon1 dis-block'>
							<img src='images/icons/icon-header-01.png' class='header-icon1' alt='ICON' <p>"; echo ' '.$_SESSION['username']; echo" </p>
							
						</a><span class='linedivide1'></span>
						<a href='logout.php' class='header-wrapicon1 dis-block'>Log out</a>";
                    
					}
					else{
							echo "<a href='login.php' class='header-wrapicon1 dis-block'>
							<img src='images/icons/icon-header-01.png' class='header-icon1' alt='ICON' <p> Hi Guest</p>
							
						</a>";
					}
					
					?>

					<span class="linedivide1"></span>

					<div class="header-wrapicon2">
                    <a href="cart.php">
						<img src="images/icons/icon-header-02.png" class="header-icon1 js-show-header-dropdown" alt="ICON">
						<span class="header-icons-noti"><?php total_items(); ?></span>
						</a>
					</div>
					
				</div>
			</div>
		</div></br></br></br></br></br>
	<!-- Title Page -->
	<section class="bg-title-page p-t-50 p-b-40 flex-col-c-m" style="background-image: url(img/banner.jpg);">
		<h2 class="l-text2 t-center">
			About Us
		</h2>
		<p class="m-text13 t-center">
        
		</p>
	</section>

	<!-- content page -->
	<section class="bgwhite p-t-66 p-b-38">
		<div class="container">
			<div class="row">
				<div class="col-md-4 p-b-30">
					<div class="hov-img-zoom">
						<img src="img/about.jpg" alt="IMG-ABOUT">
					</div>
				</div>

				<div class="col-md-8 p-b-30">
					<h3 class="m-text26 p-t-15 p-b-16">
						Mission & Vision
					</h3>

					<p class="p-b-28">
					To build a consistent working business relationship with our customers encouraging new ideas to keep the competitive edge. Becoming a reliable, trustworthy and stable ecommerce business in the market. Our objective as a company is to have projectile profits and returns through online advertising and monthly promotions. Online shopping is a new trend in the market, for us to keep up with trend we need to raise ecommerce efforts that will benefit us, so that we can have a guaranteed future in ecommerce business. Increase in personification and customer engagement are evolving trends for ecommerce business</p>

					<div class="bo13 p-l-29 m-l-9 p-b-10">
						<p class="p-b-11">
						Long term future plans involved in Connwave are to expand the business, get into export and import products globally. Challenges faced include penetrating the market and getting to expand globally. Our vision statement is to become world’s most loved, most flown and most profitable ecommerce site</p>

					</div>
				</div>
			</div>
		</div>
	</section>


	<!-- Footer -->
		<!-- Footer -->
<footer class="bg6 p-t-45 p-b-43 p-l-45 p-r-45">
		<div class="flex-w p-b-90">
			<div class="w-size6 p-t-30 p-l-15 p-r-15 respon3">
				<h4 class="s-text12 p-b-30">
					GET IN TOUCH
				</h4>

				<div>
					<p class="s-text7 w-size27">
						Email us on -<a class="s-text7 w-size27" href="#">ConnWave@gmail.com</a>
					</p></br>
					<p class="s-text7 w-size27">
						Any questions? Let us know in store at 8th floor, 379 Hudson St, New York, NY 10018 or call us on 
						<a class="s-text7 w-size27" href="#">(+1) 96 716 6879</a>
					</p>

					<div class="flex-m p-t-30">
						<a href="#" class="fs-18 color1 p-r-20 fa fa-facebook"></a>
						<a href="#" class="fs-18 color1 p-r-20 fa fa-instagram"></a>
						<a href="#" class="fs-18 color1 p-r-20 fa fa-youtube-play"></a>
					</div>
				</div>
			</div>

			<div class="w-size7 p-t-30 p-l-15 p-r-15 respon4">
				<h4 class="s-text12 p-b-30">
					Categories
				</h4>

				<ul>
					<li class="p-b-9">
						<a href="accessories-product.php" class="s-text7">
							Accessories
						</a>
					</li>

					<li class="p-b-9">
						<a href="tvGames-product.php" class="s-text7">
						Tv and Video Games
						</a>
					</li>

					<li class="p-b-9">
						<a href="phones-product.php" class="s-text7">
							Phones
						</a>
					</li>

					<li class="p-b-9">
						<a href="Laptops-product.php" class="s-text7">
							Laptops
						</a>
					</li>

					<li class="p-b-9">
						<a href="camera-product.php" class="s-text7">
							Cameras
						</a>
					</li>

					<li class="p-b-9">
						<a href="clothing-product.php" class="s-text7">
							Clothing
						</a>
					</li>
				</ul>
			</div>

			<div class="w-size7 p-t-30 p-l-15 p-r-15 respon4">
				<h4 class="s-text12 p-b-30">
					Links
				</h4>

				<ul>
					<li class="p-b-9">
						<a href="product.php" class="s-text7">
							Search
						</a>
					</li>

					<li class="p-b-9">
						<a href="about.php" class="s-text7">
							About Us
						</a>
					</li>

					<li class="p-b-9">
						<a href="contact.php" class="s-text7">
							Contact Us
						</a>
					</li>
				</ul>
			</div>

			<div class="w-size7 p-t-30 p-l-15 p-r-15 respon4">
				<h4 class="s-text12 p-b-30">
					Help
				</h4>

				<ul>
					<li class="p-b-9">
						<a href="contact.php" class="s-text7">
							Track your Order
						</a>
					</li>

					<li class="p-b-9">
						<a href="contact.php" class="s-text7">
							Returns
						</a>
					</li>

					<li class="p-b-9">
						<a href="contact.php" class="s-text7">
							FAQs
						</a>
					</li>
				</ul>
			</div>

			<div class="w-size8 p-t-30 p-l-15 p-r-15 respon3">
				<h4 class="s-text12 p-b-30">
					Newsletter
				</h4>

				<form>
					<div class="effect1 w-size9">
						<input class="s-text7 bg6 w-full p-b-5" type="text" name="email" placeholder="yourname@example.com">
						<span class="effect1-line"></span>
					</div>

					<div class="w-size2 p-t-20">
						<!-- Button -->
						<button class="flex-c-m size2 bg4 bo-rad-23 hov1 m-text3 trans-0-4">
							Subscribe
						</button>
					</div>

				</form>
			</div>
		</div>

		<div class="t-center p-l-15 p-r-15">
			<a href="#">
				<img class="h-size2" src="images/icons/paypal.png" alt="IMG-PAYPAL">
			</a>

			<a href="#">
				<img class="h-size2" src="images/icons/visa.png" alt="IMG-VISA">
			</a>

			<a href="#">
				<img class="h-size2" src="images/icons/mastercard.png" alt="IMG-MASTERCARD">
			</a>
			<div class="t-center s-text8 p-t-20">
				Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | Developed By Blessing Letsoalo
			</div>
		</div>
</footer>



	<!-- Back to top -->
	<div class="btn-back-to-top bg0-hov" id="myBtn">
		<span class="symbol-btn-back-to-top">
			<i class="fa fa-angle-double-up" aria-hidden="true"></i>
		</span>
	</div>

	<!-- Container Selection -->
	<div id="dropDownSelect1"></div>
	<div id="dropDownSelect2"></div>



<!--===============================================================================================-->
	<script type="text/javascript" src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script type="text/javascript" src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script type="text/javascript" src="vendor/bootstrap/js/popper.js"></script>
	<script type="text/javascript" src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script type="text/javascript" src="vendor/select2/select2.min.js"></script>
	<script type="text/javascript">
		$(".selection-1").select2({
			minimumResultsForSearch: 20,
			dropdownParent: $('#dropDownSelect1')
		});

		$(".selection-2").select2({
			minimumResultsForSearch: 20,
			dropdownParent: $('#dropDownSelect2')
		});
	</script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>
