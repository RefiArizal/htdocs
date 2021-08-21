     <!DOCTYPE html>
<html lang="en">
     <head>
          <!-- Required meta tags -->
          <meta charset="utf-8" />
          <meta name="viewport" content="width=device-width, initial-scale=1" />

          <!-- Bootstrap CSS -->
          <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
          <link rel="stylesheet" href="css/style.css" />
          <title></title>
     </head>
     <body>

          <div class="content text-center mb-5">
               <h2>Data Penduduk Desa Kalongsawah <br> Tahun 2021</h2>
          </div>
          <div class="container">



        <table class="table table-bordered border-dark text-center table-hover" >
                <a href="index.php?p=tambahdata">
                     <button type="button" class="btn btn-primary btn-sm mb-3">Tambah Data </button>
               </a>
            <thead class="text-center" style="background-color : #30968a">
                <tr >
                    <th scope="col">No</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Jenis Kelamin</th>
                    <th scope="col">Pekerjaan</th>
                    <th scope="col">Status</th>
                    <th scope="col">Alamat</th>
                    <th scope="col">Aksi</th>
                </tr>
            </thead>
           <tr >
               <?php
                   include "koneksi.php";
                    $no = 1;
                    $data = mysqli_query($conn, "select * from tbl_datawarga");
                    while ($row = mysqli_fetch_array($data)) {

                    ?>

                    <td><?= $no++; ?></td>
                    <!-- <td><?= $row['id']; ?></td> -->
                    <td><?= $row['nama']; ?></td>
                    <td><?= $row['jenis_kelamin']; ?></td>
                    <td><?= $row['pekerjaan']; ?></td>
                    <td><?= $row['status']; ?></td>
                    <td><?= $row['alamat']; ?></td>


                     <td>

                    <!-- tombol edit -->
                    <a href="index.php?p=edit&id=<?= $row['id'];?>"><button class="btn btn-outline-success">Edit</button></a>
                    <!-- tombol hapus -->
                    <a href="index.php?p=hapus&id=<?= $row['id'];?>"><button class="btn btn-outline-danger">Hapus</button></a>

                    </td>

          </tr>
          <?php } ?>
     </table>
</div>


        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    </body>
</html>
