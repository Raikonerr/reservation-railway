<?php
 require_once'header.php';


?> 

<section class="d-flex  justify-content-center">
      <form class='w-50 p-5 text-light d-flex justify-content-center flex-column' action='http://localhost/Brief5/Home/voyage' method='POST'>
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
          $arriveSearch = $_POST['Ville_a'];
        

          foreach ($voyage as $v) 
          {
            if($departSearch == $v['Ville_d'] && $arriveSearch == $v['Ville_a'])
            
            {

              echo "<tr>
                <td> De $v[Ville_d] </td>
                <td> A $v[Ville_a] </td>
                <td> $v[Heure_d] </td>
                <td> $v[Heure_a] </td>
                <td> $v[Prix] </td>
                <td>
                
                
                 <a href='http://localhost/Brief5/booking/index/".$v['Id_v']."' class='btn btn-secondary'>book</a>
                
                </td>
                </tr>";
            }
          }
        }
      }
  ?>
    
  </table>
  </div>

 //