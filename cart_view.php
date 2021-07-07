

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

<!-- Mirrored from templatebundle.net/templates/tailor-html-template/cart.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 27 Nov 2019 14:37:06 GMT -->
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
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js" type="text/javascript"></script>

	<!-- favicon-icon -->
</head>
<!-- END HEAD -->
<!--body start-->
<body>
<!-- login signup popup Start -->

<!-- login signup popup End -->
<!-- header menu start -->
<?php include "header.php"; ?>
<!-- header menu end -->
<!-- breadcrumb section start -->
<div class="main_section tl_page_banner">
	<div class="container">
		<div class="row">
			<div class="col-md-12 col-xs-12 text-center wow fadeInUp" data-wow-delay="0.1s">
				<div class="tl_banner_wrapper">
					<div class="page_heading wow fadeInLeft" data-wow-delay="0.2s">
						<h1>Cart</h1>
					</div>
					<div class="breadcrumbs wow fadeInRight" data-wow-delay="0.2s">
						<ul>
							<li><a href="#">Home</a></li>
							<li>Cart</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- breadcrumb section End -->
<!-- Cart section Start -->
<div class="main_section pad_top_86 pad_bottom_80">
	<div class="container">
		<div class="row">
			<div class="col-lg-12 col-xs-12">
				<div class="table-responsive cart_table wow fadeInRight" data-wow-delay="0.2s">
				<div class="checkout">
					<table class="table">
						<tr>
							<th>Products</th>
							<th>Price</th>
							<th>Quantity</th>
							<th>Total</th>
							<th>Action</th>
						</tr>
						<?php
					$uid=$_SESSION['u_id'];
				$sql = "SELECT * FROM tb_cart where status='0' AND u_id='$uid'";

				$result = mysqli_query($mysqli, $sql);
				if ($result->num_rows > 0)
				{   
				 while ($row = $result->fetch_object()){

$pid=$row->p_id;
$qty=$row->quantity;

$sqll = "SELECT * FROM products where p_id='$pid'";

				$reslt = mysqli_query($mysqli, $sqll);
				if ($reslt->num_rows > 0)
				{   
					
				
 while ($rw = $reslt->fetch_array()){
	 
	 
													   ?>
	
						
						<form method="get" action="checkout.php" id="addem">
						<tr>
						<div class="checkout">
							<td>
								<span class="prod_thumb">
									<?php
									
									$im=$rw['image'];
								$imageUrl = $im;
	$productImage = "<img class='img-round' src='shop/".$imageUrl."' style='height:60px; width:60px;' alt='' />";
								echo $productImage;?>
								</span>
								<div class="product_details">
									<h4><?php echo $rw['name']; ?></h4>
									
								</div>
							</td>
							
							<td><p class="price" data-price="<?php 
							
							$price=$rw['price'];
							echo $rw['price']; ?>"></p> 
							
							
							<?php 
							
							$price=$rw['price'];
							echo $rw['price']; ?>  </p></td>
							<td><input type="text" id="quantity" name="qty[]" class="quantity" value="1">
						<input type="hidden" name="pid[]" class="" value="<?php echo $rw['p_id']; ?>">	         
							
							</td>
							<td><p class="total"><span id="total"><?php echo $rw['price'];?></span></p></td>
							<td>
							</div>
								<a href="cartdel.php?id=<?php

               echo $row->cc_id;

								?>"><span class="close_pro"><i class="fa fa-close"></i></span></a>
							</td>
						</tr>
						<?php }}}}?>
					</table>
					<input type="submit"  class="proceed_btn t_btn" />
					</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- Cart section End -->
<!-- Footer Start -->
<footer>
	<!-- footer social Start -->
	
	
	<script type="text/javascript">
	
	$(document).ready(function(){
	$(".checkout").on("keyup", ".quantity", function(){
		var price = +$(".price").data("price");
		var quantity = +$(this).val();
		$("#total").text( price * quantity);
	})
})
	
	
	
	</script>
	
	<!-- footer social End -->
	<!-- footer main Start -->

	<!-- footer main End -->
	<!-- footer bottom Start -->
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
<!-- custom js -->
<script src="js/custom.js"></script> 
<!-- custom js -->
<!-- map script -->
</body>
<!--body end -->

<!-- Mirrored from templatebundle.net/templates/tailor-html-template/cart.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 27 Nov 2019 14:37:08 GMT -->
</html>