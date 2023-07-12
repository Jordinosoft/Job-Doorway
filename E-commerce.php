<?php
  session_start();
  if(!isset($_SESSION["user"])){
   header("location: login.php");
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jordinosoft Enetrprises</title>
    <link rel="stylesheet" href="bootstrap-5.0.2-dist/bootstrap-5.0.2-dist/css/bootstrap.css">
    <link rel="stylesheet" href="E-commerce.css">
    <link rel="stylesheet" href="all.min.css">
</head>
<body>
   <header class="navbar navbar-expand-sm ">



      <div class="col-md-2" style="text-align: center;"><h2>Jordinosoft</h2></div>

      <div id="menu-div" class="col-md-8">



        <ul id="menu-ul">


            <li><a href="#">Home</a></li>
            <li><a href="#">About</a></li>
            <li><a href="#">Contact</a></li>
            <li><a href="#">Projects</a></li>
            
            <li> 

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

      <div class="col-md-2" id="btn" style="width: 12vw; justify-content: space-evenly;">


        <a href="http://localhost/login_register/logout.php"> <button class="btn btn-warning">Log out</button></a> 
      </div>
    
   </header>

   <div class="container-fluid" id="main-container">
   <div class="row">




    <div id="info" class="col-md-6">





        <h1 id="text">BUILD QUALITY AND RESPONSIVE WEBSITES</h1>
        <p id="text2">Here we can help you build quality and responsive websites for any business Idea of your choice</p>
    </div>

    <div id="img" class="col-md-6"></div>
</div>
   </div>

<div style="background:linear-gradient(to right,rgb(219, 203, 173), rgb(206, 206, 182)) ;">

    <h2 class="text-center p-4">OUR TEAM</h2>
   <div id="carousel" class="carousel slide w-50 mx-auto" data-bs-ride="true">


        <div class="carousel_indicaors">
            

            <button type="button" data-bs-target="#carousel" bata-bs-slide-to="0" class="active" aria-current="true" araia-label="slide 1"></button>
            <button type="button" data-bs-target="#carousel" bata-bs-slide-to="1" araia-label="slide 2"></button>
            <button type="button" data-bs-target="#carousel" bata-bs-slide-to="2" araia-label="slide 3"></button>
        </div>

        <div class="carousel-inner">


           <div class="carousel-item active">

            
            <div class="card">
                <img src="images/portrait-young-handsome-smiling-businessman-holding-laptop-hands-typing-browsing-web-pages-isolated-white-background_1150-63247.jpg" alt="">
        
                <div class="card-body">

                    <p class="card-text text-center">

                        Eng. Elame(CEO and Fullstack developer)
                    </p>
                </div>
                </div>

           </div>

           <div class="carousel-item">

              
            <div class="card">
                <img src="images/cheerful-young-man-wearing-cap-make-thumbs-up-gesture_171337-17906.jpg" alt="">
        
                <div class="card-body">

                    <p class="card-text text-center">

                        Eng. Paul(Front-end developer)
                    </p>
                </div>
                </div>

           </div>

           <div class="carousel-item">


            <div class="card">
                <img src="images/istockphoto-1303501167-612x612.jpg" alt="">
        
                <div class="card-body">

                    <p class="card-text text-center">

                        Eng. Gifty(Back-end developer)
                    </p>
                </div>
                </div>

           </div>

        </div>
  

        <button class="carousel-control-next" type="button" data-bs-target="#carousel" data-bs-slide="next">
            <span class="carousel-control-next-icon bg-dark" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>

        <button class="carousel-control-prev" type="button" data-bs-target="#carousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon bg-dark" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>

   </div>
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
 <script src="all.min.js"></script>   
 <script src="bootstrap-5.0.2-dist/bootstrap-5.0.2-dist/js/bootstrap.min.js"></script>
 <script src="bootstrap-5.0.2-dist/bootstrap-5.0.2-dist/js/bootstrap.js"></script>

</body>
</html>