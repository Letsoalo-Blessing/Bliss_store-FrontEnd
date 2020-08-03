<?php

session_start();
include("includes/db.php");
include("includes/functions.php");

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Change Password</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="images/icons/favicon.png"/>
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
					<nav class="menu" style="margin-left:1020px">
						<ul class="main_menu">
							<li style="margin-left:100px">
								<a href="login.php">Login/Register</a>
							</li>
							<span class="linedivide1"></span>
							<li>
								<a href="./">My Account</a>
								<ul class="sub_menu">
									<li><a href="password">Change Password</a></li>
									<li><a href="logout.php">Logout</a></li>
								</ul>
							</li>
						</ul>
					</nav>
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

							<li>
								<a href="product.php">Shop</a>
							</li>

							<li>
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
						echo "<a href='user-account.php' class='header-wrapicon1 dis-block'>
						<img src='images/icons/icon-header-01.png' class='header-icon1' alt='ICON' <p>"; echo ' '.$_SESSION['username']; echo" </p>
						</a>";
                    
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
			Change Password
		</h2>
		<p class="m-text13 t-center">
        
		</p>
	</section>

	<!-- content page -->
	<section class="bgwhite p-t-66 p-b-60">
		<div class="container">
			<div class="row">
				<div class="col-md-3 p-b-30">
					<div class="p-r-20 p-r-0-lg">
						<div >
						
						</div>
					</div>
				</div>

				<div class="col-md-6 p-b-30">
					<form class="leave-comment" action="password.php" method="post">

						<div class="bo4 of-hidden size15 m-b-20">
							<input class="sizefull s-text7 p-l-22 p-r-22" type="password" name="pass1" placeholder="Current Password" required>
						</div>

						<div class="bo4 of-hidden size15 m-b-20">
							<input class="sizefull s-text7 p-l-22 p-r-22" type="password" name="pass2" placeholder="New Password" required>
						</div>

						<div class="bo4 of-hidden size15 m-b-20">
							<input class="sizefull s-text7 p-l-22 p-r-22" type="password" name="pass3" placeholder="Confirm Password" required>
						</div>


						<div class="w-size25">
							<!-- Button -->
							<button name="update"class="flex-c-m size2 bg1 bo-rad-23 hov1 m-text3 trans-0-4">
								Save changes
							</button>
						</div>
					</form>

					<?php
							if(isset($_POST['update'])){
								
								$user=$_SESSION['username'];
								$get_user = "select * from tbluser where username='$user'";
									$run_user = mysqli_query($conn,$get_user);
												
										if($row=mysqli_fetch_array($run_user)){
											
											
											$curPass=$_POST['pass1'];
											$newPass=$_POST['pass2'];
											$conPass=$_POST['pass3'];
											
											if ($newPass==$conPass) {

											$conPass=md5($conPass);
											$update = "update tbluser set password='$conPass' where username='$user'";

											$run_up_update = mysqli_query($conn,$update);
											
											echo "<script>window.open('index.php','_self')</script>";

											}else{

												echo "<script>alert('Password Do not match')</script>";

											}			
										}else {
											echo "<script>alert('User is not logged on')</script>";
											echo "<script>window.open('password.php','_self')</script>";
										}

										
									}
						?>
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
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAKFWBqlKAGCeS1rMVoaNlwyayu0e0YRes"></script>
	<script src="js/map-custom.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>
