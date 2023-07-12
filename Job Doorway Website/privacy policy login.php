<?php
  session_start();
  if(isset($_SESSION["policy"])){
   header("location: Joobdoorway.php");
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Job Doorway Login Form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="bootstrap-5.0.2-dist/bootstrap-5.0.2-dist/css/bootstrap.css">
    <link rel="stylesheet" href="bootstrap-5.0.2-dist/bootstrap-5.0.2-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="registration.css">
    <link rel="stylesheet" href="all.min.css">
    
</head>
<body style="padding:0; margin:0;">
<header  class="navbar navbar-expand-sm bg-transparent navbar-dark">

            
<div class="container-fluid">


    <div class="col-md-2" id="loga">
      <img src="logo.png" alt="Logo" style="width: 200px;">
    </div>   

  <div class="container-fluid col-md-5" id="menu" style="width:fit-content;"> 
       <ul class="nav">
         <li class="nav-item"><a class="nav-link" href="Joobdoorway.html" style="color: white;">home</a></li>
         <li class="nav-item"><a class="nav-link" href="#" style="color:black;">job list</a></li>
         <li class="nav-item"><a class="nav-link" href="#" style="color:black; white;">verified employees</a></li>
         <li class="nav-item"><a class="nav-link" href="#" style="color:black;">contact us</a></li>
         <li class="nav-item"><a class="nav-link" href="#" style="color: black;">faqs</a></li>
             
        </ul>         
   </div> 

        <div class="col-md-4">

          <button id="privacy-policy-button" class="btn btn-primary">Privacy Policy</button>

          <!-- Privacy Policy modal -->
          <div class="modal fade" id="privacy-policy-modal" tabindex="-1" aria-labelledby="privacy-policy-modal-label" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="privacy-policy-modal-label">Privacy Policy</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                  <iframe id="privacy-policy-iframe" src="#" frameborder="0" scrolling="yes" style="width:100%; height:100vh;"></iframe>
                </div>
              </div>
            </div>
          </div>

        </div>
  </div>
</header>

<div class="container">


    <?php
       if (isset($_POST["login"])){
         $eMail = $_POST["email"];
         $password = $_POST["password"];
         require_once "database policy.php";
         $sql = "SELECT * FROM user_info WHERE email = '$eMail'";
         $result = mysqli_query($conn, $sql);
         $user = mysqli_fetch_array($result, MYSQLI_ASSOC);

         if($user){
            if(password_verify($password, $user["password"])){
               session_start();
               $_SESSION["policy"] = "yes";
               header("location: Joobdoorway.php");
               die();
            }else{
               echo "<div class='alert alert-danger'>Password does not match</div>";
            }
         }else{
            echo "<div class='alert alert-danger'>Email does not match</div>";
         }

       }
    ?>

    <form action="privacy policy login.php" method="post">


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
    <div><p>Not yet registered? <a href="privacy policy form.php">Register Here</a></p></div>
 </div>

 <footer class="container-fluid" style="background-color: rgba(31, 30, 30, 0.753); color:white; padding-top: 30px;">
     
     <div class="row offset-1">
   
        <div class="col-md-4">
           <h3 >About Job doorway</h3>
           <p style="color: grey;">Job Doorway is the best place to close the struggle</p>
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
        <h3>Job Doorway Contact</h3>
   
             <ul class="" style="list-style: none; color: grey;">
                   <li>Address: Molyko -Buea</li>
                   <li><a href="#" style="text-decoration: none; color: grey;">Email:jobdoorway@gmail.com</a></li>
                   <li>Phone: +237679495102</li>
               </ul>
        </div>
     </div>
     
     <div class="row" style="background-color:rgb(31, 30, 30); margin-top: 20px;">
   
       <p class="col" style="color: gray;">&copyCopyright 2023 TECHCOSOLVED 6</p>
       <p class="col" style="color: gray;">Developed by TECHRITOMA Inc</p>
       <p  class="col-md-2" style="color: gray;"><i class="fa-brands fa-twitter" style="margin: 0 3px;"></i> <i class="fa-brands fa-facebook" style="margin: 0 3px;"></i> <i class="fa-brands fa-instagram" style="margin: 0 3px;"></i></p>
     </div> 
   
   
      </footer>
      <script src="all.min.js"></script>
</body>
</html>