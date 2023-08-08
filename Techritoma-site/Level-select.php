<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
      <a class="nav-link" href="Techritoma.html#About">About</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="Techritoma.html#">Contact</a>
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
          <a class="nav-link text-dark" href="Techritoma.html">Home</a>
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
          <a class="nav-link text-dark" href="#">Privacy Policy</a>
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

<div class="card d-flex form-holder" id="cardo">
    <div class="card-body">

        
<?php
        if(isset($_POST["submit"])){

            $level = $_POST["level"];
            $errors = array();
            
            if(empty($level)){


            array_push($errors,"All fields are required");
          }
            require_once "database.php";

            if(count($errors)>0){


              foreach($errors as $error){

                  echo "<div class='alert alert-danger'>$error</div>";
              }
          }else{

              // we will insert the data into the database table Tech_reg
              
              $sql = "INSERT INTO level_select (level) VALUES(?)";
              $stmt = mysqli_stmt_init($conn);
              $preparestmt = mysqli_stmt_prepare($stmt, $sql);

              if($preparestmt){
                   mysqli_stmt_bind_param($stmt,"s",$level);
                   mysqli_stmt_execute($stmt);

                   $query = "SELECT * FROM level_select WHERE level = ?";

                   $stmt2 = $conn->prepare($query);
                   
                   $stmt2->bind_param('s', $level);
                   
                   $stmt2->execute();

                   $result = $stmt2->get_result();

                   if($result->num_rows > 0){
                      $row = $result->fetch_assoc();
                      $dashboard = '';

                      if($row['level'] == 'First Year'){
                        $dashboard = 'First Year-reg.php';
                      }elseif($row['level'] == 'Second Year'){
                        $dashboard = 'Techritoma-reg.php';
                      }else{
                        $dashboard = 'Techritoma-reg.php';
                      }

                      header("location: $dashboard");
                      exit();
                   }else{
                    echo "<div class='alert alert-danger'>Invalid input!</div>";
                   }

                   $stmt2->close();
                   $mysqli->close();


                  
              }else{
                   
                  die("Something went wrong");
              }
          }


        
       }
    
        ?>

        <form action="level-select.php" method="POST">
        <h3 class="text-center">Select Level:</h3>
           <div class="form-check">
                
                <input type="radio" class="form-check-input" id="radio1" value="First Year" name="level">
                <label class="form-check-label" for="radio1">First Year</label>
            </div>    
            
            <div class="form-check">
                <input type="radio" class="form-check-input" id="radio2" value="Second Year" name="level">
                <label class="form-check-label" for="radio2">Second Year</label>
            </div>

            <div class="form-check">
                <input type="radio" class="form-check-input" id="radio3" value="Third Year" name="level">
                <label class="form-check-label" for="radio3">Third Year</label>
            </div>

            <div class="form-btn">
             <input type="submit" class="btn btn-primary mt-2" name="submit" value="Submit" id="submit-btn">
             
            </div>

        </form>

    </div>
</div>

</div>
<footer class="container-fluid" style="background-color: rgba(31, 30, 30, 0.753); color:white; padding-top: 30px; ">
     
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
<script src="bootstrap-5.0.2-dist/js/bootstrap.min.js"></script> 
<script src="all.min.js"></script> 
</body>
</html>