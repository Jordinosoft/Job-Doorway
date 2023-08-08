<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="Techritoma-reg.css">
    <link rel="stylesheet" href="bootstrap-5.0.2-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="all.min.css">
</head>
<body>
  <!-- A grey horizontal navbar that becomes vertical on small screens -->
  <nav class="navbar navbar-expand-sm bg-dark main-nav">

 
<div class="container-fluid">

<div class="container-fluid col-md-2 col-sm-2" id="logo">
  <img src="images/Techritoma.jpg" alt="Techritoma" width="100px">
</div>


  <!-- Links -->
  <div class="col-md-8">
  <ul class="navbar-nav  menu-list" id="u-list">
    <li class="nav-item">
      <a class="nav-link" href="Techritoma.html">Home</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#About">About</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#">Contact</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#who-we-are">Team</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#">Policy</a>
    </li>
  </ul>
</div>
 

 
    <div class="dropdown dropstart text-end" col-md-2" id="svg-menu">
      <button type="button" class="btn" data-bs-toggle="dropdown" style="background-color: gray; color: white;">
        &#9776
      </button>
    
      <ul class="dropdown-menu">
        <li class="nav-item">
          <a class="nav-link text-dark" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-dark" href="Techritoma.html#About">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-dark" href="Techritoma.html#">Contact</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-dark" href="Techritoma.html#who-we-are">Team</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-dark" href="Techritoma.html#">Privacy Policy</a>
        </li>
      </ul>
  </div>


</div>


  <div class="container-fluid col-md-2 col-sm-4" id="channels-menu">
    <div class="dropdown">
      <button type="button" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown">
        Channels
      </button>
      <ul class="dropdown-menu">
        <li><a class="dropdown-item" href="#">Web Design</a></li>
        <li><a class="dropdown-item" href="#">App Developement</a></li>
        <li><a class="dropdown-item" href="#">Robotics</a></li>
        <li><a class="dropdown-item" href="#">AI</a></li>
      </ul>
    </div>
  </div>

</div>

</nav>

      
<div class="container-fluid" id="cardo-container">

        <div class="card form-holder" id="cardo">
      <div class="card-body">
        
<?php
        if(isset($_POST["submit"])){
            $fullName = $_POST["fullname"];
            $userName = $_POST["username"];
            $eMail = $_POST["email"];
            $password = $_POST["password"];
            $confirmPassword = $_POST["repeat_password"];
            $passwordHash = password_hash($password, PASSWORD_DEFAULT);
            $passwordHashtwo = password_hash($confirmPassword, PASSWORD_DEFAULT);
            $errors = array();

            if(empty($fullName) OR empty($userName) OR empty($eMail) OR empty($password) OR empty($confirmPassword)){


                array_push($errors,"All fields are required");
            }

            if(!filter_var($eMail, FILTER_VALIDATE_EMAIL)){


                array_push($errors, "Email is not valid");
            }

            if(strlen($password)<8){


                array_push($errors, "Password must be atleast 8 characteres long");
            }

            if($password!==$confirmPassword){

                array_push($errors, "Password does not match");
            }
            //We need to connect to the database before checking if the email entered already exists
            require_once "database.php";
            $sql1 = "SELECT * FROM Firstyear_reg WHERE email='$eMail'";
            $result1 = mysqli_query($conn, $sql1);
            $rowCount1 = mysqli_num_rows($result1);

            $sql2 = "SELECT * FROM Firstyear_reg WHERE username='$userName'";
            $result2 = mysqli_query($conn, $sql1);
            $rowCount2 = mysqli_num_rows($result1);

             if($rowCount1>0){

                array_push($errors, "Email already exists");
            }

            if($rowCount2>0){

                array_push($errors, "Username in use already");
            }

            if(count($errors)>0){

              foreach($errors as $error){
                  echo "<div class='alert alert-danger'>$error</div>";
              }
          }else{

                 $maxLimit = 3; //Start of counting code
                 $insertSql = "INSERT INTO Firstyear_reg (registered_count) VALUES (0)";
                 $conn->query($insertSql);
                 $sql3 = "SELECT registered_count FROM Firstyear_reg";
                 $result3 = mysqli_query($conn, $sql3);

                 if($result3 !== false && $result3->num_rows > 0){
                    $row = mysqli_fetch_assoc();
                    $registeredCount = $row["registered_count"];

                    if($registeredCount < $maxLimit){

                    //procced with registration

                // we will insert the data into the database table Firstyear_reg
                
                $sql = "INSERT INTO Firstyear_reg (fullname, username, email, password) VALUES( ?, ?, ?, ?)";
                $stmt = mysqli_stmt_init($conn);
                $preparestmt = mysqli_stmt_prepare($stmt, $sql);

                if($preparestmt){
                    mysqli_stmt_bind_param($stmt,"ssss",$fullName, $userName, $eMail, $passwordHash);
                     mysqli_stmt_execute($stmt);
                     header("location: First Year-log.php");
                }else{

                     
                    die("Something went wrong");
                }

                        $newCount = $registeredCount + 1;
                        $updateSql = "UPDATE Firstyear_reg SET registered_count = $newCount";
                        $conn->query($updateSql);
                    }else{
                        echo "<div class='alert alert-warning'>Sorry, the maximum limit has been reached.</div>";
                    }
                 }else{
                    //Handle case when the table is empty
                    $insertSql = "INSERT INTO Firstyear_reg (registered_count) VALUES (0)";
                    $conn->query($insertSql);
                 }//End of counting code


            }
        }
    mysqli_close($conn);
        ?>

    <form action="First Year-reg.php" method="post">

        <div class="form-group">
        <label for="fullname">Full Name:</label>

            <input type="text" class="form-control mt-2" name="fullname" placeholder="Full Name" id="input">
        </div>

         <div class="form-group mt-3">
            <label for="email">User Name:</label>
    
                <input type="text" class="form-control mt-2" name="username" placeholder="Username" id="input">
            </div>

        <div class="form-group mt-3">
        <label for="email">Email:</label>

            <input type="email" class="form-control mt-2" name="email" placeholder="Email" id="input">
        </div>

        

        <div class="form-group mt-3">

            <label for="password">Password:</label>
            <input type="password" class="form-control mt-2" name="password" placeholder="Password"id="input">
        </div>

        <div class="form-group mt-3">
            <label for="repeat_password">Confirm Password:</label>
            <input type="password" class="form-control mt-2" name="repeat_password" placeholder="Confirm Password" id="input">
        </div>

        <div class="form-btn">

            <input type="submit" class="btn btn-primary mt-2" name="submit" value="Register" id="input">
        </div>
    </form>
    <div>
    <p>Already have an account? <a href="First Year-log.php">Log in here!</a></p>
    </div>

    </div>
    </div>
</div>
<footer class="container-fluid" style="background-color: rgba(31, 30, 30, 0.753); color:white; padding-top: 30px;">
     
    <div class="row justify-content-evenly">
  
       <div class="col-md-4">
          <h3 >About Techritoma Mentorship</h3>
          <p style="color: grey;">Techritoma Mentorship is the best place to close the struggle</p>
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
              <li><a href="#" style="color: grey;">Channel List</a></li>
              <li><a href="#" style="color: grey;">Contact Us</a></li>
           </ul>
           </div>
       </div>
        
       <div  class="col-md-4">
       <h3>Techritoma Mentorship Contact</h3>
  
       <p style="color: grey;">Address: Molyko -Buea</p>
       <p><a href="#" style="text-decoration: none; color: grey;">Email:techritoma@gmail.com</a></p>
       <p style="color: grey;">Phone: +237679495102</p>
       </div>
    </div>
    
    <div class="row" id="footer-btm"style="background-color:rgb(31, 30, 30); margin-top: 20px;">
  
      <p class="col-md-4" style="color: gray;">&copyCopyright 2023 TECHCOSOLVED 6</p>
      <p class="col-md-6" style="color: gray;">Developed by TECHRITOMA Inc</p>
      <p  class="col-md-2" style="color: gray;"><i class="fa-brands fa-twitter" style="margin: 0 3px;"></i> <i class="fa-brands fa-facebook" style="margin: 0 3px;"></i> <i class="fa-brands fa-instagram" style="margin: 0 3px;"></i></p>
    </div> 
  
  
     </footer>
       

       


    
<script src="all.min.js"></script>  
<script src="bootstrap-5.0.2-dist/js/bootstrap.min.js"></script>  


</body>
</html>