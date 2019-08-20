<!DOCTYPE html>
<html>
   <title>Survey</title>
   <!--/////////////////Head Include/////////-->
   <?php include 'header.php';?>
   <!--/////////////////////////////////////-->
   <body>
  
      <section class="survey">
         <div class="container" >
            <div class="row">
				<div class="col-md-12">
					<form>
						<div class="form-group survey-question-wrapper has-separator">
							<label for="" class="survey-question">Highest Level of Education Completed:</label>
							<div class="answer-container">
							<div class="form-check answer-options">
							  <input class="form-check-input" type="radio" name="Good" id="Good" value="Good">
							  <label class="survey-answer" for="">
								Good
							  </label>
							</div>
							<div class="form-check answer-options">
							  <input class="form-check-input" type="radio" name="VeryGood" id="VeryGood" value="Very Good ">
							  <label class="survey-answer" for="">
								Very Good
							  </label>
							</div>
							<div class="form-check answer-options">
							  <input class="form-check-input" type="radio" name="excellent" id="excellent" value="excellent">
							  <label class="survey-answer" for="">
								Excellent
							  </label>
							</div>
							</div>
						</div>
						
						<div class="form-group survey-question-wrapper has-separator">
							<label for="" class="survey-question">Highest Level of Education Completed:</label>
							<div class="answer-container">
							<div class="form-check answer-options">
							  <input class="form-check-input" type="radio" name="Good" id="Good" value="Good">
							  <label class="survey-answer" for="">
								Good
							  </label>
							</div>
							<div class="form-check answer-options">
							  <input class="form-check-input" type="radio" name="VeryGood" id="VeryGood" value="Very Good ">
							  <label class="survey-answer" for="">
								Very Good
							  </label>
							</div>
							<div class="form-check answer-options">
							  <input class="form-check-input" type="radio" name="excellent" id="excellent" value="excellent">
							  <label class="survey-answer" for="">
								Excellent
							  </label>
							</div>
							</div>
						</div>
						
						<div class="form-group survey-question-wrapper has-separator">
							<label for="" class="survey-question">Highest Level of Education Completed:</label>
							<div class="answer-container">
							<div class="form-check answer-options">
							  <input class="form-check-input" type="radio" name="Good" id="Good" value="Good">
							  <label class="survey-answer" for="">
								Good
							  </label>
							</div>
							<div class="form-check answer-options">
							  <input class="form-check-input" type="radio" name="VeryGood" id="VeryGood" value="Very Good ">
							  <label class="survey-answer" for="">
								Very Good
							  </label>
							</div>
							<div class="form-check answer-options">
							  <input class="form-check-input" type="radio" name="excellent" id="excellent" value="excellent">
							  <label class="survey-answer" for="">
								Excellent
							  </label>
							</div>
							</div>
						</div>
						
						<div class="form-group survey-question-wrapper has-separator">
							<label for="" class="survey-question">Highest Level of Education Completed:</label>
							<div class="answer-container">
							<div class="form-check answer-options">
							  <input class="form-check-input" type="radio" name="Good" id="Good" value="Good">
							  <label class="survey-answer" for="">
								Good
							  </label>
							</div>
							<div class="form-check answer-options">
							  <input class="form-check-input" type="radio" name="VeryGood" id="VeryGood" value="Very Good ">
							  <label class="survey-answer" for="">
								Very Good
							  </label>
							</div>
							<div class="form-check answer-options">
							  <input class="form-check-input" type="radio" name="excellent" id="excellent" value="excellent">
							  <label class="survey-answer" for="">
								Excellent
							  </label>
							</div>
							</div>
						</div>
						
					</form>
				</div>
            </div>
         </div>
      </section>
	  
	  <!---Footer--->
	 
	    <?php
       	 
	    	   $dbconn = pg_connect("host=ec2-54-225-72-238.compute-1.amazonaws.com port=5432 dbname=d1mbimqnj4bo69 user=oyymgxywhiwmff password=5fcdb5e030395d64b21992644afe083d537353d7a0653755c0a166b088a826a3");
			
                     $sql = "select SFID,Question_1__c from contact.question__c";
	           
                            $resultset = pg_query($dbconn, $sql);
	   		   
		   		
                            while($row = pg_fetch_array($resultset)) {
				    $sql1 = "select Option_1__c,Option_2__c,Option_3__c from contact.Option__c where question__c = $row[0]";
					    $resultset1 = pg_query($dbconn, $sql1);
                               echo '<tr>
                                        <td><div class="form-group survey-question-wrapper has-separator">
							<label for="" class="survey-question">'.$row[1].'<br/></label></td>
                                        
                                    </tr>'; 
				echo 'this is from new query';
	                   while($row1 = pg_fetch_array($resultset1)) {
                                
				   echo '<tr>
                                        <td>'.$row1[0].'</td>
                                        <td>'.$row1[1].'</td>
					<td>'.$row1[2].'</td>
					
                                    </tr>'; 
                            }
                            }
	             
		   
		                
                            pg_close($dbconn); 
	   
?>
   </body>
</html>
