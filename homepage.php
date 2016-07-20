<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->


<?php    

 define ('TITLE','Homepage');                  //The word "Homepage" will be displayed at the tab of the page,same for other pages
require ('navigationbar.html');                   //call from the navigation bar at the navigation bar html page
         

?>


       

     <div class="container">
  <br>
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
     
    </ol>
    
  <!--Is where the slide imaging performs,the div class fill is to make the images fit in the box-->
    
    <div class="carousel-inner" role="listbox">
     
        <div class="item active"> <div class="fill">
          
                <img src="1.jpg" alt="" width="1200" height="500"/>
                
            </div> </div>
        
        <div class="item"> <div class="fill">
            
              
                <img src="Web programming.jpg" alt="" width="1170" height="500"/>
            
            </div> </div>
    
        
    <div class="item"> <div class="fill">
            
            <img src="Mobile App development.jpg" alt="" width="1200" height="500"/>
                  
        </div> </div>
  
    </div>
    
    <!--The previous and next button in the slide imaging-->
    
     <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
        
  </div>

   </div>  
       
             <br/> <br/>
        
         

<?php 

require('footer.html');     //call from the footer at the footer html page


?>
