






<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
    rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" 
    crossorigin="anonymous">
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css"
    />
    <style>
        body::before{
          display: block;
          content: '';
          height: 100px;
        }
      
    </style>
    <title>Admin</title>
</head>
<body>

    <nav class="navbar navbar-expand-lg navbar-light py-3 bg-primary fixed-top">
      <div class="container">
        <a href="#" class="navbar-brand h1">RailwayEzPz</a>

        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navmenu"
        >
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navmenu">
          <ul class="navbar-nav ms-auto">
            
            <li class="nav-item">
              <a href="#" class="nav-link mx-1" data-bs-toggle="modal"
              data-bs-target="#signup">Admin<i class="bi bi-person"></i></a>
            </li>
            
          </ul>
          
        </div>
      </div>
    </nav>
    

    


    <div class="container-lg">
    <table class="table">
        <tr>
        
        <th scope="col">date de depart</th>
        <th scope="col">date d'arrivee</th>
        <th scope="col">Ville de depart</th>
        <th scope="col">Ville d'arrivee</th>
        <th scope="col">Prix</th>
        
        <th scope="col">action</th>
    </tr>
    <?php  
    
    foreach ($voyage as $v) 
    {
        echo "<tr>
            <td>".$v['Heure_d']."</td>
            <td>".$v['Heure_a']."</td>
            <td>".$v['Ville_d']."</td>
            <td>".$v['Ville_a']."</td>
            <td>".$v['Prix']."</td>
            
            <td>
                <a href='http://localhost/Brief5/admin/delete/".$v['Id_v']."' class='btn btn-secondary'>delete</i></a>
                <a href='http://localhost/Brief5/admin/edit/".$v['Id_v']."' class='btn btn-secondary'>edit</a>
            <td></tr>";
    }
    ?>
    
    </table>

    <a href="http://localhost/Brief5/admin/create" class="btn btn-warning mx-auto d-block w-25">ajouter un voyage</a>
    
    </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>