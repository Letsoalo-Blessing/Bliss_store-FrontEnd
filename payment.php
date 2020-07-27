<?php

session_start();
include("includes/db.php");
include("includes/functions.php");
//product details


global $conn;
$ip=getIp();
$get_items = "select * from tblcart where ip_add='$ip'";
$run_items = mysqli_query($conn,$get_items);

while($p_price=mysqli_fetch_array($run_items)){
	$total=0;	
	$pro_id = $p_price['prod_id'];
	$pro_price="select * from tblproduct where prodID='$pro_id'"; 
	$run_pro_price = mysqli_query($conn,$pro_price);
	
		while($pp_price=mysqli_fetch_array($run_pro_price)){
				$pro_price = array($pp_price['unitPrice']);
				$pr_id = array($pp_price['prodID']);
				$values = array_sum($pro_price);
				$total+=$values;
		}

//product qty
$get_qty = "select * from tblcart where prod_id='$pro_id'";
$run_qty = mysqli_query($conn,$get_qty);
$row_qty = mysqli_fetch_array($run_qty);
$qty = $row_qty['Qty'];

//customer details
$username = $_SESSION['username'];
$get_c = "select * from tbluser where username='$username'";
$run_c = mysqli_query($conn,$get_c);
$row_c = mysqli_fetch_array($run_c);
$c_id = $row_c['userid'];



$insert_payments = "insert into tblpayment (amount,userid,prodID,payment_date)values ('$total','$c_id','$pro_id',NOW());";

$run_payments = mysqli_query($conn,$insert_payments);

$insert_orders = "insert into tblorder (prodID,userid,Qty) values ('$pro_id','$c_id','$qty');";
$run_orders = mysqli_query($conn,$insert_orders);


$empty_cart = "delete from tblcart where ip_add='$ip'";
$run_cart = mysqli_query($conn,$empty_cart);	
}
//echo "<script>window.open('index.php','_self')</script>";

?>
