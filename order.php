<?php 
include "header.php";
include("form/connection.php");
 if(!isset($_SESSION['u_id'])){
	echo "<script>alert('Login to complete your order');</script>";
	echo "<script>window.location.href='form/login.php';</script>";
}
else{
 $orderSql = "SELECT * FROM tb_cart where status='0' AND u_id='$uid'";
$orderQuery = $mysqli->query($orderSql);
$users = $orderQuery->num_rows;
  
	
 $age[$users]=$_GET['qty'];
 $ab[$users]=$_GET['pid'];
print_r(array_combine($ab[$users],$age[$users]));
	$uid=$_SESSION['u_id'];


	  
		


for ($x=0;$x<$users;$x++){
	
if(isset($_POST['coler']))
{
	$coler=$_POST['coler'];
	$chest=$_POST['chest'];
	$waist=$_POST['waist'];
	$swidth=$_POST['s_width'];
	$slen=$_POST['sh_len'];
	//$qty=$_POST['qty'];

$arm=$_POST['arm'];
$pant=$_POST['pant'];
$uid=$_SESSION['u_id'];
$sql = "INSERT INTO tb_order (colr,chest,waist,shirt_l,sholder_width,arm_l,pant_l,u_id,p_id,qty,status)
     VALUES ('$coler','$chest','$waist','$swidth','$slen','$arm','$pant','$uid','$ab[$users]','$age[$users]','0')";




if ($mysqli->query($sql) === TRUE) {
	
		
	$s="update tb_cart set status='1' where u_id=$uid";
	mysqli_query($mysqli,$s);
	
	
echo "<script>alert('Order placed');</script>";   
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

<!-- END HEAD -->
<!-- About section Start -->
<div class="main_section pad_top_bottom_80 about_section">
	<div class="container">
		<div class="row">
		<!-- section heading -->
			<div class="col-lg-6 col-md-8 col-lg-offset-3 col-md-offset-2 col-xs-12 wow fadeInUp" data-wow-delay="0.2s">
				<div class="section_heading">
						<table class="table-responsive table table-striped table-bordered">
					<thead>
					<tr>
					<th><a class="btn btn-danger" href="pdel.php?id=<?php//$row->p_id?>">Empty Cart</a>  </th>
					<th colspan="3" ><h4>Products Cart </h4></th>
					<th><a class="btn btn-primary" href="product.php">Update Cart</a>  </th>
					
					</tr>
					<tr>
					
					<th>Product</th>
					<th>Price</th>
					<th>Qty</th>
					<th>Image</th>
					
					<th>Action</th>

					</tr>
					</thead>
					<?php
					$uid=$_SESSION['u_id'];
				$sql = "SELECT * FROM tb_cart where status='0' AND u_id='$uid'";

				$result = mysqli_query($mysqli, $sql);
				if ($result->num_rows > 0)
				{   
				?>	
                                             
                                                   <tbody>
												   <?php while ($row = $result->fetch_object()){

$pid=$row->p_id;
$qty=$row->quantity;

$sqll = "SELECT * FROM products where p_id='$pid'";

				$reslt = mysqli_query($mysqli, $sqll);
				if ($reslt->num_rows > 0)
				{   
				?>	
				
 <?php while ($rw = $reslt->fetch_object()){
	 
	 
													   ?>
												   
												   
									<tr>
									<td><?php echo $rw->name ?></td>
									<td><?php echo $rw->price ?></td>
									<td><?php echo $qty ?></td>
									<td><?php
									
									$im=$rw->image;
								$imageUrl = $im;
	$productImage = "<img class='img-round' src='red-dark/".$imageUrl."' style='height:60px; width:60px;' alt='' />";
								echo $productImage;?></td>
												   
											<td>
					<a class="btn btn-danger" href="pdel.php?id=<?=$row->p_id?>">
					
					Delete
				</a></td>	   
								</tr>				   
												   </tbody>
												   
												   <?php }}}}?>
					</table>
					
				</div>
			</div>
			<!-- section heading -->
			<div class="col-lg-4 col-md-6 col-sm-12 wow fadeInLeft" data-wow-delay="0.2s">
			
				
				
				
				
			</div>
			<div class="section_heading"><br>
				<div class="about_description">
					<form class="form-horizontal  " method="post">
<fieldset>

<!-- Form Name -->

                    <div class="input-group input-group-lg">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                        <input required   name="coler" type="text" class="form-control" placeholder="Coler Size">
                    </div>
                    <div class="clearfix"></div><br>
					<div class="input-group input-group-lg">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                        <input required   name="chest" type="text" class="form-control" placeholder="Chest Size">
                    </div>
					 <div class="clearfix"></div><br>
					 
					 <div class="input-group input-group-lg">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                        <input required   name="waist" type="text" class="form-control" placeholder="Waist">
                    </div>
					
					 <div class="clearfix"></div><br>
					<div class="input-group input-group-lg">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-user "></i></span>
                        <input required name="s_width" type="text" class="form-control" placeholder="Shoulder Width">
                    </div>
					
					
					 <div class="clearfix"></div><br>
					<div class="input-group input-group-lg">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-user "></i></span>
                        <input required name="sh_len" type="text" class="form-control" placeholder="Shirt Length">
                    </div>
					
					 <div class="clearfix"></div><br>
					<div class="input-group input-group-lg">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-user "></i></span>
                        <input required name="arm" type="text" class="form-control" placeholder="Arm Length">
                    </div>
					
					 <div class="clearfix"></div><br>
					<div class="input-group input-group-lg">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-user "></i></span>
                        <input required name="pant" type="text" class="form-control" placeholder="Pant Length">
                    </div>
					<div class="clearfix"></div><br>
					<div class="input-group input-group-lg">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-user "></i></span>
                        <input required name="qty" type="number" class="form-control" placeholder="Quantity">
                    </div>
 

               <div class="clearfix"></div><br> 
                     <div class="input-group input-group-lg">
                    
                        <button type="submit" class="btn btn-warning btn-lg">Submit</button>
                  
					</div>
					<div class="clearfix"></div>

</fieldset>
</form>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- About section End -->
<!-- hero section Start -->
<div class="main_section hero_middle_section">
	<div class="container">
		<div class="row">
			
				<!-- thumb -->
				<div class="hero_thumb wow fadeInRight" data-wow-delay="0.2s">
					<img src="images/about/hero_thumb.png" alt="thumb"  class="img-responsive" />
				</div>
				<!-- thumb -->
			
			<div class="col-lg-8 col-md-12 col-sm-12 col-xs-12 wow fadeInLeft" data-wow-delay="0.2s">
				<!-- Description -->
				<div class="hero_desc">
					<div class="hero_desc_inner">
						<h1>We Make Better & Real You</h1>
						<p>
							It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text.Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text.
						</p>
						<!-- <a href="#" class="tailor_btn hero_btn">Read More</a> -->
						<a class="t_btn ct_btn hero_btn" href="#">Read More</a>
					</div>
				</div>
				<!-- Description -->
			</div>
		</div>
	</div>
</div>
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
<?php } ?>