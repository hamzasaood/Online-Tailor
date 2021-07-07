<?php include 'form/connection.php';
 include "header.php";




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

<!-- Mirrored from templatebundle.net/templates/tailor-html-template/about.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 16 Oct 2019 13:00:26 GMT -->
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
<div class="main_section tl_page_banner">
	<div class="container">
		<div class="row">
			<div class="col-md-12 col-xs-12 text-center wow fadeInUp" data-wow-delay="0.1s">
				<div class="tl_banner_wrapper">
					<div class="page_heading wow fadeInLeft" data-wow-delay="0.2s">
						<h1>Products</h1>
					</div>
					<div class="breadcrumbs wow fadeInRight" data-wow-delay="0.2s">
						<ul>
							<li><a href="#">Home</a></li>
							<li>Products</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- END HEAD -->
<!-- About section Start -->

<div class="main_section pad_top_80 blog_section">
	<div class="container">
		<div class="row">
			<!-- section heading -->
			<div class="col-lg-6 col-md-8 col-lg-offset-3 col-md-offset-2 col-xs-12 wow fadeInUp" data-wow-delay="0.2s">
				<div class="section_heading">
					<h1>Products</h1>
					<span class="heading_icon">
						<img src="images/icon/heading_icon.png" alt="image" class="img-responsive">
					</span>
					<p>But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complet.</p>
				</div>
			</div>
			<!-- section heading -->
			
			<div class="blog_main">
			<?php
				$sql = "SELECT * FROM products";

				$result = mysqli_query($mysqli, $sql);
				if ($result->num_rows > 0)
				{   while ($row = $result->fetch_object()){
				?>	
				
				<div class="col-md-4 col-sm-6 col-xs-12 w-100 wow fadeInUp" data-wow-delay="0.1s">
					<div class="blog_box">
						<span class="blog_date">
						    <div class="blog_m"><span>Price</span></div>
							<div class="blog_m"><?php echo $row->price." "."RS"; ?></div>
							
							
						 </span>
						 
						<!-- thumb -->
						<div class="blog_thumb blog_imgafter">
							<?php
								$im=$row->image;
								$imageUrl = $im;
	$productImage = "<img class='img-round' src='shop/".$imageUrl."' style='height:300px; width:360px;' alt='' />";
								echo $productImage; ?>
						</div>
						<!-- thumb -->
						<!-- Description -->
						<div class="blog_desc home">
							
							<h3><?php echo $row->name; ?></h3>

							
							<div class="para" style="    height: 100px;">
							<p>
				       <?php echo $row->description; ?>
							</p>
							
		
							</div>
														
							<div class="para" style="    height: 30px;">
							
							<h4>By:<?php echo $row->shop_name; ?></h4> 
							</div>
                         
						 
						
							<div class="btn_box">
						<a href="cart.php?id=<?php echo $row->p_id;?>" class="t_btn blog_btn">Add to Cart</a>
							</div>
						</div>
						<!-- Description -->
					</div>
				</div>
				<?php }}?>
				
			</div>
			
		</div>
	</div>
</div>
<!-- About section End -->
<!-- hero section Start -->

<!-- hero section End -->
<?php
include "footer.php";
?>
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

<!-- Mirrored from templatebundle.net/templates/tailor-html-template/about.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 16 Oct 2019 13:00:35 GMT -->
</html>


