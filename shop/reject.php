<?php
include '../form/connection.php';
if(isset($_GET['id']))
			{
				
				 $id=$_GET['id'];
				 
				$result = $mysqli->query( "SELECT * FROM tb_order WHERE m_id = $id");
				if(!empty($result))
				{     
					$row=mysqli_fetch_assoc($result);
                    $status=$row['status'];
					}	
				
		}

					$result = $mysqli->query( "update tb_order 
					set status='2'
					where m_id='$id'" );
					if(isset($result))
					{
						echo "<script>alert('Rejected Due to some reason');</script>";
					echo "<script>window.location.href='request.php';</script>";
					}
		
		
  			
?>