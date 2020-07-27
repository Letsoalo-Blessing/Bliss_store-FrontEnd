<?php

	$servername ="localhost";
	$username="root";
	$password="";
	$dbname="projectDB";

	//create connection
	$db = mysqli_connect($servername,$username,$password,$dbname);
//displaying all products
function getPro(){
	global $db;
	if(!isset($_GET['cat'])){
	
					$get_products = "select * from tblproduct ORDER BY unitPrice";
	}
	
	//showing particular category products
	else{
					$pro_id = $_GET['ProdID'];
					$get_products = "select * from tblproduct where prodID='$pro_id' order ASC";
	}
					$run_products = mysqli_query($db,$get_products);
					
					$count = mysqli_num_rows($run_products);
					if($count==0){
						echo "<br /><br/>
						<h2 class='m-text14 p-b-7'>
						No Products Found !!
						</h2>";	
					}
					
					
					while($row_products = mysqli_fetch_array($run_products)){
						
						$pro_id = $row_products['prodID'];
						$pro_title = $row_products['Descr'];
						$pro_price = $row_products['unitPrice'];
						$pro_img1 = $row_products['image'];
					
					
					echo "
					<div class='col-sm-12 col-md-6 col-lg-4 p-b-50'>
					<!-- Block2 -->
					<div class='block2'>
						<div class='block2-img wrap-pic-w of-hidden pos-relative'>
							<img src='$pro_img1' alt='IMG-PRODUCT'>
							<div class='block2-overlay trans-0-4'>
								<a href='#' class='block2-btn-addwishlist hov-pointer trans-0-4'>
									<i class='icon-wishlist icon_heart_alt' aria-hidden='true'></i>
									<i class='icon-wishlist icon_heart dis-none' aria-hidden='true'></i>
								</a>

								<div class='block2-btn-addcart w-size1 trans-0-4'>
									<!-- Button -->
									<a href='product.php?add_cart=$pro_id' class='flex-c-m size1 bg4 bo-rad-23 hov1 s-text1 trans-0-4'>
										Add to Cart
									</a>
									
								</div>
							</div>
						</div>
						<div class='block2-txt p-t-20'>
						<a href='#'>
								$pro_title
						</a><br />
							<span class='block2-price m-text6 p-r-5' name='unitPrice'>
								R $pro_price
							</span>
						</div>
					</div>
				</div>";
					}
			
			
					
	
}
function getClothing(){
	global $db;
	if(!isset($_GET['cat'])){
	
					$get_products = "select * from tblproduct where category like 'clothing'";
	}
	
	//showing particular category products
	else{
					$pro_id = $_GET['ProdID'];
					$get_products = "select * from tblproduct where prodID='$pro_id' order ASC";
	}
					$run_products = mysqli_query($db,$get_products);
					
					$count = mysqli_num_rows($run_products);
					if($count==0){
						echo "<br /><br/>
						<h2 class='m-text14 p-b-7'>
						No Products Found !!
						</h2>";	
					}
					
					while($row_products = mysqli_fetch_array($run_products)){
						
						$pro_id = $row_products['prodID'];
						$pro_title = $row_products['Descr'];
						$pro_price = $row_products['unitPrice'];
						$pro_img1 = $row_products['image'];
					
					
					echo "
					<div class='col-sm-12 col-md-6 col-lg-4 p-b-50'>
					<!-- Block2 -->
					<div class='block2'>
						<div class='block2-img wrap-pic-w of-hidden pos-relative'>
							<img src='$pro_img1' alt='IMG-PRODUCT' width='620' height='350' >
							<div class='block2-overlay trans-0-4'>
								<a href='#' class='block2-btn-addwishlist hov-pointer trans-0-4'>
									<i class='icon-wishlist icon_heart_alt' aria-hidden='true'></i>
									<i class='icon-wishlist icon_heart dis-none' aria-hidden='true'></i>
								</a>

								<div class='block2-btn-addcart w-size1 trans-0-4'>
									<!-- Button -->
									<a href='product.php?add_cart=$pro_id' class='flex-c-m size1 bg4 bo-rad-23 hov1 s-text1 trans-0-4'>
										Add to Cart
									</a>
									
								</div>
							</div>
						</div>
						<div class='block2-txt p-t-20'>
						<a href='#'>
								$pro_title
						</a><br />
							<span class='block2-price m-text6 p-r-5' name='unitPrice'>
								R $pro_price
							</span>
						</div>
					</div>
				</div>";
					}
					
	
}
function getAccessories(){
	global $db;
	if(!isset($_GET['cat'])){
	
					$get_products = "select * from tblproduct where category like 'accessories'";
	}
	
	//showing particular category products
	else{
					$pro_id = $_GET['ProdID'];
					$get_products = "select * from tblproduct where prodID='$pro_id' order ASC";
	}
					$run_products = mysqli_query($db,$get_products);
					
					$count = mysqli_num_rows($run_products);
					if($count==0){
						echo "<br /><br/>
						<h2 class='m-text14 p-b-7'>
						No Products Found !!
						</h2>";	
					}
					
					while($row_products = mysqli_fetch_array($run_products)){
						
						$pro_id = $row_products['prodID'];
						$pro_title = $row_products['Descr'];
						$pro_price = $row_products['unitPrice'];
						$pro_img1 = $row_products['image'];
					
					
					echo "
					<div class='col-sm-12 col-md-6 col-lg-4 p-b-50'>
					<!-- Block2 -->
					<div class='block2'>
						<div class='block2-img wrap-pic-w of-hidden pos-relative'>
							<img src='$pro_img1' alt='IMG-PRODUCT' width='620' height='350' >
							<div class='block2-overlay trans-0-4'>
								<a href='#' class='block2-btn-addwishlist hov-pointer trans-0-4'>
									<i class='icon-wishlist icon_heart_alt' aria-hidden='true'></i>
									<i class='icon-wishlist icon_heart dis-none' aria-hidden='true'></i>
								</a>

								<div class='block2-btn-addcart w-size1 trans-0-4'>
									<!-- Button -->
									<a href='product.php?add_cart=$pro_id' class='flex-c-m size1 bg4 bo-rad-23 hov1 s-text1 trans-0-4'>
										Add to Cart
									</a>
									
								</div>
							</div>
						</div>
						<div class='block2-txt p-t-20'>
						<a href='#'>
								$pro_title
						</a><br />
							<span class='block2-price m-text6 p-r-5' name='unitPrice'>
								R $pro_price
							</span>
						</div>
					</div>
				</div>";
					}
					
	
}
function getLaptops(){
	global $db;
	if(!isset($_GET['cat'])){
	
					$get_products = "select * from tblproduct where category like 'Laptops'";
	}
	
	//showing particular category products
	else{
					$pro_id = $_GET['ProdID'];
					$get_products = "select * from tblproduct where prodID='$pro_id' order ASC";
	}
					$run_products = mysqli_query($db,$get_products);
					
					$count = mysqli_num_rows($run_products);
					if($count==0){
						echo "<br /><br/>
						<h2 class='m-text14 p-b-7'>
						No Products Found !!
						</h2>";	
					}
					
					while($row_products = mysqli_fetch_array($run_products)){
						
						$pro_id = $row_products['prodID'];
						$pro_title = $row_products['Descr'];
						$pro_price = $row_products['unitPrice'];
						$pro_img1 = $row_products['image'];
					
					
					echo "
					<div class='col-sm-12 col-md-6 col-lg-4 p-b-50'>
					<!-- Block2 -->
					<div class='block2'>
						<div class='block2-img wrap-pic-w of-hidden pos-relative'>
							<img src='$pro_img1' alt='IMG-PRODUCT' width='620' height='350' >
							<div class='block2-overlay trans-0-4'>
								<a href='#' class='block2-btn-addwishlist hov-pointer trans-0-4'>
									<i class='icon-wishlist icon_heart_alt' aria-hidden='true'></i>
									<i class='icon-wishlist icon_heart dis-none' aria-hidden='true'></i>
								</a>

								<div class='block2-btn-addcart w-size1 trans-0-4'>
									<!-- Button -->
									<a href='product.php?add_cart=$pro_id' class='flex-c-m size1 bg4 bo-rad-23 hov1 s-text1 trans-0-4'>
										Add to Cart
									</a>
									
								</div>
							</div>
						</div>
						<div class='block2-txt p-t-20'>
						<a href='#'>
								$pro_title
						</a><br />
							<span class='block2-price m-text6 p-r-5' name='unitPrice'>
								R $pro_price
							</span>
						</div>
					</div>
				</div>";
					}
					
	
}
function getCameras(){
	global $db;
	if(!isset($_GET['cat'])){
	
					$get_products = "select * from tblproduct where category like 'Cameras'";
	}
	
	//showing particular category products
	else{
					$pro_id = $_GET['ProdID'];
					$get_products = "select * from tblproduct where prodID='$pro_id' order ASC";
	}
					$run_products = mysqli_query($db,$get_products);
					
					$count = mysqli_num_rows($run_products);
					if($count==0){
						echo "<br /><br/>
						<h2 class='m-text14 p-b-7'>
						No Products Found !!
						</h2>";	
					}
					
					while($row_products = mysqli_fetch_array($run_products)){
						
						$pro_id = $row_products['prodID'];
						$pro_title = $row_products['Descr'];
						$pro_price = $row_products['unitPrice'];
						$pro_img1 = $row_products['image'];
					
					
					echo "
					<div class='col-sm-12 col-md-6 col-lg-4 p-b-50'>
					<!-- Block2 -->
					<div class='block2'>
						<div class='block2-img wrap-pic-w of-hidden pos-relative'>
							<img src='$pro_img1' alt='IMG-PRODUCT' width='620' height='350' >
							<div class='block2-overlay trans-0-4'>
								<a href='#' class='block2-btn-addwishlist hov-pointer trans-0-4'>
									<i class='icon-wishlist icon_heart_alt' aria-hidden='true'></i>
									<i class='icon-wishlist icon_heart dis-none' aria-hidden='true'></i>
								</a>

								<div class='block2-btn-addcart w-size1 trans-0-4'>
									<!-- Button -->
									<a href='product.php?add_cart=$pro_id' class='flex-c-m size1 bg4 bo-rad-23 hov1 s-text1 trans-0-4'>
										Add to Cart
									</a>
									
								</div>
							</div>
						</div>
						<div class='block2-txt p-t-20'>
						<a href='#'>
								$pro_title
						</a><br />
							<span class='block2-price m-text6 p-r-5' name='unitPrice'>
								R $pro_price
							</span>
						</div>
					</div>
				</div>";
					}
					
	
}
function gettvGames(){
	global $db;
	if(!isset($_GET['cat'])){
	
					$get_products = "select * from tblproduct where category like 'tvGames'";
	}
	
	//showing particular category products
	else{
					$pro_id = $_GET['ProdID'];
					$get_products = "select * from tblproduct where prodID='$pro_id' order ASC";
	}
					$run_products = mysqli_query($db,$get_products);
					
					$count = mysqli_num_rows($run_products);
					if($count==0){
						echo "<br /><br/>
						<h2 class='m-text14 p-b-7'>
						No Products Found !!
						</h2>";	
					}
					
					while($row_products = mysqli_fetch_array($run_products)){
						
						$pro_id = $row_products['prodID'];
						$pro_title = $row_products['Descr'];
						$pro_price = $row_products['unitPrice'];
						$pro_img1 = $row_products['image'];
					
					
					echo "
					<div class='col-sm-12 col-md-6 col-lg-4 p-b-50'>
					<!-- Block2 -->
					<div class='block2'>
						<div class='block2-img wrap-pic-w of-hidden pos-relative'>
							<img src='$pro_img1' alt='IMG-PRODUCT' width='620' height='350' >
							<div class='block2-overlay trans-0-4'>
								<a href='#' class='block2-btn-addwishlist hov-pointer trans-0-4'>
									<i class='icon-wishlist icon_heart_alt' aria-hidden='true'></i>
									<i class='icon-wishlist icon_heart dis-none' aria-hidden='true'></i>
								</a>

								<div class='block2-btn-addcart w-size1 trans-0-4'>
									<!-- Button -->
									<a href='product.php?add_cart=$pro_id' class='flex-c-m size1 bg4 bo-rad-23 hov1 s-text1 trans-0-4'>
										Add to Cart
									</a>
									
								</div>
							</div>
						</div>
						<div class='block2-txt p-t-20'>
						<a href='#'>
								$pro_title
						</a><br />
							<span class='block2-price m-text6 p-r-5' name='unitPrice'>
								R $pro_price
							</span>
						</div>
					</div>
				</div>";
					}
					
	
}
function getPhones(){
	global $db;
	if(!isset($_GET['cat'])){
	
					$get_products = "select * from tblproduct where category like 'phones'";
	}
	
	//showing particular category products
	else{
					$pro_id = $_GET['ProdID'];
					$get_products = "select * from tblproduct where prodID='$pro_id' order ASC";
	}
					$run_products = mysqli_query($db,$get_products);
					
					$count = mysqli_num_rows($run_products);
					if($count==0){
						echo "<br /><br/>
						<h2 class='m-text14 p-b-7'>
						No Products Found !!
						</h2>";	
					}
					
					while($row_products = mysqli_fetch_array($run_products)){
						
						$pro_id = $row_products['prodID'];
						$pro_title = $row_products['Descr'];
						$pro_price = $row_products['unitPrice'];
						$pro_img1 = $row_products['image'];
					
					
					echo "
					<div class='col-sm-12 col-md-6 col-lg-4 p-b-50'>
					<!-- Block2 -->
					<div class='block2'>
						<div class='block2-img wrap-pic-w of-hidden pos-relative'>
							<img src='$pro_img1' alt='IMG-PRODUCT' width='620' height='350' >
							<div class='block2-overlay trans-0-4'>
								<a href='#' class='block2-btn-addwishlist hov-pointer trans-0-4'>
									<i class='icon-wishlist icon_heart_alt' aria-hidden='true'></i>
									<i class='icon-wishlist icon_heart dis-none' aria-hidden='true'></i>
								</a>

								<div class='block2-btn-addcart w-size1 trans-0-4'>
									<!-- Button -->
									<a href='product.php?add_cart=$pro_id' class='flex-c-m size1 bg4 bo-rad-23 hov1 s-text1 trans-0-4'>
										Add to Cart
									</a>
									
								</div>
							</div>
						</div>
						<div class='block2-txt p-t-20'>
						<a href='#'>
								$pro_title
						</a><br />
							<span class='block2-price m-text6 p-r-5' name='unitPrice'>
								R $pro_price
							</span>
						</div>
					</div>
				</div>";
					}
					
	
}
//getting user IP
function getIp() {
    $ip = $_SERVER['REMOTE_ADDR'];
 
    if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
        $ip = $_SERVER['HTTP_CLIENT_IP'];
    } elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
        $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
    }
 
    return $ip;
}

//adding to cart  
function cart(){
	
	if(isset($_GET['add_cart'])){
		global $conn;
		$ip=getIp();
		$pro_id = $_GET['add_cart'];
		$check_pro = "select * from tblcart where ip_add='$ip' AND prod_id='$pro_id'";
		
		$run_check = mysqli_query($conn,$check_pro);
		
		if(mysqli_num_rows($run_check)>0){
			echo "";	
		}
		else{
			$insert_pro = "insert into tblcart (prod_id,ip_add,qty) values ('$pro_id','$ip',1)";
			$run_pro = mysqli_query($conn,$insert_pro);
			
			echo "<script>window.open('product.php','_self')</script>";
		}
	}
}
//getting total items in the cart
function total_items(){
	global $conn;
	$ip=getIp();
	$get_items = "select * from tblcart where ip_add='$ip'";
	$run_items = mysqli_query($conn,$get_items);
	$count_items = mysqli_num_rows($run_items);
	
	echo $count_items;
}

//getting total price pf the cart
function total_price(){
	
	$total=0;
	
	global $conn;
	$ip=getIp();
	$get_items = "select * from tblcart where ip_add='$ip'";
	$run_items = mysqli_query($conn,$get_items);
	
	while($p_price=mysqli_fetch_array($run_items)){
		
		$pro_id = $p_price['prod_id'];
		$pro_price="select * from tblproduct where prodID='$pro_id'"; 
		$run_pro_price = mysqli_query($conn,$pro_price);
		
			while($pp_price=mysqli_fetch_array($run_pro_price)){
					$pro_price = array($pp_price['unitPrice']);
					$values = array_sum($pro_price);
					
					$total+=$values;
			}
	}
	echo "R ".$total;
}


?>






