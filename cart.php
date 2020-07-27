<?php

session_start();
include("includes/db.php");
include("includes/functions.php");

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Cart</title>
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
<link rel="stylesheet" type="text/css" href="css/style.css">
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
						<a class="topbar-child1" href="#">MY ACCOUNT</a>
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
							<li class="sale-noti">
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
			Shopping Cart
		</h2>
		<p class="m-text13 t-center">
        
		</p>
	</section>

	<!-- Cart -->
	<section class="cart bgwhite p-t-70 p-b-100">
		<div class="container">
			<!-- Cart item -->
			<div class="col-md-12">
					<form action="" method="post"> 
						<div class="order-summary clearfix">
							<table class="shopping-cart-table table">
								<thead>
									<tr>
										<th>Product</th>
										<th></th>
										<th class="text-center">Price</th>
										<th class="text-center">Quantity</th>
										<th class="text-center">Total</th>
										<th class="text-right"></th>
									</tr>
								</thead>
								<tbody>
								<?php
									$total=0;
									global $conn;
									$ip=getIp();
									$get_items = "select * from tblcart where ip_add='$ip'";
									$run_items = mysqli_query($conn,$get_items);
									
									while($p_price=mysqli_fetch_array($run_items)){
										
										$pro_id = $p_price['prod_id'];
										$qty = $p_price['Qty'];
										
										$pro_price="select * from tblproduct where prodID='$pro_id'"; 
										$run_pro_price = mysqli_query($conn,$pro_price);
										
											while($pp_price=mysqli_fetch_array($run_pro_price)){
													
													
													$product_price = array($pp_price['unitPrice']);
													$product_category = $pp_price['category'];
													$product_title = $pp_price['Descr'];
													$product_image = $pp_price['image'];
													$single_price = $pp_price['unitPrice'];
													$qty_price = $single_price * $qty;
													$total+=$qty_price;
								?>
									<tr>
										<td class="thumb"><img src="<?php echo $product_image; ?>" alt=""></td>
										<td class="details">
											<a href="#"><?php echo $product_title; ?></a>
											<ul>
												<li><span>Category: <?php echo $product_category; ?></span></li>
											</ul>
										</td>
										<td class="price text-center"><strong><?php echo "R ".$single_price; ?></strong></td>
										<td class="qty text-center"><input class="input" type="number" value="<?php echo $qty; ?>" name="Qty<?php echo $pro_id; ?>"></td>
										<?php
											if(isset($_POST['update_cart'])){
												
												$get_cart = "select * from tblcart where ip_add='$ip' AND prod_id='$pro_id'";
												$run_cat = mysqli_query($conn,$get_cart);
												
												if($carts=mysqli_fetch_array($run_cat)){
													
													$pro_id=$carts['prod_id'];
													$new_qty=$_POST['Qty'.$pro_id];
													$update_qty = "update tblcart set Qty='$new_qty' where prod_id='$pro_id'";
													$run_up_qty = mysqli_query($conn,$update_qty);
													
												}
												echo "<script>window.open('cart.php','_self')</script>";
											}
										?>
										
									<?php
										if(isset($_GET['delete'])){

											$delete_id=$_GET['delete'];
		
											mysqli_query($conn,"DELETE FROM tblcart WHERE prod_id='$delete_id'");
										}
									?>
									
										<td class="total text-center"><strong class="primary-color"><?php echo "R ".$qty_price; ?></strong></td>
										<td class="text-right">
											<a class="main-btn icon-btn" href="cart.php?delete=<?php echo $pro_id?>">
												<i class="fa fa-close"></i>
											</a>
										</td>
									</tr>
								<?php
										
									} 
								}
								?>
								</tbody>
								<tfoot>
									<tr>
										<th class="empty" colspan="3"></th>
										<th>TOTAL</th>
										<th colspan="2" class="total"><?php echo "R ".$total; ?></th>
									</tr>
								</tfoot>
							</table>
								<div class="pull-right" >

								<input type="submit" name="checkout" value="Checkout" class="primary-btn">

								</div> 
							<div class="pull-right" style="margin-right:10px">
								<input class="primary-btn" type="submit" name="update_cart" value="Update Cart">
							</div>
						</div>
						</div>
					</form>

					<?php
				
						if(isset($_POST['checkout'])){
							
							if(!isset($_SESSION['username'])){
									echo "<script>alert('You must login to place an order')</script>";
							}
							
							else{
									echo "<script>window.open('checkout.php','_self')</script>";
							}
						}
			
					?>
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


<script>
	function myFunction() {
  // Get the checkbox
  var rdaCollection = document.getElementById("rdCollection");
  // Get the output text
  var text = document.getElementById("text");

  // If the checkbox is checked, display the output text
  if (rdaCollection.checked == true){
		
  } else {
    text.style.display = "none";
  }
}
</script>
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
