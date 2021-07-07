<?php
session_start();

include 'form/connection.php';



?>

<html>
<!-- header menu start -->
<div class="tl_header_section">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="menu_section_wrap">
					<!-- Site logo Start -->
					<div class="tl_logo">
						<a href="index.php">
							<img class="img-responsive" src="images/logo_small.png" alt="logo">
						</a>
					</div>
					
					<div class="tl_center_logo ">
						<a href="index.php">
							<img style="margin-top: 57px;" class="" src="images/logo.png" alt="logo">
						</a>
					</div>
					
					
					<!-- Site logo End -->
					<!-- nav toggle -->
					<div class="nav_toggle">
						<i></i>
						<i></i>
						<i></i>
					</div>
					<!-- nav toggle -->
					<!-- Navigation Menu Start -->
					<div class="header_right_menu">
						<nav class="menu_section">
							<ul class="menu"> 
								<li>
									<a href="index.php" >Home</a>
								</li>
								<li>
									<a href="about.php">About us</a>
								</li>
								
								<li>
									<a href="product.php">Products</a> 
								</li>
								
								
								
								
							</ul>
						</nav>
						<nav class="menu_section right_nav">
						
            </a>
							<ul class="menu"> 
								<li>
									<a href="" class="cart_count" name="submit" ><i class="fa fa-shopping-cart"></i>
									<ul class="sub-menu">
		<li class="header">You have <span><?php
 if(isset($_SESSION['u_id']))
 {
	 $uid=$_SESSION['u_id'];
    $orderSql = "SELECT * FROM tb_cart where status='0' AND u_id='$uid'";
$orderQuery = $mysqli->query($orderSql);
$users = $orderQuery->num_rows;

echo $users;
 }
 else {
	 
	 echo " 0 ";
 } 
		?> </span> item(s) in cart</li>

              <li class="footer"><a href="cart_view.php">Go to Cart</a></li>
									</ul>
								</li>
								
									</a>	
									
								
								
								<li>
															<?php if(!isset($_SESSION['f_name'])){ ?>
															
															
															<a href="form\login.php">login</a>
															
															<?php }else{?>
										
										<a href=""><?php echo $_SESSION['f_name'];?>
										<ul class="sub-menu">
										
									
									<?php if($_SESSION['u_type']=='user'){  ?>
										<li><a href="form/logout.php">Logout</a></li>
										<li><a href="user/request.php">dashboard</a></li>
									<?php }
									elseif($_SESSION['u_type']=='admin'){?>
										<li><a href="red-dark/index.php">Dashboard</a></li>
                                        <li><a href="form/logout.php">Logout</a></li>
									<?php }	
									else {?>
										<li><a href="shop/index.php">Dashboard</a></li>
                                        <li><a href="form/logout.php">Logout</a></li>
									<?php }	?>
									</ul>						
															<?php }?>
														</a>		
															</li>
								
							
								
								
								<li>
								
								  <button style="background-color:#d8aa59 "  type="button" class="btn btn-outline-danger">
									<a style="color:white" href="form/shopsignup.php">Create Shop </a></button>
								
								</li>
															

								
                    
							</ul>

						</nav>
					</div>
					<!-- Navigation Menu End -->
				</div>
			</div>
		</div>
	</div>
</div>
<!-- header menu end -->
</html>