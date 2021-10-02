<?php
  if(isset($_POST['register'])){
    $username = $_POST['username'];
    $password = $_POST['password'];
    $country = $_POST['country'];
    $email = $_POST['email'];

    if($username!=''&&$password!=''&&$country!=''&&$email!=''){
    $sql = "INSERT INTO user(username, password, email, country ) VALUES('$username', '$password', '$email', '$country') ";
    include_once('cn.php');
    $qry = mysqli_query($conn, $sql);
    if($qry){
      echo  "$username registered";
    }else{
      echo "fail";
    }
  }
  }
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Register</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="vendors/mdi/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="vendors/base/vendor.bundle.base.css">
  <!-- endinject -->
  <!-- plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="css/style.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="images/brawijaya.png" />
</head>

<body>
  <div class="container-scroller">
    <div class="container-fluid page-body-wrapper full-page-wrapper">
      <div class="content-wrapper d-flex align-items-center auth px-0">
        <div class="row w-100 mx-0">
          <div class="col-lg-4 mx-auto">
            <div class="auth-form-light text-left py-5 px-4 px-sm-5">
             
              <h4>REGISTER</h4>
              <h6 class="font-weight-light">Silahkan mengisi form dibawah ini</h6>
              <form class="pt-3" method="POST" name="register">
                <div class="form-group">
                  <input type="text" name="username" class="form-control form-control-lg" id="username" placeholder="Username">
                </div>
                <div class="form-group">
                  <input type="email" name="email" class="form-control form-control-lg" id="email" placeholder="Email">
                </div>
                <div class="form-group">
                  <select name="country" class="form-control form-control-lg" id="country">
                    <option value="">Program Studi</option>
                    <option value="TIF">Teknik Informatika</option>
                    <option value="SI">Sistem Informasi</option>
                    <option value="TI">Teknologi Informasi</option>
                    <option value="TK">Teknik Komputer</option>
                    <option value="PTI">Pendidikan Teknologi Informasi</option>
                  </select>
                </div>
                <div class="form-group">
                  <input type="password" name="password" class="form-control form-control-lg" id="password" placeholder="Password">
                </div>
                <div class="mb-4">
                  <div class="form-check">
                    <label class="form-check-label text-muted">
                      <input type="checkbox" name="iagree" value="1" class="form-check-input">
                      I agree to all Terms & Conditions
                    </label>
                  </div>
                </div>
                <div class="mt-3">
                  <input type="submit" name="register" class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn" value="SIGN UP"/>
                
                </div>
                <div class="text-center mt-4 font-weight-light">
                  Already have an account? <a href="login.php" class="text-primary">Login</a>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
      <!-- content-wrapper ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->
  <!-- plugins:js -->
  <script src="vendors/base/vendor.bundle.base.js"></script>
  <!-- endinject -->
  <!-- inject:js -->
  <script src="js/off-canvas.js"></script>
  <script src="js/hoverable-collapse.js"></script>
  <script src="js/template.js"></script>
  <!-- endinject -->
</body>

</html>
