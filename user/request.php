<?php session_start();
include '../form/connection.php';
 include '../red-dark/validate.php';

 
 ?>

<!DOCTYPE html>
<html lang="en">
    
<!-- Mirrored from coderthemes.com/moltran/red-dark/tables-datatable.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 27 Oct 2019 18:27:35 GMT -->
<head>
        <meta charset="utf-8" />
        <title>Taylor Online </title>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
        <meta content="Coderthemes" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />

        <link rel="shortcut icon" href="assets/images/favicon_1.ico">
        
        <!-- DataTables -->
        <link href="../plugins/datatables/jquery.dataTables.min.css" rel="stylesheet" type="text/css" />
        <link href="../plugins/datatables/buttons.bootstrap4.min.css" rel="stylesheet" type="text/css" />
        <link href="../plugins/datatables/fixedHeader.bootstrap4.min.css" rel="stylesheet" type="text/css" />
        <link href="../plugins/datatables/responsive.bootstrap4.min.css" rel="stylesheet" type="text/css" />
        <link href="../plugins/datatables/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css"/>
        <link href="../plugins/datatables/scroller.bootstrap4.min.css" rel="stylesheet" type="text/css" />

        <!-- Custom Files -->
        <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/icons.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/style.css" rel="stylesheet" type="text/css" />

        <script src="assets/js/modernizr.min.js"></script>
        
    </head>


    <body class="fixed-left">
        
        <!-- Begin page -->
        <div id="wrapper">
        
            <!-- Top Bar Start -->
           <?php include 'search.php'; ?>
            <!-- Top Bar End -->

            <!-- ========== Left Sidebar Start ========== -->

           <?php include 'nav.php'; ?>
            <!-- Left Sidebar End --> 



            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->                      
            <div class="content-page">
                <!-- Start content -->
                <div class="content">
                    <div class="container-fluid">

                        <!-- Page-Title -->
                        <div class="row">
                            <div class="col-sm-12">
                                <h2 class="pull-left page-title">Your Orders</h2>
                                
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-lg-12">
                                <div class="card">
                                    
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-md-12 col-sm-12 col-12">
											<div class="table-responsive">
                                                <table id="datatable" class=" table table-striped table-bordered " style="border-collapse: collapse; border-spacing: 0; width: 150%;">
                                                    <thead>
                                                        <tr>
                                                            <th>FirstName</th>
															<th>Email</th>
															<th>Adress</th>
															<th>City</th>
															<th>Phone </th>
															<th>Product</th>
															<th>Quantity</th>
                                                            <th>Total Price</th>
															<th>Catagory</th>
															<th>Order Date</th>
                                                            <th>Order Status</th>
                                                        </tr>
                                                    </thead>
<?php

          $uid=$_SESSION['u_id'];
				$sql = "SELECT * FROM tb_order where u_id='$uid'";

				$result = mysqli_query($mysqli, $sql);
				if ($result->num_rows > 0)
				{   
				?>	
                                             
                                                   <tbody>
				<?php while ($row = $result->fetch_object()){ 
				$pid=$row->p_id;
				$uid=$row->u_id;
				$mid=$row->m_id;
				$price=$row->price;
                $qty=$row->qty;
				$d8=$row->odat;
				
				 $s = "SELECT * FROM signup where u_id='$uid'";
						$res = mysqli_query($mysqli, $s);
				if ($res->num_rows > 0)
				{ 
while ($rw = $res->fetch_object()){
 $fname=$rw->f_name;
 $email=$rw->email;
 $adres=$rw->address;
 $city=$rw->city;
 $no=$rw->no;

}
				}
				
				
				?>
				<tr class="even">
				<td class=" sorting_1"><?=$fname; ?></td>
								
								<td class=" sorting_1"><?=$email;
								?> </td>
								<td class=" sorting_1"><?=$adres; ?></td>
								<td class=" sorting_1"><?=$city; ?></td>
                                 <td class=" sorting_1"><?=$no; ?></td>
								<td class=" sorting_1"><?php
								$ss = "SELECT * FROM products where p_id='$pid'";
						$re = mysqli_query($mysqli, $ss);
				if ($re->num_rows > 0)
				{ 
while ($rwo = $re->fetch_object()){
	$cid=$rwo->c_id;
echo $rwo->name;
 


	
								 ?></td>

<td class=" sorting_1"><?=$qty; ?></td>

<td class=" sorting_1"><?=$price; ?></td>

                       			<td class=" sorting_1"><?php
								$ssd = "SELECT * FROM tb_cat where c_id='$cid'";
						$rew = mysqli_query($mysqli, $ssd);
				if ($rew->num_rows > 0)
				{ 
while ($rwos = $rew->fetch_object()){
echo $rwos->name;
 

}
				}
					}
				}			 ?></td>
					<td class=" sorting_1"><?=$d8; ?></td>

			<td class="sorting_1  ">
				<?php if($row->status==1){
					echo "Accepted or shipped";
					
				}
               elseif($row->status==2){
				   
				   echo "Rejected ";
			   }
			   else{
				   echo"Pending...";
				?>
				
			   <?php }?>
			</td>
				<?php } ?>
				</tr>
				<?php } ?>
			  </tbody>
                                                </table>
                                            </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                        </div> <!-- End Row -->


                      
                                    </div>
                                </div>
                            </div>

                        </div> <!-- End Row -->


                    </div> <!-- container-fluid -->
                               
                </div> <!-- content -->

                

            </div>
            <!-- ============================================================== -->
            <!-- End Right content here -->
            <!-- ============================================================== -->


            <!-- Right Sidebar -->
            <div class="side-bar right-bar nicescroll">
                <h4 class="text-center">Chat</h4>
                <div class="contact-list nicescroll">
                    <ul class="list-group contacts-list">
                        <li class="list-group-item">
                            <a href="#">
                                <div class="avatar">
                                    <img src="assets/images/users/avatar-1.jpg" alt="">
                                </div>
                                <span class="name">Chadengle</span>
                                <i class="fa fa-circle online"></i>
                            </a>
                            <span class="clearfix"></span>
                        </li>
                        <li class="list-group-item">
                            <a href="#">
                                <div class="avatar">
                                    <img src="assets/images/users/avatar-2.jpg" alt="">
                                </div>
                                <span class="name">Tomaslau</span>
                                <i class="fa fa-circle online"></i>
                            </a>
                            <span class="clearfix"></span>
                        </li>
                        <li class="list-group-item">
                            <a href="#">
                                <div class="avatar">
                                    <img src="assets/images/users/avatar-3.jpg" alt="">
                                </div>
                                <span class="name">Stillnotdavid</span>
                                <i class="fa fa-circle online"></i>
                            </a>
                            <span class="clearfix"></span>
                        </li>
                        <li class="list-group-item">
                            <a href="#">
                                <div class="avatar">
                                    <img src="assets/images/users/avatar-4.jpg" alt="">
                                </div>
                                <span class="name">Kurafire</span>
                                <i class="fa fa-circle online"></i>
                            </a>
                            <span class="clearfix"></span>
                        </li>
                        <li class="list-group-item">
                            <a href="#">
                                <div class="avatar">
                                    <img src="assets/images/users/avatar-5.jpg" alt="">
                                </div>
                                <span class="name">Shahedk</span>
                                <i class="fa fa-circle away"></i>
                            </a>
                            <span class="clearfix"></span>
                        </li>
                        <li class="list-group-item">
                            <a href="#">
                                <div class="avatar">
                                    <img src="assets/images/users/avatar-6.jpg" alt="">
                                </div>
                                <span class="name">Adhamdannaway</span>
                                <i class="fa fa-circle away"></i>
                            </a>
                            <span class="clearfix"></span>
                        </li>
                        <li class="list-group-item">
                            <a href="#">
                                <div class="avatar">
                                    <img src="assets/images/users/avatar-7.jpg" alt="">
                                </div>
                                <span class="name">Ok</span>
                                <i class="fa fa-circle away"></i>
                            </a>
                            <span class="clearfix"></span>
                        </li>
                        <li class="list-group-item">
                            <a href="#">
                                <div class="avatar">
                                    <img src="assets/images/users/avatar-8.jpg" alt="">
                                </div>
                                <span class="name">Arashasghari</span>
                                <i class="fa fa-circle offline"></i>
                            </a>
                            <span class="clearfix"></span>
                        </li>
                        <li class="list-group-item">
                            <a href="#">
                                <div class="avatar">
                                    <img src="assets/images/users/avatar-9.jpg" alt="">
                                </div>
                                <span class="name">Joshaustin</span>
                                <i class="fa fa-circle offline"></i>
                            </a>
                            <span class="clearfix"></span>
                        </li>
                        <li class="list-group-item">
                            <a href="#">
                                <div class="avatar">
                                    <img src="assets/images/users/avatar-10.jpg" alt="">
                                </div>
                                <span class="name">Sortino</span>
                                <i class="fa fa-circle offline"></i>
                            </a>
                            <span class="clearfix"></span>
                        </li>
                    </ul>  
                </div>
            </div>
            <!-- /Right-bar -->

 <?php include 'footer.php'?>
        </div>
        <!-- END wrapper -->
    
        <script>
            var resizefunc = [];
        </script>

        <!-- jQuery  -->
        <script src="assets/js/jquery.min.js"></script>
        <script src="assets/js/bootstrap.bundle.min.js"></script>
        <script src="assets/js/detect.js"></script>
        <script src="assets/js/fastclick.js"></script>
        <script src="assets/js/jquery.slimscroll.js"></script>
        <script src="assets/js/jquery.blockUI.js"></script>
        <script src="assets/js/waves.js"></script>
        <script src="assets/js/wow.min.js"></script>
        <script src="assets/js/jquery.nicescroll.js"></script>
        <script src="assets/js/jquery.scrollTo.min.js"></script>

        <!-- Datatables-->
        <!-- Required datatable js-->
        <script src="../plugins/datatables/jquery.dataTables.min.js"></script>
        <script src="../plugins/datatables/dataTables.bootstrap4.min.js"></script>
        <!-- Buttons examples -->
        <script src="../plugins/datatables/dataTables.buttons.min.js"></script>
        <script src="../plugins/datatables/buttons.bootstrap4.min.js"></script>
        
        <script src="../plugins/datatables/jszip.min.js"></script>
        <script src="../plugins/datatables/pdfmake.min.js"></script>
        <script src="../plugins/datatables/vfs_fonts.js"></script>
        <script src="../plugins/datatables/buttons.html5.min.js"></script>
        <script src="../plugins/datatables/buttons.print.min.js"></script>
        <script src="../plugins/datatables/dataTables.fixedHeader.min.js"></script>
        <script src="../plugins/datatables/dataTables.keyTable.min.js"></script>
        <script src="../plugins/datatables/dataTables.scroller.min.js"></script>

        <!-- Responsive examples -->
        <script src="../plugins/datatables/dataTables.responsive.min.js"></script>
        <script src="../plugins/datatables/responsive.bootstrap4.min.js"></script>

        <!-- Datatable init js -->
        <script src="assets/pages/datatables.init.js"></script>

        <script src="assets/js/jquery.app.js"></script>

        <script>
            $(document).ready(function() {
                $('#datatable').dataTable();
                $('#datatable-keytable').DataTable( { keys: true } );
                $('#datatable-responsive').DataTable();
                $('#datatable-scroller').DataTable( { ajax: "../plugins/datatables/json/scroller-demo.json", deferRender: true, scrollY: 380, scrollCollapse: true, scroller: true } );
                var table = $('#datatable-fixed-header').DataTable( { fixedHeader: true } );
            } );
            TableManageButtons.init();
        </script>


	</body>

<!-- Mirrored from coderthemes.com/moltran/red-dark/tables-datatable.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 27 Oct 2019 18:27:43 GMT -->
</html>