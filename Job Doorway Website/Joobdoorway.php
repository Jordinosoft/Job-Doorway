<?php
   session_start();
  if(!isset($_SESSION["policy"])){
   header("location: privacy policy login.php");
  }
?> 
<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Job Doorway</title>
    <!--<link rel="stylesheet" href="joobdoorway.css">-->
    <link rel="stylesheet" href="all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="bootstrap-5.0.2-dist/bootstrap-5.0.2-dist/css/bootstrap.css">
    

    <style>
        *{
            padding: 0;
            margin: 0;
        }
        .bg-img{
            top: 0;
            left: 0;
            background:linear-gradient(to right,rgba(143, 138, 138, 0.486), rgba(167, 158, 158, 0.24)),url(images/tips-and-strategies.jpg);
            background-position: top;
            color: white;
            background-repeat: no-repeat;
            background-size: cover;
            height: 600px;
            font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    
        }

       
        #country{
            margin-left: 0;
        }

       
        #box{
            border: 1px solid black;
        }


        #search:hover{
          color: rgb(65, 179, 218);     
        }

    </style>
</head>
<body style="padding:0; margin:0;">  
<!-- Adding a comment to check if a commit I will do on CMD will work --> 
    <section class="bg-img">

    <header  class="navbar navbar-expand-sm bg-transparent navbar-dark">

            
<div class="container-fluid">


    <div class="col-md-2" id="loga">
      <img src="logo.png" alt="Logo" style="width: 200px;">
    </div>   

  <div class="container-fluid col-md-5 text-ceneter" id="menu" style="width:fit-content;"> 
       <ul class="nav">
         <li class="nav-item"><a class="nav-link" href="Joobdoorway.html" style="color: white;">home</a></li>
         <li class="nav-item"><a class="nav-link" href="#" style="color:white;">job list</a></li>
         <li class="nav-item"><a class="nav-link" href="#" style="color:white; white;">verified employees</a></li>
         <li class="nav-item"><a class="nav-link" href="#" style="color:white;">contact us</a></li>
         <li class="nav-item"><a class="nav-link" href="#" style="color: white;">faqs</a></li>
             
        </ul>         
   </div> 

        <div class="col-md-2">

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

        <div class="col-md-2"  style="right: px; display: flex;">

        <a href="http://localhost/login_register/privacy policy logout.php"><button class="btn btn-warning" style="cursor: pointer;  border-color: white; margin-right: 4px;">log out</button></a>

    </div>
  </div>

</header>
    
        <section class="conatiner-fluid p-5">
            <h1 class="text-white text-center text-center" style="font-weight: 500; font-size:80px color">MEETING YOUR LIFE CHANGING <br clas="text-center">OPORTUNITY<br> </h1>
            <p class="p-4 text-white text-center text-center" style="font-weight: 400; font-size:30px ;">FInding your next job or career on job doorway</p>
        </section>


               <div style="display: flex; justify-content: center;">

                  

                 <div style="border: 2px solid white; border-top-left-radius: 20px; border-bottom-left-radius: 20px; border-right: none; width: 20vw; padding: 5px;">
                  <form class="dropdown" method="get">
                  <select class="form-select" aria-label="Default select example" style="color: white; background-color: transparent;border: none; box-shadow: none;">
                    <option selected style="color: black;">-Select Category-</option>
                    
                    <option value="1" style="color: black;">Category 1</option>
                    <option value="2" style="color: black;">Category 2</option>
                    <option value="3" style="color: black;">Category 3</option>
                  </select>
                  <input type="hidden" name="paged" value="1"><!--Not very important in this dropdown its for future use-->
                </form>
                </div>
                

                  <div style="display: flex; border: 2px solid white; border-top-right-radius: 20px; border-bottom-right-radius: 20px; width: 20vw; padding: 5px;">   
                    <form class="dropdown">  
                   <select class="form-select" aria-label="Default select example" style="color: white; background-color: transparent; border: none; width: 100%; box-shadow: none;">         
                        <option selected style="color: black; caret-color: white;">-Select Country-</option>
                        <option value="1" style="color: black;">America</option>
                        <option value="2" style="color: black;">Cameroon</option>
                        <option value="3" style="color: black;">London</option> 
                         
                        <div class="container-fluid">
                    </select>
                    <input type="hidden" name="paged" value="1"><!--Not very important in this dropdown its for future use-->
                  </form>
                 <a id="search" href="#" style="color: white; text-decoration: none;"><i class="fas fa-search " style="margin: 8px 0;"></i></a>   
                  </div>
                </div>
                
                </div>
    </section> 

    <div class="container-fluid" style="background-color: whitesmoke; height: 40vh;">
        <h2 class="text-center" style="padding-top: 20px;">Follow this simple Three Steps</h2>
        <div class="row" style="padding: 40px 0;">

        <div class="col-md-4" style="display: flex;">
            <i class="fa-sharp fa-light fa-pencil fa-2x"></i>
            &nbsp;&nbsp;<div style="color: lightblue; border-bottom: 1px solid lightblue; font-size: 20px; padding-bottom: 20px;">Step one/ Register</div> 
        </div>

        <div class="col-md-4" style="display: flex;">
            <i class="fa-sharp fa-light fa-pencil fa-2x"></i>
            &nbsp;&nbsp;<div style="color: lightblue; border-bottom: 1px solid lightblue; font-size: 20px; padding-bottom: 20px;">Step two/ Login and Complete your profile</div> 
        </div>

        <div class="col-md-4" style="display: flex;" >
            <i class="fa-sharp fa-light fa-pencil fa-2x"></i>
            &nbsp;&nbsp;<div style="color: lightblue; border-bottom: 1px solid lightblue; font-size: 20px; padding-bottom: 20px;">Step three/ Search for a job and Apply</div> 
        </div>

    </div>
   </div>

   <div style="background-color: white;">

    <h2 class="text-center" style="padding: 15px 0;">random companies</h2>
 
    <div class="container" style="background-color: white; ">

        <div class="row">

            <div class="col-md-3" style="height: 40vh; margin: 0 30px; padding:50px 0;  background-color:  rgb(225, 233, 233); text-align: center;">
            <div style="background-image: url('images/Buy.jpg'); background-repeat: no-repeat; background-size: cover; background-position: up; height: 20vh; width: 13vw; margin: auto;">
            </div>
            <p class="text-center">Ajua Market</p>
            <button style="cursor: pointer; justify-content: center; width: 160px; border-color:white; background-color:transparent; color: gray;">View company</button>
            </div>

            <div class="col-md-3"  style="height: 40vh; margin: 0 30px; padding:50px 0; background-color:  rgb(225, 233, 233); text-align: center;">
            <div style="background-image: url('images/logo.png');  background-repeat: no-repeat; background-size: cover;background-position: up; height: 20vh;  width: 13vw; margin: auto;">
            </div>
            <p class="text-center">Excellence Preparatory Classes</p>
            <button style="cursor: pointer; justify-content: center; width: 160px; border-color:white; background-color: transparent; color: gray;">View company</button>
            </div>

            <div class="col-md-3"  style="height: 40vh; margin: 0 30px; padding:50px 0;  background-color:  rgb(225, 233, 233); text-align: center;">
            <div style="background-image: url('images/Techritoma.jpg'); background-repeat: no-repeat; background-size: cover; background-position: up; height: 20vh;  width: 13vw; margin: auto;">
            </div>
            <p class="text-center">TECHRITOMA Inc</p>
            <button style="cursor: pointer; justify-content: center; width: 160px; border-color:white; background-color: transparent; color: gray;">View company</button>
            </div>
        </div>
    
   </div>
</div>
         <div style="background-color: whitesmoke; margin-top: 70px;">
         <h2 class="text-center" style="padding: 30px 0;">latest jobs</h2>
         <a href="#" style="text-decoration: none; color: black;">
    <div class="container" id="container-secondary" style="border: 1px solid black; height: 15vh; padding: 30px ; padding-left: 50px;">
      <div class="row" style="justify-content: space-between;">
      
        <div style="display: flex;" class="col-md-4">
            <div style="margin-right: 10px;"><img src="images/Techritoma.jpg" alt="" width="60px"></div>
           <p>Cyber Security Internship <span style="color: rgb(146, 144, 144);"><br>TECHRITOMA Inc</span></p>
        </div>

        <div style="display: flex;" class="col-md-4">
          <i class="fa-sharp fa-light fa-location-dot" style="color: rgb(103, 176, 201); transform: translateY(20%); margin-right: 4px;"></i>
            <p style="color: rgb(146, 144, 144);">Cameroon-Buea</p>
        </div>

        <div class="col-md-2">
           <button style="background-color: forestgreen; color: white; width: 10vw; justify-content: center; border: none; cursor: pointer; border-radius: 3px;">FREELANCE</button>
           <P style="font-size: 14px; color: rgb(146, 144, 144);">Due-July 25, 2023</P>
        </div>

      </div>
    </div>
  </a>
    
  <a href="#" style="text-decoration: none; color: black;">

    <div class="container-primary">

      <div class="container" id="container-secondary" style="border: 1px solid black; height: 15vh; padding: 30px ; padding-left: 50px; background-color: rgba(141, 172, 238, 0.171);">
        <div class="row" style="justify-content: space-between;">
        
          <div style="display: flex;" class="col-md-4">
              <div style="margin-right: 10px;"><img src="images/Techritoma.jpg" alt="" width="60px"></div>
             <p>Softe Engineer <span style="color: rgb(146, 144, 144);"><br>TECHRITOMA Inc</span></p>
          </div>
  
          <div style="display: flex;" class="col-md-4">
            <i class="fa-sharp fa-light fa-location-dot" style="color: rgb(103, 176, 201); transform: translateY(20%); margin-right: 4px;"></i>
              <p style="color: rgb(146, 144, 144);">Cameroon-Buea</p>
          </div>
  
          <div class="col-md-2">
             <button style="background-color:  rgba(241, 45, 45, 0.774); color: white; width: 10vw; justify-content: center; border: none; cursor: pointer; border-radius: 3px;">PART-TIME</button>
             <P style="font-size: 14px; color: rgb(146, 144, 144);">Due-December 20, 2023</P>
          </div>
  
        </div>
      </div>
    </a>
    
    <a href="#" style="text-decoration: none; color: black;">
      <div class="container-primary">
      <div class="container" id="container-secondary" style="border: 1px solid black; height: 15vh; padding: 30px ; padding-left: 50px;">
        <div class="row" style="justify-content: space-between;">
        
          <div style="display: flex;" class="col-md-4">
              <div style="margin-right: 10px;"><img src="images/Techritoma.jpg" alt="" width="60px"></div>
             <p>Software Engineering Internship<span style="color: rgb(146, 144, 144);"><br>TECHRITOMA Inc</span></p>
          </div>
  
          <div style="display: flex;" class="col-md-4">
            <i class="fa-sharp fa-light fa-location-dot" style="color: rgb(103, 176, 201); transform: translateY(20%); margin-right: 4px;"></i>
              <p style="color: rgb(146, 144, 144);">Cameroon-Buea</p>
          </div>
  
          <div class="col-md-2">
             <button style="background-color: forestgreen; color: white; width: 10vw; justify-content: center; border: none; cursor: pointer; border-radius: 3px;">FREELANCE</button>
             <P style="font-size: 14px; color: rgb(146, 144, 144);">Due-June 01, 2023</P>
          </div>
  
        </div>
      </div>
    </a>
    
    <a href="#" style="text-decoration: none; color: black;">
      <div class="container-primary">
      <div class="container" id="container-secondary" style="border: 1px solid black; height: 15vh; padding: 30px ; padding-left: 50px;">
        <div class="row" style="justify-content: space-between;">
        
          <div style="display: flex;" class="col-md-4">
              <div style="margin-right: 10px;"><img src="images/Buy.jpg" alt="" width="60px"></div>
             <p>Job Doorway Affilate Markerter<span style="color: rgb(146, 144, 144);"><br>Ajua Market</span></p>
          </div>
  
          <div style="display: flex;" class="col-md-4">
            <i class="fa-sharp fa-light fa-location-dot" style="color: rgb(103, 176, 201); transform: translateY(20%); margin-right: 4px;"></i>
              <p style="color: rgb(146, 144, 144);">Cameroon-Remotely</p>
          </div>
  
          <div class="col-md-2">
             <button style="background-color: rgba(241, 45, 45, 0.774); color: white; width: 10vw; justify-content: center; border: none; cursor: pointer; border-radius: 3px;">PART-TIME</button>
             <P style="font-size: 14px; color: rgb(146, 144, 144);">Due-June 30, 2023</P>
          </div>
  
        </div>
      </div>
    </a>
    
    <a href="#" style="text-decoration: none; color: black;">
      <div class="container-primary">
      <div class="container" id="container-secondary" style="border: 1px solid black; height: 15vh; padding: 30px ; padding-left: 50px;">
        <div class="row" style="justify-content: space-between;">
        
          <div style="display: flex;" class="col-md-4">
              <div style="margin-right: 10px;"><img src="images/Buy.jpg" alt="" width="60px"></div>
             <p>Restaurant Workers <span style="color: rgb(146, 144, 144);"><br>Ajua Market</span></p>
          </div>
  
          <div style="display: flex;" class="col-md-4">
            <i class="fa-sharp fa-light fa-location-dot" style="color: rgb(103, 176, 201); transform: translateY(20%); margin-right: 4px;"></i>
              <p style="color: rgb(146, 144, 144);">Cameroon-Molyko-Buea</p>
          </div>
  
          <div class="col-md-2">
             <button style="background-color: rgba(248, 167, 16, 0.842); color: white; width: 10vw; justify-content: center; border: none; cursor: pointer; border-radius: 3px;">FULL-TIME</button>
             <P style="font-size: 14px; color: rgb(146, 144, 144);">Due-March 15, 2024</P>
          </div>
  
        </div>
      </div>
    </a>
    
    <a href="#" style="text-decoration: none; color: black;">
      <div class="container-primary">

      <div class="container" id="container-secondary" style="border: 1px solid black; height: 15vh; padding: 30px ; padding-left: 50px;">
        <div class="row" style="justify-content: space-between;">
        
          <div style="display: flex;" class="col-md-4">
              <div style="margin-right: 10px;"><img src="images/Techritoma.jpg" alt="" width="60px"></div>
             <p>Software Engineer<span style="color: rgb(146, 144, 144);"><br>TECHRITOMA Inc</span></p>
          </div>
  
          <div style="display: flex;" class="col-md-4">
            <i class="fa-sharp fa-light fa-location-dot" style="color: rgb(103, 176, 201); transform: translateY(20%); margin-right: 4px;"></i>
              <p style="color: rgb(146, 144, 144);">Cameroon-Buea</p>
          </div>
  
          <div class="col-md-2">
             <button style="background-color: rgba(248, 167, 16, 0.842); color: white; width: 10vw; justify-content: center; border: none; cursor: pointer; border-radius: 3px;">FULL-TIME</button>
             <P style="font-size: 14px; color: rgb(146, 144, 144);">Due-February 12, 2024</P>
          </div>
  
        </div>
      </div>
    </a>
     
    <a href="#" style="text-decoration: none; color: black;">
      <div class="container-primary">
      <div class="container" id="container-secondary" style="border: 1px solid black; height: 15vh; padding: 30px ; padding-left: 50px;">
        <div class="row" style="justify-content: space-between;">
        
          <div style="display: flex;" class="col-md-4">
              <div style="margin-right: 10px;"><img src="images/Techritoma.jpg" alt="" width="60px"></div>
             <p>Technical Engineer<span style="color: rgb(146, 144, 144);"><br>TECHRITOMA Inc</span></p>
          </div>
  
          <div style="display: flex;" class="col-md-4">
            <i class="fa-sharp fa-light fa-location-dot" style="color: rgb(103, 176, 201); transform: translateY(20%); margin-right: 4px;"></i>
              <p style="color: rgb(146, 144, 144);">Ghana-Takoradi</p>
          </div>
  
          <div class="col-md-2">
             <button style="background-color: rgba(248, 167, 16, 0.842); color: white; width: 10vw; justify-content: center; border: none; cursor: pointer; border-radius: 3px;">FULL-TIME</button>
             <P style="font-size: 14px; color: rgb(146, 144, 144);">Due-September 01, 2024</P>
          </div>
  
        </div>
      </div>
  
    </a>


   </div>
  </div>




  <footer class="container-fluid" style="background-color: rgba(31, 30, 30, 0.753); color:white; padding-top: 30px; margin-top: 30px;">
     
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
        

 <script src="all.min.js"></script>
 <script src="bootstrap-5.0.2-dist/bootstrap-5.0.2-dist/js/bootstrap.js"></script>
 <script>

  const privacyPolicyButton = document.getElementById("privacy-policy-button");
  const privacyPolicyModal = new bootstrap.Modal(document.getElementById("privacy-policy-modal"));
  const privacyPolicyIframe = document.getElementById("privacy-policy-iframe");
  
  privacyPolicyButton.addEventListener("click", () => {

    privacyPolicyIframe.src = "privacy policy.php";
    privacyPolicyModal.show();
  });
  </script>
</body>
</html>
