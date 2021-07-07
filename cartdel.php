<?php   
session_start();
include 'form/connection.php';


$shop=$_SESSION['shop_name'];
$uid=$_SESSION['u_id'];
            if(isset($_GET['id']))
			{
				$id=$_GET['id'];
				$result = $mysqli->query("Select * FROM tb_cart WHERE cc_id='$id' and u_id='$uid' ");
			if(!empty($result))
				{
					$row=$result->fetch_assoc();

				}
			
			}
			$result = $mysqli->query( "DELETE FROM tb_cart where cc_id='$id' and u_id='$uid' " );
				
					if($result)
					{
						echo "<script>alert('Deleted');</script>";
						echo "<script>window.location.href='cart_view.php';</script>";
					}
			
			else
					{
						echo"not deleted" . $mysqli->error;
					}
				
			
			
?>	