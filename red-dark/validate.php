<?php 

if(!isset($_SESSION['u_id'])){
	
	echo "<script>alert('You are not authorized');</script>";
					echo "<script>window.location.href='../index.php';</script>";
	
}
 
 
 ?>