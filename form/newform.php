
<?php

session_start();
include "connection.php";
if(isset($_SESSION['firstname'])) {
            header('Location: index-2.php');            
        }
if(isset($_POST['firstname'])){
	
	$t0=$_POST['firstname'];
	$t1=$_POST['lastname'];
	$t2=$_POST['email'];
	$t3=$_POST['number'];
	$t4=$_POST['adress'];
	$t5=$_POST['city'];
	$t6=$_POST['province'];
	$t7=$_POST['password'];
$sql = "INSERT INTO signup(f_name,l_name,email,no,address,city,province,password,u_type)
VALUES ('$t0','$t1','$t2','$t3','$t4','$t5','$t6','$t7','user')";

mysqli_query($mysqli,$sql);

}
?>
                       
	
<html>
<!--[if lt IE 7 ]> <html lang="en" class="no-js ie6 lt8"> <![endif]-->
<!--[if IE 7 ]>    <html lang="en" class="no-js ie7 lt8"> <![endif]-->
<!--[if IE 8 ]>    <html lang="en" class="no-js ie8 lt8"> <![endif]-->
<!--[if IE 9 ]>    <html lang="en" class="no-js ie9"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html lang="en" class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="UTF-8" />
        <!-- <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">  -->
        <title>Login and Registration Form with HTML5 and CSS3</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
        <meta name="description" content="Login and Registration Form with HTML5 and CSS3" />
        <meta name="keywords" content="html5, css3, form, switch, animation, :target, pseudo-class" />
        <meta name="author" content="Codrops" />
        <link rel="shortcut icon" href="../favicon.ico"> 
        <link rel="stylesheet" type="text/css" href="css/demo.css" />
        <link rel="stylesheet" type="text/css" href="css/style.css" />
		<link rel="stylesheet" type="text/css" href="css/animate-custom.css" />
    </head>
    <body>
        <div class="container">
            <!-- Codrops top bar -->
            <div class="codrops-top">
                <a href="">
                </a>
                <span class="right">
                    <a href=" http://tympanus.net/codrops/2012/03/27/login-and-registration-form-with-html5-and-css3/">
                    </a>
                </span>
                <div class="clr"></div>
            </div><!--/ Codrops top bar -->
          
            <section>				
                <div id="container_demo" >
                    <!-- hidden anchor to stop jump http://www.css3create.com/Astuce-Empecher-le-scroll-avec-l-utilisation-de-target#wrap4  -->
                    <a class="hiddenanchor" id="toregister"></a>
                    <a class="hiddenanchor" id="tologin"></a>
                    
					
					
						
						
						<div id="wrapper">
                        <div id="login" class="animate form">
                            <form  action="" method="post" autocomplete="on"> 
                                <h1>SignUP</h1> 
                                <p> 
                                    <label for="firstname" class="name" data-icon="u" > Your first name </label>
                                    <input  id="firstname" name="firstname" required="required" type="text" placeholder="Mian"/>
                                </p>
                                <p> 
                                    <label for="lastname" class="lastname" data-icon="p"> Your Last Name </label>
                                    <input id="lastname" name="lastname" required="required" type="lastname" placeholder="Aqib" /> 
                                </p>
								
								<p> 
                                    <label for="email" class="email" data-icon="u" > Your email  </label>
                                    <input  id="email" name="email" required="required" type="email" placeholder="mymail@mail.com"/>
                                </p>
                                
								<p> 
                                    <label for="number" class="number" data-icon="u" > Contact Number</label>
                                    <input  id="number" name="number" required="required" type="text" placeholder="+92312..."/>
                                </p>
                                <p> 
                                    <label for="adress" class="adress" data-icon="u" > Your adress </label>
                                    <input  id="adress" name="adress" required="required" type="text" placeholder="comsats vehari"/>
                                </p>
                                
								<p> 
                                    <label for="city" class="city" data-icon="u" > Your city </label>
                                    <input  id="city" name="city" required="required" type="text" placeholder="pishawar"/>
                                </p>
                                
								<p> 
                                    <label for="province" class="province" data-icon="u" > Your province </label>
                                    <input  id="province" name="province" required="required" type="text" placeholder="KPK"/>
                                </p>
                                
								<p> 
                                    <label for="password" class="password" data-icon="u" > Your password </label>
                                    <input  id="password" name="password" required="required" type="password" placeholder="password"/>
                                </p>
                                
								
								
                                  <input type="submit" name="Sign Up" />
                                   <span class="privacy-policy" style= "font-size: inherit">
	        <p class="change_link">
									Already Member
									<a href="login.php" class="to_register">GO TO Login</a>
								</p>

                                  
                                      </span>
                            </form>
							
                        </div>
	
						
						
						
						
                        
						
                    </div>
                </div>  
            </section>
        </div>
		<?php

?>
	</body>
</html>