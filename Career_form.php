<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php 

define ('TITLE','Careers');
require ('navigationbar.html');

?>
        <div class="container">
        <h2> Application Form </h2>
        
        <h5> Interested Candidates please fill this form </h5>
        
       <?php 
        $action=$_REQUEST['action']; 
          if ($action=="")    /* display the contact form */ 
       { 
    ?> 
        
    
        
    <form  action="" method="POST" enctype="multipart/form-data"> 
        
    <input type="hidden" name="action" value="submit"> 
    
    <div class="controls">
      <div class="col-md-8">
          
            <div class="form-group">
    
    Name:<br> 
    
    <input name="name" type="text" value="" size="30" class="form-control" required/><br> <br>
      
            </div>
       
        </div>
            
     <div class="col-md-8">
          
            <div class="form-group">
    Email Address:<br> 
    
    <input name="email" type="text" value="" size="30" class="form-control" required/><br> <br>
        </div>
       
        </div>
        
        <div class="col-md-8">
          
            <div class="form-group">
    
   Contact Number: <br> 
   
   <input type="text" name="contact" size="30" class="form-control" required><br><br>
  
            </div>
        </div>
        
          <div class="col-md-6">
          
            <div class="form-group">
   
  Jobs: <br> 
  
  <input type="text" name="jobs" size="30" class="form-control">  <br><br>
  
            </div>
          </div>
        
           <div class="col-md-8">
                <div class="form-group">
            
  
  Why are you interested?<br> 
  
  <textarea name="message" rows="10" cols="20" class="form-control" required></textarea>  <br><br> 
  
 
                </div>
           </div>
        
         <div class="col-md-12">
             
   <input type="submit" value="Submit Application" class="btn btn-success btn-send"/> 
   
         </div>
   
         </div>
   
       </form> 
       
   
         <?php 
    }  
else              
    { 
    $name=$_REQUEST['name']; 
    
    $email=$_REQUEST['email']; 
    
    $contact = $_REQUEST['contact'];
    
    $jobs=$_REQUEST['jobs'];
    
    $message=$_REQUEST['message']; 
    
    if (($name=="")||($email=="")|| ($contact=="")||($jobs=="")||($message==""))          //lets say when click submit when the form is empty
        { 
        echo "No empty form allowed, please fill <a href=\"\">the form</a> again."; 
        } 
    else{         
                 $dbc= mysqli_connect('localhost','root','');                          //connect to database
              mysqli_select_db($dbc,'applicants');                                     // select which database
            
               $name= trim($_POST['name']);
               
                $email= trim ($_POST['email']);
                
               $contact=trim($_POST['contact']);
               
               $jobs=trim($_POST['jobs']);
                
               $message= trim ($_POST['message']);                              //the datas after that will be sent to database....by decalring the SQL statement below
                
                 $sql = "INSERT INTO candidates (name, email,contact,jobs,message)                  
                  VALUES ('$name' , '$email' , '$contact' , '$jobs', '$message')";
                 
                   if (mysqli_query($dbc, $sql)) 
                 {
                     echo "Successfully sent, proceed to <a href=\"FileUpload.php\">Upload your resume</a>";                //once the form is submitted then go to the next page to upload file
                 } 
                 
                 else
                  {
                         echo "Error: " . $sql . "<br>" . mysqli_error($dbc);         //if there is error
                  }
            
           mysqli_close($dbc);           //a must to close

   }
        } 
    
?> 
     </div>
   
   <?php 
        
        require('footer.html');
        
        ?>