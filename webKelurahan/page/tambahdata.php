<?php
include 'koneksi.php';

if(isset($_POST['add'])){
     $nama = $_POST['nama'];
     $jenis_kelamin = $_POST['jenis_kelamin'];
     $pekerjaan = $_POST['pekerjaan'];
     $status = $_POST['status'];
     $alamat = $_POST['alamat'];


     $query = "insert into tbl_datawarga values ('$id', '$nama', '$jenis_kelamin', '$pekerjaan', '$status' , '$alamat')";

     header("Location:index.php?p=datawarga");

     $add = mysqli_query($conn, $query);
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
          <link rel="stylesheet" href="css/style.css" />
        <title>Hello, world!</title>
    </head>
    <body>
        <section id="contact">
            <div class="container">
                <div class="row text-center">
                    <div class="col mb-3">
                        <h2>Tambah Data Warga <br> Desa Kalongsawah</h2>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-md-6">
                        <form action="index.php?p=tambahdata" id="warga" method="post">
                             <div class="mb-3">
                                <label for="nama" class="form-label">Nama</label>
                                <input type="nama" class="form-control" id="nama" aria-describedby="nama" autocomplete="off" placeholder="Masukkan nama" name="nama" />
                            </div>
                            <div class="mb-3">
                                <label for="jeniskelamin" class="form-label">Jenis Kelamin</label>
                                <input type="text" class="form-control" id="jenis_kelamin" aria-describedby="jenis_kelamin" autocomplete="off" placeholder="Masukkan Jenis Kelamin" name="jenis_kelamin" />
                            </div>
                            <div class="mb-3">
                                <label for="pekerjaan" class="form-label">Pekerjaan</label>
                                <input type="text" class="form-control" id="pekerjaan" aria-describedby="pekerjaan" autocomplete="off" placeholder="Masukkan Pekerjaan" name="pekerjaan"/>
                            </div>
                            <div class="mb-3">
                                <label for="status" class="form-label">Status</label>
                                <input type="text" class="form-control" id="status" aria-describedby="status" autocomplete="off" placeholder="Masukkan Status" name="status"/>
                            </div>
                            <div class="mb-3">
                                <label for="Alamat" class="form-label">Alamat</label>
                                <input type="text" class="form-control" id="Alamat" aria-describedby="Alamat" autocomplete="off" placeholder="Masukkan Alamat" name="alamat" />
                            </div>
                            <input type="submit" name="add" value="Simpan" class="btn btn-primary mb-5">
                        </form>
                    </div>
                </div>
            </div>


        </section>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

        <!-- Option 2: Separate Popper and Bootstrap JS -->
        <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    --></body>
</html>
