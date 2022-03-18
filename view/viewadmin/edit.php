<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
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
	<title>Edit produit</title>
</head>
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
	<h1 class="text-center mb-5 p-3">Edit trip</h1>
   
	<div class="container">
		<form action="http://localhost/Brief5/admin/update/<?=$voyage['Id_v']?>" method="POST">
			<div class="row">
			<div class="col">
				<label class="form-label">date de depart</label>
				<input type="datetime-local" class="form-control" name="Heure_d" value="<?=$voyage['Heure_d']?>" ><br>
				<label class="form-label">date d'arrivee</label>
				<input type="datetime-local" class="form-control" name="Heure_a" value="<?=$voyage['Heure_a']?>" ><br>
				<label class="form-label">prix</label>
				<input type="number" class="form-control" name="Prix" value="<?=$voyage['Prix']?>" required><br>
			</div>
			<div class="col">
				<label class="form-label">gare de depart</label>
				<input type="text" class="form-control" name="Ville_d" value="<?=$voyage['Ville_d']?>" required><br>
				<label class="form-label">gare d'arrivee</label>
				<input type="text" class="form-control" name="Ville_a" value="<?=$voyage['Ville_a']?>" required><br>
				<label class="form-label">train</label>
				<input type="number" class="form-control" name="Id_t" value="<?=$voyage['Id_t']?>" required><br>
			</div>
			</div>
			<button class="btn btn-primary">sauvegarder</button>
			<a href="http://localhost/Brief5/admin" class="btn btn-warning">annuler</a>
		</form>
	</div>
  	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>