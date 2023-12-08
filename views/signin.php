

<?php

session_start(); 

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/bootstrap/bootstrap.min.css"/>
    <link rel="stylesheet" href="../assets/css/login.css"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
 
</head>
<style>
.gradient-custom-3 {
/* fallback for old browsers */
background: #84fab0;

/* Chrome 10-25, Safari 5.1-6 */
background: -webkit-linear-gradient(to right, rgba(132, 250, 176, 0.5), rgba(143, 211, 244, 0.5));

/* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
background: linear-gradient(to right, rgba(132, 250, 176, 0.5), rgba(143, 211, 244, 0.5))
}
.gradient-custom-4 {
/* fallback for old browsers */
background: #84fab0;

/* Chrome 10-25, Safari 5.1-6 */
background: -webkit-linear-gradient(to right, rgba(132, 250, 176, 1), rgba(143, 211, 244, 1));

/* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
background: linear-gradient(to right, rgba(132, 250, 176, 1), rgba(143, 211, 244, 1))
}</style>
<body>
    <section class="vh-100 bg-image"
    style="background-image: url('../img/image 48.png');">
    <div class="mask d-flex align-items-center h-100 gradient-custom-3">
      <div class="container h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
          <div class="col-12 col-md-9 col-lg-7 col-xl-6">
            <div class="card" style="border-radius: 15px;">
              <div class="card-body p-5">
                <h2 class="text-uppercase text-center mb-5">My account</h2>
                <?php
                      $_SESSION['emaillog']="";
                      ?>
                <form id="formL" method="post" action="../controller/signin.php">

                  <div class="form-outline mb-4">
                    <label class="form-label" for="form3Example3cg">Your Email</label>
                    <input type="email" id="emailL" name="email" class="form-control form-control-lg" />
                    <span class="error">This email is not valid    </span>
                  </div>
                 
                  <div class="form-outline mb-4">
                    <label class="form-label" for="form3Example4cg">Password</label>
                    <input type="password" id="passwordD" name="password" class="form-control form-control-lg" />
                    <span class="error">le nombre doit etre  8  nembre</span>
                  </div>
               
                      <style>
                      .error{
                        width: 100%;
                        font-size: 15px;
                        color:red ;
                        font-family: Arial, Helvetica, sans-serif;
                        display: none;
                   }

                      label {
                            font-family: sans-serif;
                            font-size: 1rem;
                            padding-right: 10px;
                            }
                                select {
                                  font-size: 0.9rem;
                                  padding: 2px 5px;
                                }
                        </style>
                        <br>
                        <br>
                  <div class="d-flex justify-content-center">
                    <button type="submit" name="submit" 
                      class="btn btn-success btn-block btn-lg gradient-custom-4 text-body">Entrer</button>
                  </div>
  
                  <p class="text-center text-muted mt-5 mb-0"><a href="../signup.php"
                      class="fw-bold text-body"><u>Signup here</u></a></p>
  
                </form>
  
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>    

<script src="../assets/js/signin.js"></script>
</body>
</html>