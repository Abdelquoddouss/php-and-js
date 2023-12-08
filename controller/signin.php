<?php
  include __DIR__ . "../../config/conection.php";
    include "../models/signin.php";

   
    if(isset($_POST['submit'])){
      
      $email=$_POST['email'];
      $passw=$_POST['password'];
     $result=signin($email,$passw,$conn);
    // echo $email;








    
    }

?>