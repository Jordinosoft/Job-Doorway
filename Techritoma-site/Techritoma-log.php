<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Logint</title>
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
       if (isset($_POST["login"])){
         $eMail = $_POST["email"];
         $userName = $_POST["username"];
         $password = $_POST["password"];
         require_once "database.php";
         $sql = "SELECT * FROM Tech_reg WHERE email = '$eMail' AND username = '$userName'";
         $result = mysqli_query($conn, $sql);
         $user = mysqli_fetch_array($result, MYSQLI_ASSOC);

         if($user){
            if(password_verify($password, $user["password"])){
               //session_start();
               //$_SESSION["user"] = "yes";
               header("location: Techritoma.html");
               die();
            }else{
               echo "<div class='alert alert-danger'>Password does not match</div>";
            }
         }else{
            echo "<div class='alert alert-danger'>Incorrect Username or Email</div>";
         }

       }
       
    ?>
    <form action="Techritoma-log.php" method="post">
    <div class='alert alert-success'>You are registered successfully</div>
        <div class="form-group mt-3">
            <label for="email">User Name:</label>
    
                <input type="text" class="form-control mt-2" name="username" placeholder="Username" id="input">
            </div>
            
        <div class="form-group mt-3">
        <label for="email">Email:</label>

            <input type="email" class="form-control mt-2" name="email" placeholder="Email" id="input">
        </div>

        

        <div class="form-group mt-3">

            <label for="password" >Password:</label>
            <input type="password" class="form-control mt-2" name="password" placeholder="Password"id="input">
        </div>

        <div class="form-btn">

            <input type="submit" class="btn btn-primary mt-2" name="login" value="Login" id="input">
        </div>
    </form>
    <div>
    <p>
      
      <!--No account? <a href="terms-conditions.html">Register in here!</a>-->

          <!-- Button to trigger the popup -->
    <!--<button type="button" class="btn btn-primary" onclick="showPopup()">Register</button>-->
    No account? <a class="btn"  onclick="showPopup()" style="color: blue; text-decoration: underline;">Register in here!</a>

    <!-- Bootstrap modal -->
    <div class="modal" id="myModal">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-body">
                    <!-- Include your existing popup design here -->
                    <div class="wrapper flex_align_justify" id="my-popup">
                        <div class="tc_wrap">
                            <div class="tab_list">
                                <ul>
                                    <li data-tc="tab_item_1" class="active">Terms of use</li>
                                    <li data-tc="tab_item_2">intellectual property rights</li>
                                    <li data-tc="tab_item_3">Prohibited activities</li>
                                    <li data-tc="tab_item_4">Termination Clause</li>
                                    <li data-tc="tab_item_5">Governing Law</li>
                                </ul>
                            </div>
                            <div class="tabs_content">
                                <div class="tabs_head">
                                    <h2>Terms & Conditions</h2>
                                </div>
                                <div class="tabs_body">
                                    <div class="tab_item tab_item_1">
                                        <h3>Terms of use</h3>
                                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quibusdam, corrupti sunt? Hic est, veniam harum at numquam, voluptatibus totam amet vel voluptatum enim pariatur culpa, eos inventore libero quasi nemo.</p>
                                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quibusdam, corrupti sunt? Hic est, veniam harum at numquam, voluptatibus totam amet vel voluptatum enim pariatur culpa, eos inventore libero quasi nemo.</p>
                                    </div>
                                    <div class="tab_item tab_item_2" style="display: none;">
                                        <h3>intellectual property rights</h3>
                                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quibusdam, corrupti sunt? Hic est, veniam harum at numquam, voluptatibus totam amet vel voluptatum enim pariatur culpa, eos inventore libero quasi nemo.</p>
                                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quibusdam, corrupti sunt? Hic est, veniam harum at numquam, voluptatibus totam amet vel voluptatum enim pariatur culpa, eos inventore libero quasi nemo.</p>
                                    </div>
                                    <div class="tab_item tab_item_3" style="display: none;">
                                        <h3>Prohibited activities</h3>
                                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quibusdam, corrupti sunt? Hic est, veniam harum at numquam, voluptatibus totam amet vel voluptatum enim pariatur culpa, eos inventore libero quasi nemo.</p>
                                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quibusdam, corrupti sunt? Hic est, veniam harum at numquam, voluptatibus totam amet vel voluptatum enim pariatur culpa, eos inventore libero quasi nemo.</p>
                                    </div>
                                    <div class="tab_item tab_item_4" style="display: none;">
                                        <h3>Termination Clause</h3>
                                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quibusdam, corrupti sunt? Hic est, veniam harum at numquam, voluptatibus totam amet vel voluptatum enim pariatur culpa, eos inventore libero quasi nemo.</p>
                                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quibusdam, corrupti sunt? Hic est, veniam harum at numquam, voluptatibus totam amet vel voluptatum enim pariatur culpa, eos inventore libero quasi nemo.</p>
                                    </div>
                                    <div class="tab_item tab_item_5" style="display: none;">
                                        <h3>Governing Law</h3>
                                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quibusdam, corrupti sunt? Hic est, veniam harum at numquam, voluptatibus totam amet vel voluptatum enim pariatur culpa, eos inventore libero quasi nemo.</p>
                                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quibusdam, corrupti sunt? Hic est, veniam harum at numquam, voluptatibus totam amet vel voluptatum enim pariatur culpa, eos inventore libero quasi nemo.</p>
                                    </div>
                                </div>
                                <div class="tab_foot flex_align_justify" id="button">
                                    <button class="Decline" onclick="closePopup()">Decline</button>
                                    <button class="Agree"  onclick="openRegisterPage()">Agree</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    
    
    </p>
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

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<script>
    function showPopup() {
        $('#myModal').modal('show');
    }
</script>
<script>
    function openRegisterPage() {
      window.location.href = "level-select.php";
    }
  </script>
  
  <script>
    function closePopup() {
      $('#myModal').modal('hide');
    }
  </script>
</body>
</html>