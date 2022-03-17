<body class ="vh100">

<?php  require_once 'header.php' ?>

<section class="vh-100 "  >
    <div class="container h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-12 col-md-9 col-lg-7 col-xl-6">
          <div class="shadow" style="border-radius: 15px;">
            <div class="card-body pb-10 m-12">
              <h2 class="text-uppercase text-center fw-bold mb-5">Create an account</h2>
              <form action="http://localhost/Brief5/signup/signupfunc" method="POST">
                <div class="form-outline mb-4">
                  <input type="text" name="username" class="form-control form-control-lg" />
                  <label class="form-label"  for="form3Example1cg">Your Name</label>
                </div>
                <div class="form-outline mb-4">
                  <input type="email" name="email" class="form-control form-control-lg" />
                  <label class="form-label"  for="form3Example3cg">Your Email</label>
                </div>
                <div class="form-outline mb-4">
                  <input type="password" name="password" class="form-control form-control-lg" />
                  <label class="form-label"  >Password</label>
                </div>
                
                <div class="d-flex justify-content-center">
                  <button type="submit" class="btn btn-primary btn-block rounded btn-lg gradient-custom-4 text-white">Register</button>
                </div>

                <p class="text-center text-muted mt-5 mb-1">Have already an account? <a href="signin.php" class="fw-bold text-body"><u>Login here</u></a></p>

              </form>

            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<?php require_once 'footer.php' ?>
</body>