<?php
     session_start();

     include 'page/koneksi.php';

     if( isset($_POST["login"]) ){
          $username = $_POST["username"];
          $password = $_POST["password"];

          $result = mysqli_query($conn, "SELECT * FROM tbl_login WHERE username = '$username'");

          // cek username
          if(mysqli_num_rows($result) === 1 ){

               // cek password
               $row = mysqli_fetch_assoc($result);

               // set session
               $_SESSION["login"] = true;

               header("Location:index.php");
                   exit;
               // if(password_verify($password, $row["password"])){
               // }
          }
          $error = true;
     }

     if(isset($_POST["guest"])) {
          $_SESSION["guest"];
          header("Location:index2.php");
                   exit;
     }

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />

        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
        <link rel="stylesheet" type="text/css" href="css/login.css" />
          <title>Desa Kalongsawah</title>
    </head>
    <body>
        <div class="limiter">
            <div class="container-login100">
                <div class="wrap-login100">
                    <div class="login100-form-title" style="background-image: url(img/desa.jpg)">
                        <span class="login100-form-title-1">Desa Kalongsawah</span>
                    </div>



                    <form method="post"class="login100-form validate-form">
                         <?php if(isset($error)) : ?>
                         <p style="color: red; font-style: italic;" class="mb-3">Username / Password Salah</p>
                         <?php endif; ?>

                    <div class="row">

                         <div class="wrap-input100 validate-input m-b-26 mb-4" data-validate="Username is required">
                              <span class="label-input100">Username</span>
                              <input class="input100" type="text" name="username" id="username" placeholder="Masukkan username" autocomplete="off" />
                            <span class="focus-input100"></span>
                         </div>

                         <div class="wrap-input100 validate-input m-b-18 mb-4" data-validate="Password is required">
                              <span class="label-input100">Password</span>
                              <input class="input100" type="password" id="password"name="password" placeholder="Masukkan Password" />
                              <span class="focus-input100"></span>
                         </div>

                         <div class="form-check mb-3">
                              <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                              <label class="form-check-label" for="flexCheckDefault">
                                   Remember me
                              </label>
                         </div>
                    </div>


                    <div class="d-grid gap-2 col-9 ">
                         <button  type="submit" name="login" class="btn btn-primary mb-2">Login</button>
                         <p style="text-align: center;">atau</p>
                         <button  type="submit" name="guest" class="btn btn-secondary">Masuk Sebagai Tamu</button>
                    </div>

               </form>
                </div>
            </div>
        </div>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    </body>
</html>
