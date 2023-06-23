<?php
include ('connection.php'); ?>

<?php 
if(!isset($SESSION)){
  session_start(); }

  if(isset($_POST['btn2']))
  {
  $recipename = mysqli_real_escape_string($con, $_POST['recipename']);
  $type = mysqli_real_escape_string($con, $_POST['type']);
  $list = mysqli_real_escape_string($con, $_POST['list']);
  $steps = mysqli_real_escape_string($con, $_POST['steps']);
  $photos = mysqli_real_escape_string($con, $_POST['photos']);
  $email = mysqli_real_escape_string($con, $_POST['email']);
  $fullname = mysqli_real_escape_string($con, $_POST['fullname']);

  $sql = "INSERT INTO submit (recipename,type,list,steps,photos,email,fullname) VALUES ('$recipename','$type','$list','$steps','$photos','$email','$fullname')";
  mysqli_query($con,$sql);
  $_SESSION['name']=$fullname;
  header('location:confirmed.html');
  
  }?>
<!DOCTYPE html>
<html>
<head>
        <title>Submit Recipe</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="styling.css">
        <link rel=”stylesheet” href=”css/bootstrap.css”>
        <link rel=”stylesheet” href=”css/bootstrap-responsive.css”>
        <link rel="stylesheet" href="./css/bootstrap.css">
	      <script src="./js/jquery-3.6.0.js"></script>
        <script src="./js/bootstrap.js"></script>
       <script src="./js/java.js"></script>
        <script src="https://kit.fontawesome.com/aa3edc3ef9.js" crossorigin="anonymous"></script>
        <style>
            @import url('https://fonts.googleapis.com/css2?family=Quicksand&display=swap');
          </style>
          <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
          <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
          <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    </head>
    <body class="signup-body">
    <nav class="navbar navbar-expand-lg py-3">
          <li class="nav-item">
            <img src="logo-pink.png" width="60px">
          </li>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon bg-light p-4"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
              <li class="nav-item active">
                <a class="nav-link" href="bentohome.html">Home<span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="signup.php">Recipes</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="signup.php">Blog</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="signup.php">Shop</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="signup.php">Hidden Allergens</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="contact.html">Contact Us</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="signup.php">Sign Up</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="login.php">Log In</a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-danger" href="submit.php">Submit Recipe</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#"></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#"></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#"></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#"></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#"></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#"></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#"></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#"></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#"><i class="fa-brands fa-instagram"></i></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#"><i class="fa-brands fa-facebook"></i></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#"><i class="fa-brands fa-twitter"></i></a>
              </li>
            </ul>
          </div>
        </nav>

            <div class="row">
              <form class="submit-recipe-form col-sm-6 mx-auto my-5 py-5 px-5 border rounded" style="--bs-bg-opacity: .5;" method="POST" action="submit.php">
                <p class="display-4 text-center">Send us your recipes!<br><br></p>

                <div class="row">
                    <div class="col">
                        <label>Recipe name</label>
                      <input type="text" class="form-control" name="recipename" placeholder="">
                    </div>
                    <div class="col">
                        <label>Type</label>
                      <input type="text" name="type" class="form-control" placeholder="e.g. dessert, dinner,..">
                    </div>
                  </div>
                <div class="form-group">
                  <label for="exampleFormControlTextarea1">List of ingredients</label>
                  <textarea class="form-control" name="list" id="exampleFormControlTextarea1" rows="2"></textarea>
                </div>
                <div class="form-group">
                    <label for="exampleFormControlTextarea1">Cooking steps</label>
                    <textarea class="form-control" name="steps" id="exampleFormControlTextarea1" rows="4"></textarea>
                  </div>
                  <div class="form-group">
                    <label for="exampleFormControlFile1">Upload photos</label>
                    <input type="file" class="form-control-file" name="photos" id="exampleFormControlFile1">
                  </div>
                  <div class="form-group">
                    <label for="exampleFormControlInput1">Email address</label>
                    <input type="email" name="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
                  </div>
                  <div class="form-group">
                    <label for="formGroupExampleInput">Your full name</label>
                    <input type="text" name="fullname" class="form-control" id="formGroupExampleInput" placeholder="">
                  </div>
                  <button class="btn2" name="btn2" type="submit">Submit</button>
              </form>
              </div>

              <footer class="text-center text-lg-start text-white">
                <div class="container p-4 pb-0">
                  <section class="">
                    <div class="row">
                      <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mt-3 vision">
                        <h6 class="text-uppercase mb-4 font-weight-bold">
                          BENTO
                        </h6>
                        <p>
                          We want to be global to help all the people struggling, regardless of anything.
                        </p>
          
                        <p>Download our mobile app</p>
                        <a class="download-app">
                          <img src="googleplay.svg" alt="Google Play">
                        </a><br><br>
                        <a class="download-app">
                          <img src="appstore.svg" alt="App Store">
                        </a>
                      </div>
            
                      <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mt-3">
                        <h6 class="text-uppercase mb-4 font-weight-bold">Services</h6>
                        <p>
                          <a class="footer-links">Recipes</a>
                        </p>
                        <p>
                          <a class="footer-links">Blog</a>
                        </p>
                        <p>
                          <a class="footer-links">Shop</a>
                        </p>
                        <p>
                          <a class="footer-links">Hidden Allergens</a>
                        </p>
                      </div>
            
                      <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mt-3">
                        <h6 class="text-uppercase mb-4 font-weight-bold">Contact Us</h6>
                        <p><i class="fas fa-home mr-3"></i> 5th Settlement, Cairo, Egypt</p>
                        <p><i class="fas fa-envelope mr-3"></i>  bento.webapp@gmail.com</p>
                        <p><i class="fas fa-phone mr-3"></i> +20 0111 255 2668</p>
                      </div>
            
                      <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mt-3">
                        <h6 class="text-uppercase mb-4 font-weight-bold">Follow us</h6>
          
                        <a class="btn btn-primary btn-floating m-1 social-icon"
                           style="background-color: #3b5998; border: none"
                           href="#!"
                           role="button"
                           ><i class="fab fa-facebook-f"></i
                          ></a>
            
                        <a
                           class="btn btn-primary btn-floating m-1 social-icon"
                           style="background-color: #55acee; border: none"
                           href="#!"
                           role="button"
                           ><i class="fab fa-twitter"></i
                          ></a>
            
                        <a
                           class="btn btn-primary btn-floating m-1 social-icon"
                           style="background-color: #ac2bac; border: none"
                           href="#!"
                           role="button"
                           ><i class="fab fa-instagram"></i
                          ></a>
                      </div>
                    </div>
                  </section>
                </div>
                <br>
                <div class="text-center p-3">
                  © 2020 Copyright:
                  <a class="text-white footer-links" href="https://bento.com/">bento.com</a>
                </div>
              </footer>
    

    </body>
    </html>