<?php
$dbconn = pg_connect("host=ec2-54-225-72-238.compute-1.amazonaws.com port=5432 dbname=d1mbimqnj4bo69 user=oyymgxywhiwmff password=5fcdb5e030395d64b21992644afe083d537353d7a0653755c0a166b088a826a3");
echo
"<form action='' method='post'>
User Name: <input type='text' name='name'/><br/>

Email: <input type='text' name='email'/><br/>
Password: <input type='text' name='lname'/><br/>
Confirm Password: <input type='text' name='lname'/><br/>
<input type='submit' name='use_button' value='something' />
</form>";
if(isset($_POST['use_button']))
{
	$x=$_POST['name'];
	$y=$_POST['email'];
	$z=$_POST['lname'];
	$sql = "INSERT into contact.contact (FirstName,Email,LastName) values ('".$x."','".$y."','".$z."')";
                pg_query($dbconn, $sql); 
}
pg_close($dbconn);
?>

