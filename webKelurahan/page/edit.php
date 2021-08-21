<?php

     include 'koneksi.php';

     if(isset($_POST['update'])){
          $id = $_POST['id'];
          $nama = $_POST['nama'];
          $jenis_kelamin = $_POST['jenis_kelamin'];
          $pekerjaan = $_POST['pekerjaan'];
          $status = $_POST['status'];
          $alamat = $_POST['alamat'];

          $queryubah = "UPDATE tbl_datawarga set nama='$nama', jenis_kelamin='$jenis_kelamin', pekerjaan='$pekerjaan', status='$status', alamat = '$alamat' WHERE id='$id'";

          $update = mysqli_query($conn,$queryubah);

          header("Location:index.php?p=datawarga");
     }

     $id = $_GET['id'];

     $queryambil = "SELECT * FROM tbl_datawarga WHERE id='$id'";
     $hasil = mysqli_query($conn,$queryambil);
     $row = mysqli_fetch_array($hasil);

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
        <section id="editdata">
            <div class="container">
                <div class="row text-center">
                    <div class="col mb-3">
                        <h2>Edit Data Warga <br> Desa Kalongsawah</h2>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-md-6">
                        <form action="index.php?p=edit" id="datawarga" method="post">
                             <div class="mb-3">
                                <label  class="form-label">Nama</label>
                                <input type="hidden" name="id" id="id" value="<?= $row['id'];?>">
                                <input type="text" class="form-control" id="nama"  autocomplete="off" placeholder="Masukkan nama" name="nama" value="<?= $row['nama'];?>" />
                            </div>
                            <div class="mb-3">
                                <label  class="form-label">Jenis Kelamin</label>
                                <input type="text" class="form-control" id="jenis_kelamin"  autocomplete="off" placeholder="Masukkan Jenis Kelamin" name="jenis_kelamin" value="<?= $row['jenis_kelamin'];?>"/>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Pekerjaan</label>
                                <input type="text" class="form-control" id="pekerjaan" autocomplete="off" placeholder="Masukkan Pekerjaan" name="pekerjaan" value="<?= $row['pekerjaan'];?>"/>
                            </div>
                            <div class="mb-3">
                                <label  class="form-label">Status</label>
                                <input type="text" class="form-control" id="status" autocomplete="off" placeholder="Masukkan Status" name="status" value="<?= $row['status'];?>"/>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Alamat</label>
                                <input type="text" class="form-control" id="Alamat" autocomplete="off" placeholder="Masukkan Alamat" name="alamat" value="<?= $row['alamat'];?>"/>
                            </div>
                            <input type="submit" name="update" value="Simpan" class="btn btn-primary mb-5">
                        </form>
                    </div>
                </div>
            </div>