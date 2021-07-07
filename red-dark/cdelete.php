<?php   

include '../form/connection.php';



            if(isset($_GET['id']))
			{
				$id=$_GET['id'];
				$result = $mysqli->query("Select * FROM tb_cat WHERE c_id =$id");
			if(!empty($result))
				{
					$row=$result->fetch_assoc();

				}
			
			}
			$result = $mysqli->query( "DELETE FROM tb_cat where c_id='$id' " );
				
					if($result)
					{
						echo "<script>alert('Deleted');</script>";
						echo "<script>window.location.href='cat.php';</script>";
					}
			
			else
					{
						echo"not deleted" . $mysqli->error;
					}
				
			
			
?>	