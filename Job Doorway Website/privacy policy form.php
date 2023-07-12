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
    <title>Job Doorway Registration Form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="bootstrap-5.0.2-dist/bootstrap-5.0.2-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="bootstrap-5.0.2-dist/bootstrap-5.0.2-dist/css/bootstrap.css">
    <link rel="stylesheet" href="registration.css">
   
</head>
<body style="padding:0; margin:0;">
<header  class="navbar navbar-expand-sm bg-transparent navbar-dark">

            
            <div class="container-fluid">

    
                <div class="col-md-2" id="loga">
                  <img src="logo.png" alt="Logo" style="width: 200px;">
                </div>   

              <div class="container-fluid col-md-5 text-center" id="menu" style="width:fit-content;"> 
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
  if(isset($_POST["submit"])){
    $fullName = $_POST["fullname"];
    $eMail = $_POST["email"];
    $password = $_POST["password"];
    $confirmPassword = $_POST["repeat_password"];
    $passwordHash = password_hash($password, PASSWORD_DEFAULT);
    $passwordHashtwo = password_hash($confirmPassword, PASSWORD_DEFAULT);
    $errors = array();

    if(empty($fullName) OR empty($eMail) OR empty($password) OR empty($confirmPassword) ){
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
    require_once "database policy.php";
    $sql = "SELECT * FROM user_info WHERE email='$eMail'";
    $result = mysqli_query($conn, $sql);
    $rowCount = mysqli_num_rows( $result);

    if($rowCount>0){

        array_push($errors, "Email already exists");
    }

    if(count($errors)>0){

        foreach($errors as $error){
            echo "<div class='alert alert-danger'>$error</div>";
        }
    }else{

        // we will insert the data into the database table user_info
        
        $sql = 'INSERT INTO user_info(fullname, email, password) VALUES( ?, ?, ?)';
        $stmt = mysqli_stmt_init($conn);
        $preparestmt = mysqli_stmt_prepare($stmt,$sql);

        if($preparestmt){

            mysqli_stmt_bind_param($stmt,"sss",$fullName,$eMail,$passwordHash);
            mysqli_stmt_execute($stmt);
            echo "<div class='alert alert-success'>You are registered successfully</div>";
        }else{
          
            die("Something went wrong");
        }
    }
}
?>

<form action="privacy policy form.php" method="post">

    <div class="form-group">
    <label for="fullname">Full Name:</label>

        <input type="text" class="form-control" name="fullname" placeholder="Full Name" id="input">
    </div>

    <div class="form-group">
    <label for="email">Email:</label>
    

        <input type="email" class="form-control" name="email" placeholder="Email" id="input">
    </div>

    <div class="form-group">

        
        <label for="password" >Password:</label>
        <input type="password" class="form-control" name="password" placeholder="Password"id="input">
    </div>

    <div class="form-group">
                <label for="repeat_password">Confirm Password:</label>
                <input type="password" class="form-control" name="repeat_password" placeholder="Confirm Password" id="input">
    </div>

     <div class="form-btn"  id="Register" style="display: none;">
         <input type="submit" class="btn btn-primary" value="Register" id="input">
     </div>   

     <div><p>Already have an account? <a href="privacy policy login.php">Log in Here</a></p></div>
  <form>

    <div class="form-group">

      <div class="form-check form-check-inline" >
        <input class="form-check-input" type="checkbox" id="acceptCheckbox" required>
        <label class="form-check-label" for="acceptCheckbox">
          I accept the terms and conditions of the privacy policy.
        </label>
      </div>

      <div class="form-check form-check-inline">
        <input class="form-check-input" type="checkbox" id="declineCheckbox">
        <label class="form-check-label" for="declineCheckbox">
          I decline the terms and conditions of the privacy policy.
        </label>
      </div>

    </div>

    <div id="acceptMessage" class="form-group" style="display: none;">
      <p>Thank you for accepting our privacy policy. Please click the button below to submit.</p>
      <button type="submit" class="btn btn-primary" name="submit"  id="submitButton"style="cursor: pointer;">Submit</button>
    </div>

    <div id="declineMessage" class="form-group" style="display: none;"> 
      <p>We're sorry to hear you're not interested. If you change your mind, please review our privacy policy and accept the terms and conditions to proceed.</p>
    </div>
    
  </form>

</form>

        
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
     <h3>Joob Doorway Contact</h3>

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
     

<script src="bootstrap-5.0.2-dist/bootstrap-5.0.2-dist/js/bootstrap.js"></script>
<script src="bootstrap-5.0.2-dist/bootstrap-5.0.2-dist/js/bootstrap.min.js"></script>
<script>

  const privacyPolicyButton = document.getElementById("privacy-policy-button");
  const privacyPolicyModal = new bootstrap.Modal(document.getElementById("privacy-policy-modal"));
  const privacyPolicyIframe = document.getElementById("privacy-policy-iframe");
  
  privacyPolicyButton.addEventListener("click", () => {

 
    privacyPolicyIframe.src = "http://localhost/login_register/privacy%20policy.php?";
    privacyPolicyModal.show();
  });
  </script>
<script>

// Get elements
const acceptCheckbox = document.getElementById('acceptCheckbox');
const declineCheckbox = document.getElementById('declineCheckbox');
const acceptMessage = document.getElementById('acceptMessage');
const declineMessage = document.getElementById('declineMessage');
const submitButton = document.getElementById('submitButton');

// Add event listeners
acceptCheckbox.addEventListener('change', function() {


  if (this.checked) {
    acceptMessage.style.display = 'block';
    submitButton.classList.add('btn-warning');
    submitButton.disabled = false;
  } else {

    acceptMessage.style.display = 'none';
    submitButton.classList.remove('btn-warning');
    submitButton.disabled = true;
  }
});

declineCheckbox.addEventListener('change', function() {


  if (this.checked) {  
    declineMessage.style.display = 'block';     
  } else {       
    declineMessage.style.display = 'none';
  }
});


</script>
</body>
</html>