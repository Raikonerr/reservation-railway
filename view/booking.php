<?php 
require_once 'header.php';
?>

<body class = " vh-100" >
<?php if(!isset($_SESSION['Id_p'])) : ?>
    <div class="container  p-5 mt-5 shadow">
    <form action="http://localhost/Brief5/booking/book/<?=$getTrip['Id_v']?>" class="">
      <div class="p-2">
        
        <div class="row ">  
            <div class="col-md-6 col-12 mb-4">
                <div class="d-flex flex-column">
                    
                    <p class="h-blue fw-bold lead"> FROM</p> <input class="inputbox" placeholder="City" value="<?=$getTrip['Ville_d']?>" name ="Ville_d"  type="text">
                </div>
            </div>
            <div class="col-md-6 col-12 mb-4">
                <div class="d-flex flex-column">
                    <p class="h-blue fw-bold lead">railing  TO</p> <input class="inputbox" placeholder="City" name="Ville_a" value="<?=$getTrip['Ville_a']?>" type="text">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 col-12 mb-4">
                <div class="d-flex flex-column">
                    <p class="h-blue fw-bold lead">DEPARTING</p> <input class="inputbox textmuted" name="Heure_d" value="<?=$getTrip['Heure_a']?>" type="date">
                </div>
            </div>
            <div class="col-md-6 col-12 mb-4">
                <div class="d-flex flex-column">
                    <p class="h-blue fw-bold lead">Price</p> <input class="inputbox textmuted " name="Prix" value="<?=$getTrip['Prix']?>"  type="text">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 col-12 mb-4">
                <div class="d-flex flex-column">
                    <p class="h-blue fw-bold lead">Your email</p> <input class="inputbox textmuted" value="" type="text">
                </div>
            </div>
            <div class="col-md-6 col-12 mb-4">
                <div class="d-flex flex-column">
                    <p class="h-blue fw-bold lead">Your name</p> <input class="inputbox textmuted"  value="" type="text">
                </div>
            </div>
        </div>
        
        <div class="row ">
            <div class="col d-flex justify-content-center align-items-center ">
                <button class="btn btn-primary w-25 shadow">Book now</button>
            </div>
        </div>
        
</div>
        
            
        
        <?php endif ?>
    </form>
</div>

<?php if(isset($_SESSION['Id_p'])) : ?>
    <div class="container rounded shadow-sm">
    <form action="http://localhost/Brief5/booking/book/<?=$getTrip['Id_v']?>" method="POST">
        
      <div class=" border border-5  border-danger rounded p-5">
        <div class="row mt-5">
            
            <div class="col-md-6 col-12 mb-4 ">
                <div class="form-control d-flex flex-column">
                    <p class="h-blue"> FROM</p> 
                    <input class="inputbox" placeholder="ina blasa" name='' value="<?=$getTrip['Ville_d']?>"  type="text">
                </div>
            </div>
            <div class="col-md-6 col-12 mb-4">
                <div class="form-control d-flex flex-column">
                    <p class="h-blue">railing  TO</p> 
                    <input class="inputbox" placeholder="ina blasa" name='' value="<?=$getTrip['Ville_a']?>" type="text">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 col-12 mb-4">
                <div class="form-control d-flex flex-column">
                    <p class="h-blue">DEPARTING</p> 
                    <input class="inputbox textmuted" name='' value="<?=$getTrip['Heure_a']?>" type="date">
                </div>
            </div>
            <div class="col-md-6 col-12 mb-4">
                <div class="form-control d-flex flex-column">
                    <p class="h-blue">Price</p> 
                    <input class="inputbox textmuted " name="prix" value="<?=$getTrip['Prix']?>" type="text">
                </div>
                
            </div>
            <div class="row">
                <div class="col ">
                <button class="btn btn-warning form-control d-flex justify-content-center text-center mb-5">Book now</button>
                </div>
            </div>
        </div>
       
</div>

        
            
        <!-- <div class="btn btn-primary form-control text-center mb-5">Book now</div> -->
        <?php endif ?>
    </form>
</div>


<?php require_once 'footer.php' ?>





</body>
</html>