   <?php include 'header.php';?>
<html>
   <title>User Login</title>
   <!--/////////////////Head Include/////////-->

   <!--/////////////////////////////////////-->
   <body class="login">
      <section id="login-section">
         <div class="container">
            <div class="row">
               <div class="col-md-6 col-sm-12 col-lg-6 login-form">
                  <div id="login-container">
                     <form action="login.php" method="post" role="form" class="contactForm">
                           <div class="form-group">
				   
                           <input type="email" class="form-control login-form-input" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
				   
					   <div class="validation"></div>
                        </div>
					
                        <div class="form-group">
                           <input type="password" class="form-control login-form-input" name="password" id="password" placeholder="Password" data-rule="minlen:4" data-msg="Please enter correct password" />
                           <div class="validation"></div>
                        </div>
						
						<div class="form-check form-check-inline">
						  <input class="form-check-input" type="checkbox" id="KeepSignin" value="Keep me sign in">
						  <label class="form-check-label" for="KeepSignin">Keep me sign in</label>
						</div>
						
						<form action="theSamePage.php" method="post">
    								<input type="submit" name="someAction" value="GO" />
						</form>
                     </form>

                  </div>
               </div>
               <div class="col-md-6 col-sm-12 col-lg-6 login-form-banner">
               </div>
            </div>
         </div>
      </section>
	 <?php
		if($_SERVER['REQUEST_METHOD'] == "POST" and isset($_POST['someAction']))
    		{
        		abc();
		}
	  
	   function abc(){
		   	   $dbconn = pg_connect("host=ec2-54-225-72-238.compute-1.amazonaws.com port=5432 dbname=d1mbimqnj4bo69 user=oyymgxywhiwmff password=5fcdb5e030395d64b21992644afe083d537353d7a0653755c0a166b088a826a3");
			$formvalue = $_POST['email'];
		        $formvalue1 = $_POST['password'];
                     $sql = "select firstname from contact.contact where email='$formvalue' AND Lastname='$formvalue1'";	
                            $resultset = pg_query($dbconn, $sql);
		   		$num_rows = pg_num_rows($resultset);
                            while($row = pg_fetch_array($resultset)) {
                                
				
                            }
		   if($num_rows > 0){
		   header('location: survey.php');
		   }else{ echo "Please enter the correct username and password";}
		                
                            pg_close($dbconn); 
	   }
?>
   </body>
</html>
