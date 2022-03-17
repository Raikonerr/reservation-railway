<?php


?>
   
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- <link rel="stylesheet" href="./public/bootstrap.min.css"> -->
    <link rel="stylesheet" href="../public/style.css">
    <title>Railwayezpz</title>
</head>
<body style="background-color:#FFFFFF;">
<nav class="navbar navbar-expand-lg navbar-light py-3 bg-primary">
      <div class="container">
        <a href="#" class="navbar-brand">LOGO</a>
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navmenu">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse  " id="navmenu">
          <ul class="navbar-nav ms-auto">
            <li class="nav-item me-4 ">
              <a href="http://localhost/Brief5/Home/index" class="nav-link fw-bold" style = "color: white">Home</a>
            </li>
            <li class="nav-item me-4">
              <!-- <a href="http://localhost/Brief5/Booking/index" class="nav-link fw-bold" style = "color: white">Booking</a> -->
              <a href="http://localhost/Brief5/Booking/booking" class="nav-link fw-bold" style = "color: white">Booking</a>
            </li>
            <?php if(isset($_SESSION['Nom_utilisateur'])):?>
              <li class="nav-item me-4">
                 <a href="http://localhost/Brief5/Myreservation" class="nav-link fw-bold" style = "color: white">My reservation</a>
               </li>
               <li class="nav-item me-4">
                 <a href="http://localhost/Brief5/Signin/logout" class="nav-link fw-bold" style = "color: white">log out</a>
               </li>
            <?php else :?>
            <li class="nav-item me-4">
              <a href="http://localhost/Brief5/Signin/index" class="nav-link fw-bold" style = "color: white">Sign in</a>
            </li>
            <li class="nav-item me-4">
              <a href="http://localhost/Brief5/signup/index" class="nav-link fw-bold" style = "color: white">Sign up</a>
            </li>
            <?php endif ;?>
          </ul>
        </div>
      </div>
    </nav>


 <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</body>
</html>




