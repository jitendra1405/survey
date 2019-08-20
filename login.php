<!DOCTYPE html>
<html>
   <title>User Login</title>
   <!--/////////////////Head Include/////////-->
   <?php include 'header.php';?>
   <!--/////////////////////////////////////-->
   <body class="login">
      <section id="login-section">
         <div class="container">
            <div class="row">
               <div class="col-md-6 col-sm-12 col-lg-6 login-form">
                  <div id="login-container">
                     <form action="" method="post" role="form" class="contactForm">
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
						
						<div class="form-group">
                        <button type="submit" title="Send Message" class="login-button">Login</button>
						</div>
                     </form>

                  </div>
               </div>
               <div class="col-md-6 col-sm-12 col-lg-6 login-form-banner">
               </div>
            </div>
         </div>
      </section>
	 <?php
class DB_Connect
{
    public function connect()
    {
      $host = "ec2-54-225-72-238.compute-1.amazonaws.com";
      $user = "oyymgxywhiwmff";
      $password = "5fcdb5e030395d64b21992644afe083d537353d7a0653755c0a166b088a826a3";
      $dbname = "d1mbimqnj4bo69";
      $port = "5432";


      $db = pg_connect( " $url $host $port $dbname $credentials"  );
      if(!$db){
         echo "Error : Unable to open database\n";
      } else {
         echo "Opened database successfully\n";
      }
      return $db;
    }
}
$db1 = new DB_Connect();
    $conn = $db1->connect();

    
?>
   </body>
</html>
