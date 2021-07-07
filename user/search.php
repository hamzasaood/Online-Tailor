   <div class="topbar">

                <!-- LOGO -->
                <div class="topbar-left">
                    <div class="text-center">
                        <a href="../index.php" class="logo"><i class="md md-terrain"></i> <span>User Dashboard </span></a>
                    </div>
                </div>
                <!-- Button mobile view to collapse sidebar menu -->
                
                <nav class="navbar navbar-default">
                    <div class="container-fluid">
                        <ul class="list-inline menu-left mb-0">
                            <li class="float-left">
                               <a href="#" class="button-menu-mobile open-left">
                                    <i class="fa fa-bars"></i>
                                </a>
                            </li>
                            <li class="hide-phone float-left">
                                
                            </li>
                            <li class="hide-phone float-left">
							<div class="text-center">
                    </div>

                            </li>
                        </ul>
    
                        <ul class="nav navbar-right float-right list-inline">
                            
                            
                            <li class="dropdown open">
                                <a href="#" class="dropdown-toggle profile" data-toggle="dropdown" aria-expanded="true"><img src="assets/images/users/avatar-1.jpg" alt="user-img" class="rounded-circle"> </a>
                                <ul class="dropdown-menu">
                                    <li><a href="pupdate.php?id=<?php 
									
									$id=$_SESSION['u_id'];
									echo $id;
									?>" class="dropdown-item"><i class="md md-face-unlock mr-2"></i> Change Password</a></li>
                                    
                                    <li><a href="../form/logout.php" class="dropdown-item"><i class="md md-settings-power mr-2"></i> Logout</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>