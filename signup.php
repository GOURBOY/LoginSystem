<?php
include 'partials/_dbconnect.php';
?>
<!dotype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Signup</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="signup.css">
</head>
  <body>
   <?php require 'partials/_nav.php' ?>
   <div class="alert alert-success alert-dismissible fade show" role="alert">
  <strong>Success!</strong> Your account is now created and you can login
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
    
    <div class="container">
            <h1 class="text-center">Welcome To Signup Form</h1>
    <form action="/Minor_Project/LoginSystem/signup.php">
  <div class="mb-3">
    <label for="email" class="form-label">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" name="email" aria-describedby="emailHelp">
    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
  </div>
  <div class="mb-3">
    <label for="password" class="form-label">Password</label>
    <input type="password" class="form-control" name="password" id="exampleInputPassword1">
  </div>
  <div class="mb-3">
    <label for="cpassword" class="form-label">Confirm Password</label>
    <input type="password" class="form-control" name="cpassword" id="exampleInputPassword1">
    <div id="emailHelp" class="form-text">Make sure to type the same password</div>
  </div>
  <div class="mb-3 form-check">
    <input type="checkbox" class="form-check-input" name="checkbox" id="exampleCheck1">
    <label class="form-check-label" for="checkbox">Terms & Conditions Apply</label>
  </div>
  <button type="submit" class="btn btn-primary">Signup</button>&nbsp;&nbsp;&nbsp;
  <button type="reset" class="btn btn-primary">Reset</button>
</form>     
    </div>  
    
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>
</html>