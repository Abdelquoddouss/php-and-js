<?php
  include 'config/conection.php';
?>

<?php
    $msg="";
    if(isset($_POST['submit'])){
      $nom=$_POST['nom'];
      $prenom=$_POST['prenom'];
      $phone=$_POST['phone'];
      $email=$_POST['email'];
      $passw=$_POST['password'];
      $password_hash=password_hash($passw,PASSWORD_DEFAULT);
      $query="SELECT email from inscription where email='$email'";
      $result = mysqli_query($conn,$query);
      if ($result->num_rows > 0){
       $msg="cet e-mail est déjà enregistré..";
      
    } else {
      $requet="INSERT INTO inscription (nom,prenom,phone,email,password)
      VALUES('$nom','$prenom','$phone','$email','$password_hash')";
      $query=mysqli_query($conn,$requet);
      $msg="";
      if(isset($query)){
        header('location:views/signin.php');
      }else{
        echo 'error';
      }
    }



    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="php/css/bootstrap/bootstrap.min.css"/>
    <link rel="stylesheet" href="php/css/login.css"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

</head>
<body>

    <section class="vh-100 bg-image"
  style="background-image: url('img/image 48.png');">
  <div class="mask d-flex align-items-center h-100 gradient-custom-3">
    <div class="container h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-12 col-md-9 col-lg-7 col-xl-6">
          <div class="card" style="border-radius: 15px;">
            <div class="card-body p-5">
              <h2 class="text-uppercase text-center mb-5">Create an account</h2>

              <form id="formlog" method="post">
                <div  class="form-outline mb-4">
                  <label class="form-label" for="form3Example1cg">votre nom</label>
                  <input type="text" id="nom" name="nom" class="form-control form-control-lg" />
                  <span class="error">Vous n'avez pas saisi de données dans ce champ</span>
                  <span class="error" aria-live="polite"></span>
                </div>
              <style>
                  .error{
                    width: 100%;
                    font-size: 15px;
                    color:red ;
                    font-family: Arial, Helvetica, sans-serif;
                    display: none;
                  }
            </style>

                <div class="form-outline mb-4">
                  <label class="form-label" for="form3Example1cg">votre prenom</label>
                    <input type="text" id="prenom" name="prenom" class="form-control form-control-lg" />
                    <span class="error">Vous n'avez pas saisi de données dans ce champ</span>
                  </div>
                  <div class="form-outline mb-4">
                    <label class="form-label" for="form3Example1cg">phone</label>
                    <input type="number" id="phone" name="phone" class="form-control form-control-lg" />
                    <span class="error">le nombre doit etre plus de 10 nembre</span>
                  </div>
                <div class="form-outline mb-4">
                  <label class="form-label" for="form3Example3cg"> Email</label>
    

                  <input type="email" id="email" name="email" class="form-control form-control-lg" />
                  <span class="error">This email is not valid</span>
                  <?=$msg ?>

                </div>
                             
                <div class="form-outline mb-4">
                  <label class="form-label" for="form3Example4cg">Password</label>
                  <input type="password" id="password" name="password" class="form-control form-control-lg" />
                  <span class="error">le nombre doit etre  8  nembre</span>
                </div>

                <div class="form-check d-flex justify-content-center mb-5">
                  <label class="form-check-label" for="form2Example3g">
                    I agree all statements in <a href="#!" class="text-body"><u>Terms of service</u></a>
                  </label>
                  <input class="form-check-input me-2" type="checkbox" value="" id="form2Example3cg" />
                </div>
              
                <div class="d-flex justify-content-center">
                   <button  type="submit" name="submit" 
                    class="btn btn-success btn-block btn-lg gradient-custom-4 text-body">ACCEPTER</button>
                </div>
                <p class="text-center text-muted mt-5 mb-0"> have an account? <a href="views/signin.php"
                    class="fw-bold text-body"><u>signin here</u></a></p>

              </form>
              

            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
       <script src="assets/js/signup.js"></script>
</html>