<?php 
require_once 'header.php';
?>

<body class = "background-image:url('../public/pic/bgbg.jfif');background-repeat: no-repeat;background-size:cover" >

    <div class="container rounded shadow-sm">
    <form action="">
      <div class=" border border-5 border-danger rounded p-5">
        <div class="row ">
            <div class="col-md-6 col-12 mb-4">
                <div class="form-control d-flex flex-column">
                    <p class="h-blue"> FROM</p> <input class="inputbox" placeholder="ina blasa" type="text">
                </div>
            </div>
            <div class="col-md-6 col-12 mb-4">
                <div class="form-control d-flex flex-column">
                    <p class="h-blue">railing  TO</p> <input class="inputbox" placeholder="ina blasa" type="text">
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
</div>
        
            
        <div class="btn btn-primary form-control text-center mb-5">SHOWN</div>
    </form>
</div>

<?php require_once 'footer.php' ?>





</body>
</html>