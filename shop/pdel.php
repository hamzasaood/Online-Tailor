<?php   
session_start();
include '../form/connection.php';


$shop=$_SESSION['shop_name'];
            if(isset($_GET['id']))
			{
				$id=$_GET['id'];
				$result = $mysqli->query("Select * FROM products WHERE p_id =$id and shop_name='$shop'");
			if(!empty($result))
				{
					$row=$result->fetch_assoc();

				}
			
			}
			$result = $mysqli->query( "DELETE FROM products where p_id='$id' and shop_name='$shop' " );
				
					if($result)
					{
						echo "<script>alert('Deleted');</script>";
						echo "<script>window.location.href='product.php';</script>";
					}
			
			else
					{
						echo"not deleted" . $mysqli->error;
					}
				
			
			
?>	