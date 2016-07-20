<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php 

define ('TITLE','Web Development');
require ('navigationbar.html');

?>

       
        
        <script>
$(document).ready(function(){
    
        $("#black").animate({left: '80px' , bottom:'90px'},6000);          //call the id from the html tag then coordinate its final position and time (milliseconds) to run
        
        $("#white").animate({right:'250px', bottom:'500px'},4000);
        
        $("#text").animate({right:'100px', bottom:'300px'},7000);
     
    
    });
    
  
        </script>
        
  
       
        
       <div id="black" style="position:absolute">
      
           <img src="web-applications-image-1-3.jpg" alt="" width="640" height="480"/>
          
       </div> <br/>
        
        <div  id="white" style="position:absolute">
            
            <h3 > About web design and development </h3>
            
        </div>
        
         
        <div id="text" style="position:absolute">
            
            <ul> <h5>Criterias to make a better website </h5>
            
                <li>Keep the design simple, fresh and unique </li>
                <li>Consider that your visitors might be visiting from laptops, tablets and mobile phones </li>
                <li> Consider site load times</li>
                <li> Make your site easily accessible</li>
                <li> Organize your site to provide a great user experience</li>
                <li> Don’t forget search engine optimization (SEO) and search engine marketing (SEM)</li>
            
            
            
            </ul>
               
            
        </div>
       
       
      
 <?php 

require('footer.html');     


?>
   
   
   