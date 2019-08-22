<?php session_start();
      //Put session start at the beginning of the file
?>   
<?php
$somevar = $_GET["uid"];
echo $somevar;
$_SESSION['varname'] = $somevar;
?>
