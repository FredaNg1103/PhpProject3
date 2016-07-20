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

<?php
    if(isset($_POST['upload']))           //once the file is uploaded
    {
    	ini_set("SMTP","smtp.gmail.com");           //which smtp
                       
                        ini_set("smtp_port","587");                          //which port 
                        
                       
    	$output = '<p>File is sent</p>';
    	
    	$flags = 'style="display:none;"';

    	//Deal with the email
    	$to = 'fredang925@gmail.com';
    	$subject = 'a file for you';

    	
    	$attachment = chunk_split(base64_encode(file_get_contents($_FILES['file']['tmp_name'])));
    	$filename = $_FILES['file']['name'];

    	$boundary =md5(date('r', time())); 

    	$headers = "From someone";
    	$headers .= "\r\nMIME-Version: 1.0\r\nContent-Type: multipart/mixed; boundary=\"_1_$boundary\"";

    	$message="This is a multi-part message in MIME format.

--_1_$boundary
Content-Type: multipart/alternative; boundary=\"_2_$boundary\"

--_2_$boundary
Content-Type: text/plain; charset=\"iso-8859-1\"
Content-Transfer-Encoding: 7bit



--_2_$boundary--
--_1_$boundary
Content-Type: application/octet-stream; name=\"$filename\" 
Content-Transfer-Encoding: base64 
Content-Disposition: attachment 

$attachment
--_1_$boundary--";

    	mail($to, $subject, $message, $headers);        //a basic mail function
    }
    
  
      
?>


        
        
         <form action="" method="POST" enctype="multipart/form-data" >
             <input type="hidden" name="upload" value="1"/>
         <input type="file" name="file"  /> <br/> <br/>
         <input type="submit" name="upload"  value="upload"/>
         
          	
         
      </form>
        
    
          <?php
        
       if(isset($_FILES['file'])){
      $errors= array();
      $file_name = $_FILES['file']['name'];
      $file_size = $_FILES['file']['size'];
      $file_tmp = $_FILES['file']['tmp_name'];
      $file_type = $_FILES['file']['type'];
      $file_ext=strtolower(end(explode('.',$_FILES['file']['name'])));
      
      $expensions= array("doc","pdf");                         //only doc or pdf files are accepted
      
      if(in_array($file_ext,$expensions)=== false){
         $errors[]="extension not allowed, please choose a DOC or PDF file.";            //if the file uploaded is NOT doc or pdf format
      }
      
      if($file_size > 2097152) {
         $errors[]='File size must be excately 2 MB';              //if file size is larger 
      }
      
       if(empty($errors)==true) {
         
         echo "Success";
      }else{
            echo"Fail";
      }
     
   }
       
        ?>
        
        <?php echo $output; ?>
    
        
   
 <?php 
        
        require('footer.html');
        
        ?>