<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
          <title>Welcome to WMI</title>
        <meta charset="UTF-8">
      
         <script type="text/javascript" src="jquery.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        
        <style type="text/css">
            
    #loginform
{
   width:500px;
   height:330px;
   margin-top:100px;
   background-color:#585858;
   border-radius:3px;
   box-shadow:0px 0px 10px 0px #424242;
   padding:10px;
   box-sizing:border-box;
   font-family:helvetica;
   visibility:hidden;
   display:none;
   font-size:16pt;
}
#loginform #close_login
{
   position:absolute;
   top:140px;
   left:735px;
   width:15px;
   height:15px;
}
#loginform p
{
   margin-top:40px;
   font-size:22px;
   color:#E6E6E6;
}
#loginform #login
{
   width:250px;
   height:40px;
   border:2px solid silver;
   border-radius:3px;
   padding:5px;
}

#loginform #dologin
{
   margin-left:-5px;
   margin-top:10px;
   width:250px;
   height:40px;
   border:none;
   border-radius:3px;
   color:#E6E6E6;
   background-color:grey;
   font-size:20px;
}
            
           
        </style>
        
          <script> 
        
       $(document).ready(function(){

   $("#show_login").click(function(){
    showpopup();
   });
   $("#close_login").click(function(){
    hidepopup();
   });

});


function showpopup()
{
   $("#loginform").fadeIn();
   $("#loginform").css({"visibility":"visible","display":"block"});
}

function hidepopup()
{
   $("#loginform").fadeOut();
   $("#loginform").css({"visibility":"hidden","display":"none"});
}
        
        </script> 
    </head>
    <body>
        <?php
           
        if(isset($_POST['submitted']))                                   //if user clicks ok button
        {
            
            if(!empty($_POST['name']))                                 //if the pop up form is not empty
            {
                session_start();
                $_SESSION['name']= $_POST['name'];
                $_SESSION['loggedin']=time();                       //view the website since what time     
                header ('Location:homepage.php');              //redirect to which page
               
                                                                                                    //session of calling the name entered in this page will be displayed at navigation bar at all pages
        
                exit();
                       
                
            }
        }
        
        ?>
        
      <center>
	 <input type="button" id="show_login" value="Click Here">
        
        <div id = "loginform">
        
            <form method = "post" action = "#">
                <p>Welcome to WMI Technologies<br/>  May I know your name?</p>

               
                <input type = "text" id = "login" placeholder = "Name" name = "name" required>
                
                <input type = "submit" id = "dologin" value = "OK" >
                <input type="hidden" name="submitted" value="true"/>
            </form>

        </div>

     </center>

      
        </form>
    </body>
</html>
