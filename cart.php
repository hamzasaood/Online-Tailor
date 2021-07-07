<?php include 'form/connection.php';
session_start();

if(isset($_SESSION['f_name']))
{
if(isset($_GET['id'])){
	$id=$_GET['id'];
	 $uid=$_SESSION['u_id'];
				$sl = "SELECT * FROM tb_cart where status='0' AND u_id='$uid' AND p_id='$id'";

				$res = mysqli_query($mysqli, $sl);
				if ($res->num_rows > 0)
				{   
		echo "<script>alert('Already in cart go to checkout');</script>";
		echo "<script>window.location='product.php';</script>";


				}
				 else{


	$id=$_GET['id'];
	$qty="1";
	$uid=$_SESSION['u_id'];
	//$_SESSION['cart']=array('$id','$qty');
	$sql="insert into tb_cart (u_id,p_id,quantity,status) Values('$uid','$id','$qty','0')";
	$result=mysqli_query($mysqli,$sql);
}	
	if(!empty($result)){
		
		echo "<script>alert('Added to cart');</script>";
		echo "<script>window.location='product.php';</script>";
		
	}
	
	


}
}
else
	
	{
		
		echo "<script>alert('Please Login to Continue');</script>";
		echo "<script>window.location='form/login.php';</script>";
	}

?>