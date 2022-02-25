<?php 
require_once 'header.php'


  
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    
    <link rel="stylesheet" href="./public/style.css">
    <title>Train</title>
</head>
<body class = "vw-100 vh-100" style="background-image:url('../public/pic/background.png');background-repeat: no-repeat;background-size:cover" >

<?php if (isset($_SESSION['Id_p'])) {
echo $_SESSION["Id_p"];
}
?>

  <div class="bg-image w-100 h-75 opacity-100" style="position:relative; background-image:url('../public/pic/bgbg.jfif');background-repeat: no-repeat;background-size:cover" style="width : 100%">
      <div class="position-absolute" style="color:white; top:40%;left:20%; right: 20%">
        <p class = "fw-Bold display-3 " style="color:primary ;">placeholder</p>
        <a href="http://localhost/Brief5/Booking/" type="button" class="btn btn-primary">Book now</a>
      </div>

  
  </div>
  <section class="d-flex  justify-content-center">
      <form class='w-50 p-5 text-light d-flex justify-content-center flex-column' action='http://localhost/Brief5/home' method='POST'>
          <div class="row mb-5">
            <div class="col">
              <div class="form-outline">
								<label class="form-label text-dark">gare de depart</label>
		            <input type="text" name="Ville_d" class="form-control">
              </div>
            </div>
            <div class="col">
              <div class="form-outline">
						   <label class="form-label text-dark">gare d'arrivee</label>
		           <input type="text" name="Ville_a" class="form-control">
              </div>
            </div>
            <?php
            if(isset($_POST['submit']))
            {
            if(empty($_POST['Heure_d']) && empty($_POST['Heure_a']))
              {
                echo"<p class='pt-3 mb-0 text-danger'>veuillez remplir le formulaire</p>";
              }
            }
            ?>
           </div>
             
              <button type='submit' name='submit' class="btn btn-primary btn-block mb-5">
                Search
                </button>
           </form> 
           
    </section>
    
    
    <div class="container-lg">
    <h1 class="text-center mb-5">Voyages Disponibles</h1>
    <table class="table table-striped table-hover">
        <tr>
        <th scope="col">gare de depart</th>
        <th scope="col">gare d'arrivee</th>
        <th scope="col">date de depart</th>
        <th scope="col">date d'arrivee</th>
        <th scope="col">prix</th>
        
        <th scope="col"></th>
    </tr>
  <?php

    if(isset($_POST['submit']))
    {
      if(!empty($_POST['Ville_d']) && !empty($_POST['Ville_a']))
      {
          $departSearch = $_POST['Ville_d'];
          $arriveeSearch = $_POST['Ville_a'];
        

          foreach ($voyage as $v) 
          {
            if($departSearch == $v['Ville_d'] && $arriveeSearch == $v['Ville_a'])
            {
              echo "<tr>
                <td>".'De '.$v['Ville_d']."</td>
                <td>".'A '.$v['Ville_a']."</td>
                <td>".$v['Heure_d']."</td>
                <td>".$v['Heure_a']."</td>
                <td>".$v['Prix']. ' DH'."</td>
                <td>
                    <a href='http://localhost/Brief5/booking/".$v['Id_v']."' class='btn btn-primary'>réserver</i></a>
                <td>
                </tr>";
            }
          }
        }
      }
  ?>
    
  </table>
  </div>


    







<?php require_once 'footer.php' ?>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</body>
</html>