
<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />

        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
        <link rel="stylesheet" href="css/style.css" />

        <title>Desa Kalongsawah</title>
          <link rel="shortcut icon" href="img/logo.png">
    </head>
    <body class="font-helvatica" id="bodyy">
        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg navbar-dark shadow sticky-top" style="background-color: #30968a;">
            <div class="container fs-5">
                <div class="img me-3">
                    <img src="img/logo.png" width="60px" alt="" />
                </div>
                <a class="navbar-brand fs-5" href="#"
                    >SISTEM INFORMASI DESA KALONGSAWAH <br />
                    Kec. Jasinga Kab. Bogor
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse fs-6" id="navbarNav">
                    <ul class="navbar-nav ms-auto" >
                        <li class="nav-item mx-1">
                            <a class="nav-link active" aria-current="page" href="index.php?p=home">Home</a>
                        </li>

                        <li class="nav-item mx-1">
                            <a class="nav-link active" href="index.php?p=datawarga">Data Warga</a>
                        </li>

                        <li class="nav-item mx-1">
                            <a class="nav-link active" href="index.php?p=datapotensi">Data Potensi Wilayah</a>
                        </li>

                        <li class="nav-item mx-1">
                            <a class="nav-link active" href="index.php?p=administratif">Data Administratif</a>
                        </li>
                    </ul>
                    <a href="login.php" ><button type="submit" class="btn btn-light btn-sm" style="color : #30968a; font-weight: bold;">Log out</button></a>

               </div>
          </div>
     </nav>


          <div class="row justify-content-center mt-3">

               <div class="badan rounded-3">
                    <?php
                          $pages_dir = 'page';
                                   if(!empty($_GET['p'])){
                                        $pages = scandir($pages_dir,0);
                                        unset($pages[0], $pages[1]);

                                        $p = $_GET['p'];
                                        if (in_array($p . '.php' , $pages)){
                                             include($pages_dir . '/' . $p . '.php');
                                        } else {
                                             echo "Halaman tidak ditemukan";
                                        }
                                   } else {
                                        include ($pages_dir . '/home.php');
                                   }
                         ?>
                    </div>
          </div>

</div>
</div>

<br><br>
<nav class="navbar navbar-light bg-light">
  <div class="container justify-content-center">


            <a class="navbar-brand " href="#" ">
                 <img src="img/logo.png" width="80px" alt="" style="margin-left:37%;">
                 <p style="font-family: poppins-regular; text-align : center;">
                 Pemerintah Desa Kalongsawah <br> Kec. Jasinga Kab. Bogor, Jawa Barat, Indonesia</p>
               </a>

          </div>
</nav>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

       </body>
</html>
