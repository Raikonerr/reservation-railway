<?php 

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- <link rel="stylesheet" href="./public/bootstrap.min.css"> -->
    <link rel="stylesheet" href="./public/style.css">
    <title>Booking</title>
</head>
<body class = "vw-100 vh-100">
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
              <a href="home" class="nav-link fw-bold" style = "color: white">Home</a>
            </li>
            <li class="nav-item me-4">
              <a href="booking" class="nav-link fw-bold" style = "color: white">Booking</a>
            </li>
            <li class="nav-item me-4">
              <a href="signin" class="nav-link fw-bold" style = "color: white">Sign in</a>
            </li>
            <li class="nav-item me-4">
              <a href="signup" class="nav-link fw-bold" style = "color: white">Sign up</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <div class="container rounded shadow-sm">
    <form action="">
        <div class="row">
            <div class="col-md-2 pe-0 col-sm-12">
                <div class="btn radio-btn mb-3"> <label class="radio"> <input type="radio" value="a" name="book" checked> Roundtrip <span></span> </label> </div>
            </div>
            <div class="col-md-2 pe-0 col-sm-12">
                <div class="btn radio-btn mb-3"> <label class="radio"> <input type="radio" value="a" name="book"> One way <span></span> </label> </div>
            </div>
            <div class="col-md-2 pe-0 col-sm-12">
                <div class="btn radio-btn mb-3"> <label class="radio"> <input type="radio" value="a" name="book"> Multi-City <span></span> </label> </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 col-12 mb-4">
                <div class="form-control d-flex flex-column">
                    <p class="h-blue">ghadi fin FROM</p> <input class="inputbox" placeholder="City or Airport" type="text">
                </div>
            </div>
            <div class="col-md-6 col-12 mb-4">
                <div class="form-control d-flex flex-column">
                    <p class="h-blue">railing  TO</p> <input class="inputbox" placeholder="City or Airport" type="text">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 col-12 mb-4">
                <div class="form-control d-flex flex-column">
                    <p class="h-blue">DEPARTING</p> <input class="inputbox textmuted" type="date">
                </div>
            </div>
            <div class="col-md-6 col-12 mb-4">
                <div class="form-control d-flex flex-column">
                    <p class="h-blue">RETURNING</p> <input class="inputbox textmuted " type="date">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4 mb-4">
                <div class="form-control d-flex flex-column">
                    <p class="h-blue">ADULTS(18+)</p> <select class="border-0 outline-none">
                        <option value="" hidden selected>0</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                    </select>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="form-control d-flex flex-column">
                    <p class="h-blue">CHILDREN(0-17)</p> <select class="border-0 outline-none">
                        <option value="" hidden selected>0</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                    </select>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="form-control d-flex flex-column">
                    <p class="h-blue">TRAVEL CLASS</p> <select class="border-0 outline-none">
                        <option value="" hidden selected>Class</option>
                        <option value="1">Economy</option>
                        <option value="2">Premium</option>
                        <option value="3">Business</option>
                    </select>
                </div>
            </div>
        </div>
        <div class="btn btn-primary form-control text-center">SHOWN FLIGHTS</div>
    </form>
</div>




<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</body>
</html>