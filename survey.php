<html>
<body>
<form method="post">
    <?php
	$dbconn = pg_connect("host=ec2-54-225-72-238.compute-1.amazonaws.com port=5432 dbname=d1mbimqnj4bo69 user=oyymgxywhiwmff password=5fcdb5e030395d64b21992644afe083d537353d7a0653755c0a166b088a826a3");
			
                     $sql = "select SFID,Question_1__c from contact.question__c";
	           
                            $resultset = pg_query($dbconn, $sql);
	   		   
		            $num_rows = pg_num_rows($resultset);
	   		  
                           
				    
		for($i=1;$i<=$num_rows;$i++){
   			$row = pg_fetch_array($resultset)
        ?>
        <div class="well well-sm well-primary">
            <input type="hidden" name="ques"/><?php echo $row[1]; ?>
        </div>
	<?php
	    $sql1 = "select Option_1__c,Option_2__c,Option_3__c from contact.Option__c where question__c ='$row[0]'";
					    $resultset1 = pg_query($dbconn, $sql1);    
                               
				
	                   while($row1 = pg_fetch_array($resultset1)) {
				   
				    
				   ?>
        <div class="well well-sm">
            <div class="radio">
                <label>
                <input type="radio" name="optradio[<?php echo $i; ?>]" value="<?php echo $row1[0]; ?>"><?php echo $row1[0]; ?></label>
            </div>
            <div class="radio">
                <label>
                <input type="radio" name="optradio[<?php echo $i; ?>]" value="<?php echo $row1[1]; ?>"><?php echo $row1[1]; ?></label>
            </div>
            <div class="radio">
                <label>
                <input type="radio" name="optradio[<?php echo $i; ?>]" value="<?php echo $row1[2]; ?>"><?php echo $row1[2]; ?></label>
            </div>
        </div>
        <?php
    }
    }
			    
    ?>
    <button type="submit" class="btn btn-success" name="submit">Finish</button>
	
 <?php 
 foreach($_POST['optradio'] as $option_num => $option_val){
    echo $option_num." ".$option_val."<br>";
 
 }
      $sql1 = "INSERT into contact.Survey__c (Feedback__c) values ('".$option_num."')";
                pg_query($dbconn, $sql1); 	
	 pg_close($dbconn); 			    
?>

</form>
</body>
</html>
