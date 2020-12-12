<?php
// Header file
include 'Header.php'

?>

<?php 
if($_SERVER['REQUEST_METHOD']==='POST'){
    require ('register-process.php');
}
?>
          <!--registration area-->
        <section id="register">
         <div class="row m-0" id="row">
             <div class="col-lg-4 offset-lg-2" id="col">
                 <div class="text-center pb-5">
                 <h1 class="login-title text-dark">Register</h1>
                 <p class="p-1 m-0 font-ubuntu text-black-50">Register and Enjoy Additional features</p>
                 <span class="font-ubuntu text-black-50">Already have <a href="login.php">Login</a></span>
                 </div>
                 <div class="upload-profile-image d-flex justify-content-center pb-5">
                     <div class="text-center">
                         <div class="d-flex justify-content-center">
                            <img class="camera-icon" src="assets/camera-solid.svg" alt="camera">
                         </div>
                         <img width="200px" height="200px"
                         class="img rounded-circle" src="assets/profile/beard.png" alt="profile">
                         <small class="form-text text-black-50">Choose image</small>
                         <input class="form-control-file " type="file" name="profileUpload" id="upload-profile">
                     </div>
                 </div>
                 <div class="d-flex justify-content-center">
                     <form id="reg-form" action="register.php" method="post" enctype="multipart/form-data">
                        <div class="row">
                            <div class="col">
                                <input value='<?php if(isset($_POST["firstName"])) echo $_POST["firstName"] ?>' type="text" name="firstName" id="firstname" class="form-control" placeholder="FirstName">
                            </div>
                            <div class="col">
                                <input value='<?php if(isset($_POST["lastName"])) echo $_POST["lastName"] ?>' type="text" name="lastName" id="lasttname" class="form-control" placeholder="LastName">
                            </div>
                        </div>
                        <div class="form-row my-4">
                        <div class="col">
                            <input value='<?php if(isset($_POST["email"])) echo $_POST["email"] ?>' type="email" name="email" id="email" class="form-control" placeholder="Email*" require>
                        </div>
                        </div>
                        <div class="form-row my-4">
                        <div class="col">
                            <input type="password" name="password" id="password" class="form-control" placeholder="password*" required>
                        </div>
                        </div>
                        <div class="form-row my-4">
                        <div class="col">
                            <input type="password" name="confirm_pwd" id="confirm_pwd" class="form-control" placeholder="confirm password*" required>
                            <small id="confirm_error" class="text-danger"></small>
                        </div>
                        </div>
                        <div class="form-check form-check-inline">
                            <input type="checkbox" name="agreement" id="" class="form-check-input" required>
                            <label for="Agreement" class="form-check-label font-ubuntu text-black-50">I Agree <a href="">Terms Conditions & policy</a>(*)</label>
                        </div>
                        <div class="submit-btn text-center my-5">
                            <button type="submit" class="btn btn-warning rounded-pill text-dark px-5 ">
                                continue
                            </button>
                        </div>
                     </form>
                 </div>
             </div>
         </div>
         </section>
         <!--registration area-->
  <?php
//   Footer file
  include 'Footer.php'
  ?>