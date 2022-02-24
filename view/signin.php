

<?php require_once 'header.php' 


?>

<section class="vh-100 " >
    <div class="container h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-12 col-md-9 col-lg-7 col-xl-6">
          <div class="card" style="border-radius: 15px;">
            <div class="card-body pb-10 m-12">
              <h2 class="text-uppercase text-center mb-5">Login</h2>
              <form class="" action="http://localhost/Brief5/Signin/signin" method="POST">
                <div class="form-outline mb-4">
                  <input type="text" name="username" class="form-control form-control-lg" />
                  <label class="form-label" for="form3Example1cg">Username</label>
                </div>
               
                <div class="form-outline mb-4">
                  <input type="password" name="password"  class="form-control form-control-lg" />
                  <label class="form-label" >Password</label>
                </div>
                <div class="d-flex justify-content-center">
                  <button type="submit" class="btn btn-primary btn-block btn-lg gradient-custom-4 text-body">Login</button>
                </div>
</section>

<?php require_once 'footer.php' ?>
</body>
