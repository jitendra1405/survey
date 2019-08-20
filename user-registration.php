<?php include('server.php') 
$dbconn = pg_connect("host=ec2-54-225-72-238.compute-1.amazonaws.com port=5432 dbname=d1mbimqnj4bo69 user=oyymgxywhiwmff password=5fcdb5e030395d64b21992644afe083d537353d7a0653755c0a166b088a826a3");

<!DOCTYPE html>
<html>
<head>
  <title>Registration system PHP and MySQL</title>
  <link rel="stylesheet" type="text/css" href="./style.css">
</head>
<body>
  <div class="header">
  	<h2>Register</h2>
  </div>
	
  <form method="post" action="register.php">
  	<?php include('errors.php'); ?>
  	<div class="input-group">
  	  <label>Username</label>
  	  <input type="text" name="username" value="<?php echo $username; ?>">
  	</div>
  	<div class="input-group">
  	  <label>Email</label>
  	  <input type="email" name="email" value="<?php echo $email; ?>">
  	</div>
  	<div class="input-group">
  	  <label>Password</label>
  	  <input type="password" name="password_1">
  	</div>
  	<div class="input-group">
  	  <label>Confirm password</label>
  	  <input type="password" name="password_2">
  	</div>
  	<div class="input-group">
  	  <input type='submit' name='use_button' value='something' />
  	</div>
	  if(isset($_POST['use_button']))
		{
		$x=$_POST['username'];
		$y=$_POST['email'];
		$z=$_POST['password_1'];
		$sql = "INSERT into contact.contact (FirstName,Email,LastName) values ('".$x."','".$y."','".$z."')" ;
                pg_query($dbconn, $sql); 
		}
pg_close($dbconn);
  	<p>
  		Already a member? <a href="login.php">Sign in</a>
  	</p>
  </form>
</body>
</html>
?>
