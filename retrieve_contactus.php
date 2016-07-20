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
      
        $dbc= mysqli_connect('localhost','root','');
        mysqli_select_db($dbc,'feedbackcollected');
        
        $sql= 'SELECT id,name,title,message FROM feedbacks ';
        
        $result = mysqli_query($dbc, $sql);
        ?>
        
        <table border="2">
  <thead>
    <tr>
      <th>ID</th>
      <th>Name</th>
      <th>Title</th>
      <th>Message </th>
      
    
    </tr>
  </thead>
  <tbody>
        <?php 
        if (mysqli_num_rows($result) > 0) {
   
       while($row = mysqli_fetch_assoc($result)) {
       // echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. " - Email: " . $row["email"]."<br>";
        echo "<tr><td>{$row['id']}</td><td>{$row['name']}</td><td>{$row['title']}</td><td>{$row['message']}</td>  </tr> ";
       
        
             }
    }
    
    else {
             echo "0 results";
    }

mysqli_close($dbc);
        
        ?>
      
       </tbody>
</table>
       
        
    </body>
</html>
