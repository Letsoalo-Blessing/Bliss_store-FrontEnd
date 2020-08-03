<?php

session_start();
include("includes/db.php");
include("includes/functions.php");
 
?>


<!DOCTYPE html>
<html lang="en" ng-App="myRegister">
<head>
	<title>Register</title>
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
	<link rel="stylesheet" type="text/css" href="vendor/noui/nouislider.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/sb-admin-2.min.css">
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
	<script type="text/javascript" src="angularjs/angular.js"></script>
	<script type="text/javascript" src="angularjs/angular.min.js"></script>
<!--===============================================================================================-->
</head>
<body class="animsition" ng-controller="RegisterCtrl">

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

				<div class="topbar-child2">
					<span style="margin-right:50px">
					<nav class="menu">
						<ul class="main_menu">
							<li style="margin-left:100px">
								<a href="login.php">Login/Register</a>
							</li>
							<span class="linedivide1"></span>
							<li>
								<a href="./">My Account</a>
								<ul class="sub_menu">
									<li><a href="password.php">Change Password</a></li>
									<li><a href="logout.php">Logout</a></li>
								</ul>
							</li>
						</ul>
					</nav>
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

							<li class="sale-noti">
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
							echo "<a href='#' class='header-wrapicon1 dis-block'>
							<img src='images/icons/icon-header-01.png' class='header-icon1 js-show-header-dropdown' alt='ICON' <p>"; echo ' '.$_SESSION['username']; echo"</p>
							</a>
							";
                    
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
			Update Account
		</h2>
		<p class="m-text13 t-center">
        
		</p>
	</section>

	<!-- Content page -->
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
				<?php
									global $conn;
									$user=$_SESSION['username'];
									$get_user ="SELECT * FROM tbluser WHERE username='$user'";
									$run_items = mysqli_query($conn,$get_user);
									
									while($p_price=mysqli_fetch_array($run_items)){
										
										$email = $p_price['email'];
										$province=$p_price['province'];
										$city=$p_price['city'];
										$address=$p_price['address'];
										
									}
										
									
						?>
					<form class="leave-comment" action="user-account.php" method="post">
						<h4 class="m-text26 p-b-36 p-t-15">
							UPDATE AN ACCOUNT
						</h4>

						<div class="bo4 of-hidden size15 m-b-20">
							<input type="text" name="username" class="sizefull s-text7 p-l-22 p-r-22"  value="<?php echo $user?>" placeholder="Enter Username" required>
						</div>
						<div class="bo4 of-hidden size15 m-b-20">
							<input type="text" name="email" class="sizefull s-text7 p-l-22 p-r-22"  value="<?php echo $email?>" placeholder="Enter Email Address" required>
						</div>
						<div class="bo4 of-hidden size15 m-b-20">
						<select name="province" class="sizefull s-text7 p-l-22 p-r-22">
                                  <option value="<?php echo $province?>"><?php echo $province?></option>
                                  <option value="Gauteng">Gauteng</option>
                                  <option value="Limpopo">Limpopo</option>
                                  <option value="Kwa Zulu Natal">Kwa Zulu Natal</option>
								  <option value="Mpumalanga">Mpumalanga</option>
								  <option value="Free State">Free State</option>
                                  <option value="North West">North West</option>
                                  <option value="Northern Cape">Northern Cape</option>
                                  <option value="Western Cape">Western Cape</option>
                                  <option value="Easten Cape">Easten Cape</option>
                        </select>
						</div>
						<div class="bo4 of-hidden size15 m-b-20">
							<input type="text" name="city" class="sizefull s-text7 p-l-22 p-r-22" value="<?php echo $city ?>" placeholder="Enter City/Town" required>
						</div>
						<textarea class="dis-block s-text7 size20 bo4 p-l-22 p-r-22 p-t-13 m-b-20"  name="address" placeholder="Enter Address">
						<?php echo $address ?>
						</textarea>
						<div class="text-danger" ng-model="result">
						<span>
						<?php
							if(isset($_SESSION['message']))
							{
								echo $_SESSION['message'];
								unset($_SESSION['message']);
							}
						?>
						</span>
						</div><br/>
						<div class="w-size25">
							<!-- Button -->
							<input type="submit" name="update" value="Update"  class="flex-c-m size2 bg1 bo-rad-23 hov1 m-text3 trans-0-4"/>
						</div>
						
						<?php}?>
					</form>
						

						<?php
							if(isset($_POST['update'])){
								
								$user=$_SESSION['username'];
								$get_user = "select * from tbluser where username='$user'";
									$run_user = mysqli_query($conn,$get_user);
												
										if($row=mysqli_fetch_array($run_user)){
											
											
											$new_email=$_POST['email'];
											$new_province=$_POST['province'];
											$new_city=$_POST['city'];
											$new_address=$_POST['address'];
		
											$update = "update tbluser set email='$new_email',province='$new_province',
											city='$new_city',address='$new_address' where username='$user'";

											$run_up_update = mysqli_query($conn,$update);
													
										}

										if($run_product){
											echo "<script>alert('Updated successfully')</script>";
										}
										echo "<script>window.open('user-account.php','_self')</script>";
									}
						?>
				</div>
			</div>
		</div>
	</section>


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
	<script src="angularjs/angular.js"></script>
	<script src="angularScripts/Register_script.js"></script>
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
	<script type="text/javascript" src="vendor/daterangepicker/moment.min.js"></script>
	<script type="text/javascript" src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script type="text/javascript" src="vendor/slick/slick.min.js"></script>
	<script type="text/javascript" src="js/slick-custom.js"></script>
<!--===============================================================================================-->
	<script type="text/javascript" src="vendor/sweetalert/sweetalert.min.js"></script>
	<script type="text/javascript">
		$('.block2-btn-addcart').each(function(){
			var nameProduct = $(this).parent().parent().parent().find('.block2-name').html();
			$(this).on('click', function(){
				swal(nameProduct, "is added to cart !", "success");
			});
		});

		$('.block2-btn-addwishlist').each(function(){
			var nameProduct = $(this).parent().parent().parent().find('.block2-name').html();
			$(this).on('click', function(){
				swal(nameProduct, "is added to wishlist !", "success");
			});
		});
	</script>

<!--===============================================================================================-->
	<script type="text/javascript" src="vendor/noui/nouislider.min.js"></script>
	<script type="text/javascript">
		/*[ No ui ]
	    ===========================================================*/
	    var filterBar = document.getElementById('filter-bar');

	    noUiSlider.create(filterBar, {
	        start: [ 50, 200 ],
	        connect: true,
	        range: {
	            'min': 50,
	            'max': 200
	        }
	    });

	    var skipValues = [
	    document.getElementById('value-lower'),
	    document.getElementById('value-upper')
	    ];

	    filterBar.noUiSlider.on('update', function( values, handle ) {
	        skipValues[handle].innerHTML = Math.round(values[handle]) ;
	    });
	</script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>
