<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->

  <?php
       define ('TITLE','Contact Us');
       require ('navigationbar.html');
         
        ?>

  
        
        <div class="container">
            
            <h2> Our Location </h2>
            
            <div class="col-lg-4 col-sm-6 text-center">
                  <img class="img-thumbnail img-responsive img-center" src="http://placehold.it/200x200" alt="">
                <h3>HQ department
                   
                </h3>
                  <p>Address: </p>
            </div>
          
        <div class="col-lg-4 col-sm-6 text-center">
                  <img class="img-thumbnail img-responsive img-center" src="http://placehold.it/200x200" alt="">
                <h3>R&D department
                  
                </h3>
                  <p>Address:</p>
            </div>
        
         <div class="col-lg-4 col-sm-6 text-center">
                  <img class="img-thumbnail img-responsive img-center" src="http://placehold.it/200x200" alt="">
                <h3>Sales Department
                    
                </h3>
                  <p>Address: </p>
            </div>
            
            
        </div>
            
        <br/> <br/> <br/> <br/>
        
        <div class="container">
         
            <h3>Feedback  Form  </h3>
        
            <h5>Please get in touch if you need any help or have any questions  </h5>
        
       <?php 
        $action=$_REQUEST['action']; 
          if ($action=="")    /* display the contact form */ 
       { 
    ?> 
    <form  action="" method="POST" enctype="multipart/form-data"> 
        
         <input type="hidden" name="action" value="submit"> 
    
        <div class="controls">
        <div class="col-md-4">
          
            <div class="form-group">
   
    Name:<br> 
    
    <input name="name" type="text" value="" size="30" class="form-control"/><br><br>
        
                </div>
       
        </div>
            
            <div class="col-md-4">
          
            <div class="form-group">
   
      Email Address:<br> 
    
    <input name="email" type="text" value="" size="30 "class="form-control"/> <br> <br>
            </div>
            </div>
    
          <div class="col-md-4">
          
         <div class="form-group">
          
            
     Feedback Type
             <select name="title"class="form-control">
                 <option value=""> Choose one </option>
              <option value="Report Error"> Report Error </option>
              <option value="Suggestions"> Suggestions</option>
              <option value="Complaint"> Complaint </option>
              
          </select> <br> <br>
          
         </div>
          </div>
    
             <div class="col-md-12">
                <div class="form-group">
            
          Your message:<br> <br>
          <textarea name="message" rows="10" cols="50"class=form-control"> </textarea> <br> <br>
           
                </div>
             </div>
            
             <div class="col-md-12">
            
             <input type="submit" value="Submit" class="btn btn-success btn-send"/> 
             
             </div>
        </div>
             
       </form> 
       
   
         <?php 
    }  
else              
    { 
    $name=$_REQUEST['name'];     //collect data after submitting form, concept same as $_POST
    
    $email=$_REQUEST['email']; 
    
    $title = $_REQUEST['title'];
    
    $message=$_REQUEST['message']; 
    
    if (($name=="")||($email=="")|| ($title=="")||($message==""))        //if the form is empty when click the submit button
        { 
        echo "All fields are required, please fill <a href=\"\">the form</a> again."; 
        } 
    else{         
                 $dbc= mysqli_connect('localhost','root','');
              mysqli_select_db($dbc,'feedbackcollected');
            
               $name= trim($_POST['name']);
               
                $email= trim ($_POST['email']);
                
                $title= trim($_POST['title']);
                
               $message= trim ($_POST['message']);
                
                 $sql = "INSERT INTO feedbacks (name, email,title,message)
                  VALUES ('$name' , '$email' , '$title' , '$message')";
                 
                   if (mysqli_query($dbc, $sql)) 
                 {
                     echo "Successfully sent, go back to <a href=\"\">the form</a>";
                 } 
                 
                 else
                  {
                         echo "Error: " . $sql . "<br>" . mysqli_error($dbc);
                  }
            
           mysqli_close($dbc);
   }
        } 
    
?> 
        
        </div>
        <br> <br>
 <?php 

require('footer.html');

?>
