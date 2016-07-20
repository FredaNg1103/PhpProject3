<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php 

define ('TITLE','Mobile Aplication Development');
require ('navigationbar.html');

?>
     
        
        <script>
$(document).ready(function(){
    
        $("#div1").fadeIn(10000);
        $("#div2").fadeIn(4000);                //started from a lower opacity mode to a higher opacity mode
        $("#div3").fadeIn(5000);
        $(h3).fadeIn(6000);
     
});
        
        </script>
        
        
        
   
      
          <div id="div1" style="display:none">
            
              <img src="mobile-app-development.jpg" alt="" width="640" height="480"/>
              
            <h3 style="position:absolute; right:20%; top:10%;"> About mobile applications development </h3>
            
        </div> 
        
        <div id="div2" style="display:none">
            
           <p id="p1" style="position:absolute; left:50%; top:30%;">  One of the more popular forms of coding in recent times is the creation of applications, 
                or apps,<br/> that run on mobile devices like phones and tablets. <br/>
                You probably use a range of different apps in your everyday life. <br/>Wouldn’t it be cool to create one of your own?
            
            </p>
            
            
                
            
        </div>
   
        <div id="div3" style="display:none">
            
            
            <p id="p2" style="position:absolute; left:50%; top:50%;"> 
                
                Mobile apps are developed for a certain platform, and the two most popular platforms today are iOS and Android.<br/>

               The iOS platform powers apps built for iPhone and iPad. To develop an app for iPhone or iPad, you need to use the Objective-C coding language and the Cocoa framework. <br/>
               
               You also need to use an IDE (integrated development environment) called Xcode. Note that Xcode only runs on the Mac, so you will need a Mac to make an iOS app.<br/>

              Android apps are developed with the Java coding language and the Android Software Development Kit, which runs on Mac, PC or Linux. You also need to use an IDE such as Eclipse.<br/>

            There are other mobile platforms such as Windows Phone, but iOS and Android are definitely the most popular. Most training focuses on these platforms. <br/>
                
                
                </p>
            
            
        </div>
        
        <?php 

       require('footer.html');     


?>
