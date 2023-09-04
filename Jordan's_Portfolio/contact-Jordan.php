<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap-5.0.2-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="all.min.css">
    <link rel="stylesheet" href="My portfolio.css">
    <link rel="stylesheet" href="contact-jordan.css">
    <title>Contact Jordan</title>
</head>
<body>
    <header class="container-fluid navbar navbar-expand-sm pc-menu" id="header" style="justify-content: space-around;">

        <div class="logo">
          <h1>E<span>l</span>a<span>m</span>e <span>J</span>o<span>r</span>d<span>a</span>n</h1>
        </div>
  
        <div class="Menu">
          <ul class="Menu-ul d-flex">
              <li><a href="My portfolio.html" id="nav1">Home</a></li>
              <li><a href="My portfolio.html#About-section-pc" id="nav2">About</a></li>
              <li><a href="My portfolio.html#Skills-section-pc" id="nav3">Skills</a></li>
              <li><a href="My portfolio.html#Services-section-pc" id="nav4">Services</a></li>
              <li><a href="My portfolio.html#Projects-section-pc " id="nav5">Projects</a></li>
          </ul>
        </div>

     </header>
<div id="header2" class="w-100">  
     <header class="container-fluid phone-menu navbar navbar-expand-sm" id="header"  style="justify-content: space-between;">

      <div class="logo">
         <h1>E<span>l</span>a<span>m</span>e <span>J</span>o<span>r</span>d<span>a</span>n</h1>
      </div>

      
        <div col-md-2" id="svg-menu">
         <button type="button" class="btn " style="border: none; box-shadow: none;">
           <span id="open" type="button" class="btn text-dark" style="font-size: xx-large;">&#9776</span> <span id="close" type="button" class="btn text-dark" style="font-size: xx-large; display: none;">&times</span>
         </button>   
        </div>

     </header>
   
   <ul class="text-white bg-light d-lg-none phone-ul" id="phone-ul">
    <li class="nav-item">
      <a class="nav-link btn" id="navigation1" href="My portfolio.html">Home</a>
    </li>
    <li class="nav-item">
      <a class="nav-link btn" id="navigation2" href="My portfolio.html#About-section">About</a>
    </li>
    <li class="nav-item">
      <a class="nav-link btn" id="navigation3" href="My portfolio.html#Skills-section">Skills</a>
    </li>
    <li class="nav-item">
      <a class="nav-link btn" id="navigation4" href="My portfolio.html#Services-section">Services</a>
    </li>
    <li class="nav-item">
     <a class="nav-link btn" id="navigation5" href="My portfolio.html#Projects-section">Projects</a>
   </li>
  </ul>
</div>  
        <div class="card container-fluid">
      <?php
        require 'PHPMailer/PHPMailer.php';
        require 'PHPMailer/SMTP.php';
        require 'PHPMailer/Exception.php';

         use PHPMailer\PHPMailer\PHPMailer;
         use PHPMailer\PHPMailer\SMTP;
         use PHPMailer\PHPMailer\Exception;

        $mail = new PHPMailer(true);
        
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'ndivajordan@gmail.com';
        $mail->Password = 'uqwzdxtzbczmrejp';
        $mail->SMTPSecure = 'tls';
        $mail->Port = 587;

        
        // Database connection details
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "contact_jordan";

        // Create a new database connection
        $conn = new mysqli($servername, $username, $password, $dbname);

        // Check the connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
         
        // Variable to track the status of form submission
        $formSubmitted = false;
        // Check if the form is submitted
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // Get the form data
            $first_name = $_POST["firstname"];
            $last_name = $_POST["lastname"];
            $email = $_POST["email"];
            $message = $_POST["message"];

            // Insert the form data into the database
            $sql = "INSERT INTO contact_messages (firstname, lastname, email, message) VALUES ('$first_name', '$last_name', '$email', '$message')";

            if ($conn->query($sql) === TRUE) {
                // Send the email
                $to = "ndivajordan@gmail.com";
                $mail->isHTML(true);
                $mail->Subject = "New contact form submission";
                $mail->Body = '<p>First Name: ' . $first_name . '<br/><br/>Last Name: ' . $last_name . '<br/><br/>Email: ' . $email . '<br/><br/>Message: ' . $message . '</p>';
                $mail->Headers = "From: $email";
                // Set the 'From' header and sender name
                $mail->setFrom($to, 'Elame Jordan');
                // Set a custom 'Reply-To' address
                $mail->addReplyTo($email, $first_name);
                $mail->addAddress($to);

          
                if ($mail->send()) {
                  // Set the formSubmitted variable to true
                  $formSubmitted = true;
                  echo "<div class='alert alert-success w-50 text-center mt-5 mb-5 m-auto'>Message sent successfully!</div>";
              } else {
                  echo "<div class='alert alert-danger w-50 text-center mt-5 mb-5 m-auto'>Failed to send message. Error: " . $mail->ErrorInfo . "</div>";
              }
            } else {
                echo "Error: " . $sql . "<br>" . $conn->error;
            }
           
        }

        // Close the database connection
        $conn->close();
        ?>

     <?php if ($formSubmitted): ?>

        <h3 class='text-center'>Thank you for contacting me!</h3>
        <p class='text-center'>I will get back to you shortly.</p>
       
        <?php else: ?> 

          <h1 class="text-center mt-5">Contact Elame</h1>
            <div class="card-body">

                <form action="contact-Jordan.php" method="POST">
                    <div class="row d-flex justify-content-center">
                        
                    <div class="form-group col-sm-4">
                        <label for="First_name">First Name:</label>
                        <input type="text" class="form-control" placeholder="First name" name="firstname" required>
                    </div>

                    <div class="form-group col-sm-4">
                        <label for="last_name">Last Name:</label>
                        <input type="text" class="form-control" placeholder="last name" name="lastname" required>
                    </div>
                    </div>
                    
                    <div class="row d-flex justify-content-center">
                        
                    <div class="form-group">
                        <label for="email">Email:</label>
                        <input type="email" class="form-control" placeholder="Enter your Email" name="email" required>
                    </div>

                    <div class="form-group">
                        <label for="subject">Subject:</label>
                        <input type="text" class="form-control" placeholder="Enter the subject" name="subject" required>
                    </div>

                    <div class="form-group">
                        <label for="message">Message:</label>
                        <textarea type="text" id="message" class="form-control" placeholder="Type message" name="message" style="height: 30vh;" required></textarea>
                    </div>
                    </div>

                    <div class="form-group">
                        <input type="submit" class="btn btn-outline-success" value="submit" name="submit">
                    </div>
                </form>               
            </div>
            <?php endif; ?>
        </div>


        <footer class="container-fluid">
   <div class="row footer-row d-flex" style="justify-content: space-evenly; padding-top: 30px;">
       <div class="col-md-3 ">
         <h3>Accounts</h3>
         <ul>
            <li><a href="#" style="color: black;">Github <i class="fa-brands fa-github" aria-hidden="true"></i></a></li>
            <li><a href="#" style="color: black;">Linkedin <i class="fa-brands fa-linkedin" aria-hidden="true"></i></a></li>
            <li><a href="#" style="color: black;">Stackoverflow <i class="fa-brands fa-stack-overflow" aria-hidden="true"></i></a></li>
         </ul>
       </div>

       <div class="col-md-3">
         <h3>Contact</h3>
         <ul>
            <li>Email <i class="fa fa-envelope" aria-hidden="true"></i>: ndivajordan@gmail.com</li>
            <li>Phone <i class="fa fa-phone" aria-hidden="true"></i>: +237 673-987-283</li>
            <li>Location <i class="fa fa-location-arrow" aria-hidden="true"></i>: Cameroon Buea</li>
         </ul>
       </div>

       <div class="col-md-3">
         <h3>Social Media</h3>
         <ul>
            <li><a href="#" style="color: black;">Facebook <i class="fa-brands fa-facebook" aria-hidden="true"></i></a></li>
            <li><a href="#" style="color: black;">Whatsapp <i class="fa-brands fa-whatsapp" aria-hidden="true"></i></a></li>
            <li><a href="#" style="color: black;">Twitter <i class="fa-brands fa-twitter" aria-hidden="true"></i></a></li>
         </ul>
       </div>
       <div class=" row bg-dark">
        <p class="text-center text-white" style="margin: 5px 0;">Developed By Elame Jordan</p>
      </div>
   </div>
   
</footer>

 <script src="bootstrap-5.0.2-dist/js/bootstrap.min.js"></script>    
 <script src="all.min.js"></script> 

 <script>
  window.onscroll = function() {myFunction()};
  
  var header = document.getElementById("header");
  var header2 = document.getElementById("header2");
  var sticky = header.offsetTop;
  const ids_pc = ['nav1', 'nav2', 'nav3', 'nav4', 'nav5'];
  const open1 = document.getElementById('open');
  const close1 = document.getElementById('close');
  const phoneUl1 = document.getElementById('phone-ul');
  for (let i = 0; i < ids_pc.length; i++) {
        const currentId_pc = ids_pc[i];

        const navigation_pc = document.getElementById(currentId_pc);

        navigation_pc.addEventListener('mouseover', function(){
       
        navigation_pc.style.color = "rgb(205, 205, 226)"

      });

       navigation_pc.addEventListener('mouseout', function(){
       
       navigation_pc.style.color = "black"

     });

     
    
  }

  function myFunction() {
    if (window.pageYOffset > sticky) {
      header.classList.add("sticky","bg-secondary", "text-white");
      header2.classList.add("sticky", "bg-secondary", "text-white");
        close1.style.display = "none"
        open1.style.display = "block"
        phoneUl1.style.display = "none"
      for (let i = 0; i < ids_pc.length; i++) {
      const currentId_pc = ids_pc[i];

      const navigation_pc = document.getElementById(currentId_pc);
      navigation_pc.style.color = "white";

       navigation_pc.addEventListener('mouseout', function(){
       
       navigation_pc.style.color = "white"

     });
    }
      
      
    } else {
      header.classList.remove("sticky","bg-secondary", "text-white");
      header2.classList.remove("sticky", "bg-secondary", "text-white");
      for (let i = 0; i < ids_pc.length; i++) {
      const currentId_pc = ids_pc[i];

       const navigation_pc = document.getElementById(currentId_pc);

       navigation_pc.style.color = "black"
      
       navigation_pc.addEventListener('mouseout', function(){
       
       navigation_pc.style.color = "black"

     });
    }
    }

   
  }
  </script>
  
  <script>
    const ids = ['navigation1', 'navigation2', 'navigation3', 'navigation4', 'navigation5'];
    const open = document.getElementById('open');
    const close = document.getElementById('close');
    const phoneUl = document.getElementById('phone-ul');

    open.addEventListener('click', function() {

      if(this.click){
       open.style.display = "none"
       close.style.display = "block"
       phoneUl.style.display = "block"
      }
     
    });

    close.addEventListener('click', function() {
      if(this.click){
        close.style.display = "none"
        open.style.display = "block"
        phoneUl.style.display = "none"
      }
});

for (let i = 0; i < ids.length; i++) {
const currentId = ids[i];

const navigation = document.getElementById(currentId);

navigation.addEventListener('click', function(){

  if(this.click){
        close.style.display = "none"
        open.style.display = "block"
        phoneUl.style.display = "none"
      }


});

}
  </script>
 
</body>
</html>