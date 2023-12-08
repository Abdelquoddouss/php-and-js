
<?php
  include '../config/conection.php';
  session_start();
  $msg="";
  function signin($email,$passw,$conn){
   $query="SELECT * from inscription where email='$email'";
   $result = mysqli_query($conn,$query);
   $user_data= mysqli_fetch_assoc($result);
    if(password_verify($passw,$user_data['password'])){
      if ($result->num_rows > 0 && $user_data['role']==1){
        $_SESSION['role'] = $user_data['role'];
    
        header("location:../php/les tableaux dashbor/produit.php");
    
       } elseif($result->num_rows > 0 && $user_data['role']==0){
        $_SESSION['role'] = $user_data['role'];
        header("location:../index.php?msg=welcome");
    
       }else{
        $msg="PASSWORD OR EMAIL FALSE!!!!.";
        $_SESSION['emaillog']= $msg;
       header("location:../views/signin.php");
       }
    }
  }
?>


