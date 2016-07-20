<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
       
        if($dbc=mysqli_connect('localhost','root',''))
        {
            print '<p>Successfully connected to MySql </p>';
          
            if(@mysqli_Query($dbc,'Create Database feedbackcollected'))
            {
                print '<p> The database has been created </p>';
            }
            else{
                print '<p style="color:red;">Could not create the database because: <br/> '.mysqli_connect_error($dbc ). ' </p>';
            }
            
            
            if(@mysqli_select_db($dbc,'feedbackcollected'))
            {
                print '<p> The database has been selected </p>';
            }
            else
            {
                 print '<p style="color:red"> Could not select the database because: <br/> '.mysqli_connect_error($dbc). '</p>';
            }
            
        }
        else
        {
            print '<p style="color:red;">Could not connect to MySQL:.'.mysqli_connect_error($dbc ). ' </p>';
        }
        
         
        
             
             $sql = "CREATE TABLE Feedbacks
             (
                   id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
                  name VARCHAR(30) NOT NULL,
                  
                 email VARCHAR(50),
                 
                 title VARCHAR(30) NOT NULL,
                 
                message VARCHAR(50) NOT NULL,
                
                 reg_date TIMESTAMP
             )";
           
        
         if (mysqli_query($dbc, $sql)) {
               echo "Table Feedbacks created successfully";
          } else {
           echo "Error creating table: " . mysqli_error($dbc);
         }

         
        if(isset ($_POST['submitted'])){
            
            $problem=FALSE;
            
            if(!empty($_POST['name'])&& (!empty($_POST['email']))&& (!empty ($_POST['title']) ) && (!empty ($_POST['message'])) ){
       
                
                $name= trim($_POST['name']);
               
                $email= trim ($_POST['email']);
                
                $title= trim($_POST['title']);
                
                $message= trim ($_POST['message']);
            }
            else
            {
                echo '<p>Please fill all </p> ';
                $problem= TRUE;
            }
         
            
           if (!$problem) {
            
          $sql = "INSERT INTO MyGuests (name, email,title,message)
           VALUES ('$firstname' , '$email' , '$title' , '$message')";
           

           if (mysqli_query($dbc, $sql)) {
            echo "New record created successfully";
           } else {
           echo "Error: " . $sql . "<br>" . mysqli_error($dbc);
            }
         
        }
        mysqli_close($dbc);
        }
         
 
        ?>
        
    
        
        
    </body>
</html>
