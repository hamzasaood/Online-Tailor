


<?php 
include "header.php";
include("form/connection.php");
 if(!isset($_SESSION['u_id'])){
	echo "<script>alert('Login to complete your order');</script>";
	echo "<script>window.location.href='form/login.php';</script>";
}
else{
	
	if($_GET['qty']>0){
	
 $orderSql = "SELECT * FROM tb_cart where status='0' AND u_id='$uid'";
$orderQuery = $mysqli->query($orderSql);
$users = $orderQuery->num_rows;
  
  

  $age[$users]=$_GET['qty'];
 $ab[$users]=$_GET['pid'];
 $val=array_combine($age[$users],$ab[$users]);
foreach($val as $x=>$y){


 
	
//print_r($ab[$users],$age[$users]);
	
	$uid=$_SESSION['u_id'];	
		
		
		$s = "select * from products where p_id='$y'";
						$res = mysqli_query($mysqli, $s);
				if ($res->num_rows > 0)
				{ 
while ($rw = $res->fetch_object()){
$price=$rw->price;
		$shop=$rw->shop_name;	


}
				}
		

if(isset($_POST['colr']))
{
	$coler=$_POST['colr'];
	$chest=$_POST['chest'];
	$waist=$_POST['waist'];
	$swidth=$_POST['sh_width'];
	$slen=$_POST['shirt_l'];
	//$qty=$_POST['qty'];

$arm=$_POST['arml'];
$pant=$_POST['pantl'];
$uid=$_SESSION['u_id'];
$odate=date('y/m/d');
$tprice=$price*$x;
$sql = "INSERT INTO tb_order (colr,chest,waist,shirt_l,sholder_width,arm_l,pant_l,u_id,p_id,qty,status,o_id,odat,shop_name,price)
     VALUES ('$coler','$chest','$waist','$swidth','$slen','$arm','$pant','$uid','$y','$x','0','0','$odate','$shop','$tprice')";




if ($mysqli->query($sql) === TRUE) {
	
		
	$s="update tb_cart set status='1' where u_id=$uid";
	mysqli_query($mysqli,$s);
	
	
echo "<script>alert('Order placed');</script>";
	echo "<script>window.location.href='product.php';</script>";
   
 /*$sl = "Select * from signup where u_id='$uid'";
 $res=mysqli_query($mysqli,$sl);
if ($res->num_rows > 0)
				{ 
while ($rw = $res->fetch_object()){
$email=$rw->email;

}
				} 
 $to_email = $email;
$subject = 'Testing PHP Mail';
$message = 'This mail is sent using the PHP mail function';
$headers = 'From: awais03366@gmail.com';
mail($to_email,$subject,$message,$headers);

*/
} 

else {
    echo "Error creating database: " . $mysqli->error;
	
       }
}
	}}
	else{
          		
		echo "<script>alert('No product in Cart Try again');</script>";
	}
 ?>










<!DOCTYPE html>
<!-- 
Template Name: Tailor Html Template
Version: 1.0.0
-->
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]> -->
<html lang="en">
<!-- <![endif]-->
<!-- BEGIN HEAD -->

<!-- Mirrored from templatebundle.net/templates/tailor-html-template/checkout.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 27 Nov 2019 14:36:24 GMT -->
<head>
	<title>Tailor Online</title>
	<meta charset="utf-8" />
	<meta content="width=device-width, initial-scale=1.0" name="viewport" />
	<meta name="description" content="Tailor Html Template" />
	<meta name="keywords" content="Tailor, Tailor Html, fashion template, fashion website template, garments website template, fashion website template">
	<meta name="author" content="TemplateBundle" />
	<meta name="MobileOptimized" content="320" />
	<link href="https://fonts.googleapis.com/css?family=Krub:400,400i,500,500i,600,600i,700,700i|Sarabun:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i" rel="stylesheet">
	<!-- main style -->
	<link href="css/main.css" rel="stylesheet" type="text/css"/>
	<!-- main style -->
	<!-- favicon-icon -->
	<link rel="icon" type="image/png" href="images/icon/favicon.png">
	<!-- favicon-icon -->
</head>
<!-- END HEAD -->
<!--body start-->
<body>
<!-- login signup popup Start -->

<!-- login signup popup End -->
<!-- header menu start -->
<?php //include "header.php"; ?>
<!-- header menu end -->
<!-- breadcrumb section start -->
<div class="main_section tl_page_banner">
	<div class="container">
		<div class="row">
			<div class="col-md-12 col-xs-12 text-center wow fadeInUp" data-wow-delay="0.1s">
				<div class="tl_banner_wrapper">
					<div class="page_heading wow fadeInLeft" data-wow-delay="0.2s">
						<h1>Check out</h1>
					</div>
					<div class="breadcrumbs wow fadeInRight" data-wow-delay="0.2s">
						<ul>
							<li><a href="#">Home</a></li>
							<li>Check out</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- breadcrumb section End -->
<!-- Mens section Start -->
<div class="main_section pad_top_86 pad_bottom_86 tl_checkout_wrapper">
	<div class="container">
		<div class="row">
			<div class="col-lg-10 col-sm-12 col-xs-12 col-lg-offset-1">
				<div class="checkout_wrapper_box">
				  <ul id="progressbar">
						<li class="active">Measurements</li>
						<li>Payment</li>
						<li>Receipt</li>    
					</ul>
										<form method="post">

					<div class="woocommerce_billing step">
						<div class="row">
							<div class="col-lg-6 col-md-6 wow fadeInLeft" data-wow-delay="0.2s">
								<div class="form-group">
									<input name="colr" type="text" placeholder="Coler Size*" class="form-control">
								</div>
							</div>
							<div class="col-lg-6 col-md-6 wow fadeInRight" data-wow-delay="0.2s">
								<div class="form-group">
									<input name="chest" type="text" placeholder="Chest Size*" class="form-control">
								</div>
							</div>
							<div class="col-lg-6 col-md-6 wow fadeInLeft" data-wow-delay="0.2s">
								<div class="form-group">
									<input name="shirt_l" type="text" placeholder="Shirt Length*" class="form-control">
								</div>
							</div>
							<div class="col-lg-6 col-md-6 wow fadeInRight" data-wow-delay="0.2s">
								<div class="form-group">
									<input name="sh_width" type="text" placeholder="Shoulder Width*" class="form-control">
								</div>
							</div>
							<div class="col-lg-6 col-md-6 wow fadeInLeft" data-wow-delay="0.2s">
								<div class="form-group">
									<input name="arml" type="text" placeholder="Arm Length*" class="form-control">
								</div>
							</div>
							
							
							<div class="col-lg-6 col-md-6 wow fadeInRight" data-wow-delay="0.2s">
								<div class="form-group">
									<input name="waist" type="text" placeholder="Your Waist*" class="form-control">
								</div>
							</div>
							<div class="col-lg-6 col-md-6 wow fadeInRight" data-wow-delay="0.2s">
								<div class="form-group">
									<input name="pantl" type="text" placeholder="Pant Length*" class="form-control">
								</div>
							</div>
							
						</div>
						<div class="form-group checkbox">
							
						</div>
						<button type="submit" class="t_btn next">Submit</button>
					</div>
					</form>
					<div class="woocommerce_billing step">
						<div class="row">
							<div class="col-md-6 col-xs-12">
								<div class="tl_check_payment_method">
									<div class="form-group">
										<label>Debit Card</label>
										<input type="text" class="form-control" placeholder="Card Holder Name">
										<input type="text" class="form-control" placeholder="card number">
										<input type="text" class="form-control" placeholder="Security Code">
										<div class="expiry_date">
											<label>Expiry Date</label>
											<select class="form-control">
												<option>Mon</option>
												<option>01</option>
												<option>02</option>
												<option>03</option>
												<option>04</option>
												<option>05</option>
												<option>06</option>
												<option>07</option>
												<option>08</option>
												<option>09</option>
												<option>10</option>
												<option>11</option>
												<option>12</option>
											</select>
											<select class="form-control">
												<option>Year</option>
												<option>2018</option>
												<option>2018</option>
												<option>2019</option>
												<option>2020</option>
												<option>2021</option>
												<option>2022</option>
												<option>2023</option>
												<option>2024</option>
												<option>2025</option>
												<option>2026</option>
												<option>2027</option>
												<option>2028</option>
												<option>2029</option>
												<option>2030</option>
												<option>2031</option>
												<option>2032</option>
											</select>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-6 col-xs-12">
								<div class="tl_check_payment_method">
									<div class="form-group">
										<label>Credit Card</label>
										<input type="text" class="form-control" placeholder="Card Holder Name">
										<input type="text" class="form-control" placeholder="card number">
										<input type="text" class="form-control" placeholder="Security Code">
										<div class="expiry_date">
											<label>Expiry Date</label>
											<select class="form-control">
												<option>Mon</option>
												<option>01</option>
												<option>02</option>
												<option>03</option>
												<option>04</option>
												<option>05</option>
												<option>06</option>
												<option>07</option>
												<option>08</option>
												<option>09</option>
												<option>10</option>
												<option>11</option>
												<option>12</option>
											</select>
											<select class="form-control">
												<option>Year</option>
												<option>2018</option>
												<option>2018</option>
												<option>2019</option>
												<option>2020</option>
												<option>2021</option>
												<option>2022</option>
												<option>2023</option>
												<option>2024</option>
												<option>2025</option>
												<option>2026</option>
												<option>2027</option>
												<option>2028</option>
												<option>2029</option>
												<option>2030</option>
												<option>2031</option>
												<option>2032</option>
											</select>
										</div>
									</div>
								</div>
							</div>
						</div>
						<button class="t_btn next">Pay</button>
					</div>
					<div class="woocommerce_checkout_receipt step">
						<h1>THANK YOU FOR YOUR ORDER!</h1>
						<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.</p>
						<a href="#" class="t_btn receipt_btn">Print Receipt</a>
						<a href="#" class="t_btn receipt_btn">Email Receipt</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- Mens section End -->
<!-- Footer Start -->
<footer>
	<!-- footer social Start -->
	<?php include "footer.php"; ?>

	<!-- footer bottom End -->
</footer>
<!-- Footer End -->
<!-- bottom to top button -->
<div id="tl_toTop" title="click to top">
	<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" width="16px" height="16px">
		<g>
			<g>
				<path d="M512,107.275c-23.658-33.787-70.696-42.691-104.489-19.033L233.753,209.907l-63.183-44.246    c23.526-40.618,12.46-93.179-26.71-120.603c-41.364-28.954-98.355-18.906-127.321,22.45    c-28.953,41.358-18.913,98.361,22.452,127.327c28.384,19.874,64.137,21.364,93.129,6.982l77.388,54.185l-77.381,54.179    c-28.992-14.375-64.743-12.885-93.129,6.982c-41.363,28.966-51.404,85.963-22.452,127.32    c28.966,41.363,85.963,51.411,127.32,22.457c39.165-27.424,50.229-79.985,26.71-120.603l63.183-44.246l173.751,121.658    c33.793,23.665,80.831,14.755,104.489-19.033l-212.41-148.715L512,107.275z M91.627,167.539    c-26.173,0-47.392-21.219-47.392-47.392s21.22-47.392,47.392-47.392c26.179,0,47.392,21.219,47.392,47.392    S117.806,167.539,91.627,167.539z M91.627,439.253c-26.173,0-47.392-21.219-47.392-47.392c0-26.173,21.219-47.392,47.392-47.392    c26.179,0,47.392,21.219,47.392,47.392C139.019,418.033,117.806,439.253,91.627,439.253z" fill="#FFFFFF"/>
			</g>
		</g>
	</svg>
</div>
<!-- bottom to top button -->

<!-- jquery library js -->
<script src="js/jquery.js"></script> 
<!-- jquery library js -->
<!-- bootstrap js file-->
<script src="js/bootstrap.min.js"></script> 
<!-- bootstrap js file-->
<!-- owl crousel js file-->
<script src="js/plugins/owl-crousel/owl.carousel.js"></script> 
<!-- owl crousel js file-->
<!-- Datepicker-->
<script src="js/plugins/datepicker/jquery-ui.js"></script> 
<!-- Datepicker-->
<!-- counter-->
<script src="js/plugins/counter/jquery.countTo.js"></script> 
<!-- counter-->
<!-- appear js start-->
<script src="js/plugins/animation/jquery.appear.js"></script> 
<!-- appear js end-->
<!-- wow js start-->
<script src="js/plugins/animation/wow.min.js"></script> 
<!-- wow js end-->
<!-- slick slider -->
<script src="js/plugins/slick/jquery-migrate-1.2.1.min.js">
</script>
<script src="js/plugins/slick/slick.min.js"></script>
<!-- slick slider -->
<script src="js/step.js"></script>
<!-- custom js -->
<script src="js/custom.js"></script> 
<!-- custom js -->
<!-- map script -->
</body>
<!--body end -->

<!-- Mirrored from templatebundle.net/templates/tailor-html-template/checkout.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 27 Nov 2019 14:36:25 GMT -->
</html>
<?php }?>