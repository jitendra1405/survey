<!DOCTYPE html>
<html>
   <title>Survey</title>
   <!--/////////////////Head Include/////////-->
   <?php include 'header.php';?>
   <!--/////////////////////////////////////-->
   <body>
   <!--Banner for company branding 
		<section class="survey-header-banner">
			<div class="row">
				<div class="col-md-12 col-sm-12">
					<div class="company-logo">
						Company Name
					</div>
				</div>
			</div>
		</section>-->
   
   
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
			
                     $sql = "select Question_1__c from contact.question__c";	
                            $resultset = pg_query($dbconn, $sql);
		   		
                            while($row = pg_fetch_array($resultset)) {
                              echo '<tr>
                                        <td>'.$row[0].'</td>
                                        
                                    </tr>';   
				
                            }
		   
                            pg_close($dbconn); 
	   }
?>
   </body>
</html>
