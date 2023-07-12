<?php
  session_start();
  if(isset($_SESSION["user"])){
   header("location: E-commerce.php");
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="bootstrap-5.0.2-dist/bootstrap-5.0.2-dist/css/bootstrap.css">
    <link rel="stylesheet" href="bootstrap-5.0.2-dist/bootstrap-5.0.2-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="registration.css">
    <link rel="stylesheet" href="all.min.css">
   
</head>
<body style="margin: 0; padding: 0;">
<header class="navbar navbar-expand-sm">
   <div class="col-md-2" style="text-align: center;"><h2>Jordinosoft</h2></div>

<div id="menu-div" class="col-md-10">

  <ul class="menu-ul" style="display: flex;

    list-style: none;
    justify-content: center; padding-top: 30px;">


      <li style="margin: 0 10px;"><a style="color: black; text-decoration:none;" href="http://localhost/LOGIN_REGISTER/E-commerce.php">Home</a></li>
      <li style="margin: 0 10px;"><a style="color: black; text-decoration:none;" href="#">About</a></li>
      <li style="margin: 0 10px;"><a style="color: black; text-decoration:none;" href="#">Contact</a></li>
      <li style="margin: 0 10px;"><a style="color: black; text-decoration:none;" href="#">Projects</a></li>
      <li style="margin: 0 10px;">
      <div class="dropdown">

            <button type="button" class="btn btn-success dropdown-toggle" data-bs-toggle="dropdown">
              Help
             </button>
             <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="#">Site Help</a></li>
                <li><a class="dropdown-item" href="#">Themes</a></li>
                <li><a class="dropdown-item" href="privacy policy.html">Privacy Policy</a></li>
            </ul>      
        </div>
    </li>
  </ul>
</div>



   </header>


 <div class="container">

    <?php
       if (isset($_POST["login"])){
         $eMail = $_POST["email"];
         $password = $_POST["password"];
         require_once "database.php";
         $sql = "SELECT * FROM users WHERE email = '$eMail'";
         $result = mysqli_query($conn, $sql);
         $user = mysqli_fetch_array($result, MYSQLI_ASSOC);

         if($user){
            if(password_verify($password, $user["password"])){
               session_start();
               $_SESSION["user"] = "yes";
               header("location: E-commerce.php");
               die();
            }else{
               echo "<div class='alert alert-danger'>Password does not match</div>";
            }
         }else{
            echo "<div class='alert alert-danger'>Email does not match</div>";
         }

       }
    ?>

    <form action="login.php" method="post">

        <div class="form-group">

            <label for="email">Enter your Email:</label>
            <input class="form-control" name="email" type="email" placeholder="Email">
        </div>

        <div class="form-group">

            <label for="password">Enter your Password:</label>
            <input class="form-control" name="password" type="password" placeholder="Email">
        </div>

        <div class="form-btn">
            <input type="submit" value="login" name="login" class="btn btn-primary">
        </div>
    </form>
    <div><p>Not yet registered? <a href="registration.php">Register Here</a></p></div>
 </div>


 <footer class="container-fluid" style="background-color: rgba(31, 30, 30, 0.753); color:white; padding-top: 30px;">
     
  <div class="row offset-1">

     <div class="col-md-4">
        <h3 >About Jordinosoft</h3>
        <p style="color: grey;">Jordinosoft is the best place to close the struggle</p>
     </div>

     <div  class="col-md-4">
        <h3>Quick info</h3>
        <div class="row">
        <ul class="col-md-4" style="list-style: none;">
           <li><a href="#" style="text-decoration: none; color: grey;">Home</a></li>
           <li><a href="#" style="text-decoration: none; color: gray;">Employers</a></li>
            <li><a href="#" style="text-decoration: none; color: grey;">Go to top</a></li>
         </ul>

         <ul class="col-md-4" style="list-style: none;">
            <li><a href="#" style="color: grey;">Job List</a></li>
            <li><a href="#" style="color: grey;">Contact Us</a></li>
         </ul>
         </div>
     </div>
      
     <div  class="col-md-4">
     <h3>Jordinosoft Contact</h3>
          <ul class="" style="list-style: none; color: grey;">
                <li>Address: Molyko -Buea</li>
                <li><a href="#" style="text-decoration: none; color: grey;">Email:jordinosoft@gmail.com</a></li>
                <li>Phone: +237679495102</li>
            </ul>
     </div>
  </div>
  
  <div class="row" style="background-color:rgb(31, 30, 30); margin-top: 20px;">
    <p class="col" style="color: gray;">&copyCopyright 2023 TECHCOSOLVED 6</p>
    <p class="col" style="color: gray;">Developed by Jordinosoft Inc</p>
    <p  class="col-md-2" style="color: gray;"><i class="fa-brands fa-twitter" style="margin: 0 3px;"></i> <i class="fa-brands fa-facebook" style="margin: 0 3px;"></i> <i class="fa-brands fa-instagram" style="margin: 0 3px;"></i></p>
  </div> 
   </footer>
 <script src="bootstrap-5.0.2-dist/bootstrap-5.0.2-dist/js/bootstrap.min.js"></script>
 <script src="bootstrap-5.0.2-dist/bootstrap-5.0.2-dist/js/bootstrap.js"></script>
<script src="all.min.js"></script>
</body>
</html>
