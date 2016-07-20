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

       
        
        <script type="text/javascript">
	$(document).ready(function() {
		$(".flip1").click(function() {
			$(".panel1").slideToggle("slow");             //once click, the panel will be scroll down slowly
                                                                      
		});
                
                                                    $(".flip2").click(function() {
			$(".panel2").slideToggle("slow");
                                                                      
		});
                
                                                   $(".flip3").click(function() {
			$(".panel3").slideToggle("slow");
                                                                      
		});
           
                
	});
</script>
 

<style type="text/css">
.panel1,.flip1,.panel2,.flip2 , .panel3,.flip3 {
	margin-left: 15%;
	padding: 5px;
	text-align: center;
	background: lightgray;
	border: solid 1px #fff;
                        width:70%;
                        height:50%;
                      
                       
}
 
.panel1,.panel2,.panel3 {
	width: 70%;
	height: 70%;
	display: none;
                      
}



</style>
        
   
        <p class="flip1">Mobile Application Developer</p>
        
        <div class="panel1">
	<p>4-6 years of experience</p>
	
                        <p> 3-5 years hands-on experience with mobile and web application development.</p>
                        <p> Expert level knowledge of JavaScript, HTML5, jQuery, XML, CSS, bootstrap, angularJS</p>
                        <p> Understanding of UX design principles </p>
                        <p> Must be a team player and have good communication skills </p>
        
          </div>

        <br> <br> <br>
       
    
   <p class="flip2">Marketing Manager</p>
        
        <div class="panel2">
	<p>Familiarity with the latest trends, technologies and methodologies in graphic design, web design, production, etc..</p>
	<p>Analytical skills to forecast and identify trends and challenges.</p>
                        <p>Budget-management skills and proficiency </p> 
                        <p>Excellent communication skills and ability to think creatively and innovatively </p>
          </div>

   <br> <br> <br>
        
         <p class="flip3">Internship students</p>
        
        <div class="panel3">
	<p>Either diploma or degree students </p>
	<p>Either (diploma/degree) in (Information Technology/Business) or any relevant field </p>
                       <p> Duration of intern: 5 months </p>
                       <p> Required Language: Chinese, English</p>
                       <p> Required Skills: MS Office, html,css,javascript(for IT Students) </p>
                       
        
          </div>

         <br> <br> <br>
        
       <div class="alert alert-info" style="width:70%; margin-left:15%;">
       <strong>Info!</strong> If you are interested, do come and apply at
       <a href="Career_form.php" class="btn btn-default" role="button">here</a>
     
       </div>
        
         <br> <br>
        
        <?php 
        
        require('footer.html');
        
        ?>
        
    
