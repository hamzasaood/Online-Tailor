<?php session_start();  
include 'validate.php';
include '../form/connection.php';



            if(isset($_GET['id']))
			{
				$id=$_GET['id'];
				$result = $mysqli->query("Select * FROM products WHERE p_id =$id");
			if(!empty($result))
				{
					$row=$result->fetch_assoc();

				}
			
			}
			$result = $mysqli->query( "DELETE FROM products where p_id='$id' " );
				
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