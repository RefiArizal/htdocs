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
               <h2>Data Administratif Desa Kalongsawah</h2>
          </div>

     <div class="container" style="width: 90%;">
        <table class="table table-bordered border-dark text-center table-hover " >
             <h5>1. Administrasi Penduduk</h5>
            <thead class="text-center" style="background-color : #30968a">
                <tr >
                    <th scope="col">No</th>
                    <th scope="col">Nama Dusun</th>
                    <th scope="col">Laki - Laki</th>
                    <th scope="col">Perempuan</th>
                    <th scope="col">Total Penduduk</th>
                </tr>
            </thead>
           <tr >
               <?php
                    $no = 1;
                    ?>
                  <td><?= $no++; ?></td>
                  <td>Kp. Kalongsawah</td>
                  <td>108</td>
                  <td>150</td>
                  <td>258</td>
          </tr>
           <tr >

                  <td><?= $no++; ?></td>
                  <td>Kp. Parungsapi</td>
                  <td>142</td>
                  <td>165</td>
                  <td>307</td>
          </tr>
           <tr >

                  <td><?= $no++; ?></td>
                  <td>Kp. Garisul</td>
                  <td>107</td>
                  <td>132</td>
                  <td>239</td>
          </tr>
           <tr >

                  <td><?= $no++; ?></td>
                  <td>Kp. Kalong Dagul</td>
                  <td>108</td>
                  <td>127</td>
                  <td>235</td>
          </tr>
           <tr >

                  <td><?= $no++; ?></td>
                  <td>Kp. Peuteuy</td>
                  <td>200</td>
                  <td>242</td>
                  <td>442</td>
          </tr>
           <tr >

                  <td><?= $no++; ?></td>
                  <td>Kp. Toge Lebak</td>
                  <td>87</td>
                  <td>98</td>
                  <td>195</td>
          </tr>
           <tr >


                  <td colspan="4">Total Keseluruhan Penduduk</td>
                  <td>1.656 Orang</td>
          </tr>

     </table>
     <br><br>

     <table class="table table-bordered border-dark text-center table-hover " >
             <h5>2. Administrasi Kelembagaan</h5>
            <thead class="text-center" style="background-color : #30968a">
                <tr >
                    <th scope="col">No</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Jenis Kelamin</th>
                    <th scope="col">Jabatan</th>
                    <th scope="col">Tanggal Pengangkatan</th>
                    <th scope="col">Tanggal Pemberhentian</th>
                </tr>
            </thead>
           <tr >
               <?php
                    $no = 1;
                    ?>
                  <td><?= $no++; ?></td>
                  <td>Neneg Hasanah, S.Pd.</td>
                  <td>Perempuan</td>
                  <td>Kepala Desa</td>
                  <td>20 November 2019</td>
                  <td>12 Desember 2023</td>
          </tr>
           <tr >
                  <td><?= $no++; ?></td>
                  <td>AAb Munawar, S.Pd.</td>
                  <td>Laki - Laki</td>
                  <td>Sekretaris Desa</td>
                  <td>3 Januari 2020</td>
                  <td>-</td>
          </tr>
           <tr >
                  <td><?= $no++; ?></td>
                  <td>Karina Nur Rizky, S.E.</td>
                  <td>Perempuan</td>
                  <td>Bendahara Desa</td>
                  <td>1 Desember 2019</td>
                  <td>-</td>
          </tr>
           <tr >
                  <td><?= $no++; ?></td>
                  <td>Agus Saputra asanah, S.Ag.</td>
                  <td>Laki - Laki</td>
                  <td>Kepala Urusan</td>
                  <td>20 Januari 2019</td>
                  <td>-</td>
          </tr>
           <tr >
                  <td><?= $no++; ?></td>
                  <td>Amanda Mulya, S.Pd.</td>
                  <td>Perempuan</td>
                  <td>Kepala Seksi</td>
                  <td>20 Juli 2019</td>
                  <td>-</td>
          </tr>


     </table>

       <br><br>

      <table class="table table-bordered border-dark text-center table-hover " >
             <h5>3. Administrasi Pembangunan</h5>
            <thead class="text-center" style="background-color : #30968a">
                <tr >
                    <th scope="col">No</th>
                    <th scope="col">Nama Proyek</th>
                    <th scope="col">Volume</th>
                    <th scope="col">Biaya</th>
                    <th scope="col">Lokasi</th>
                    <th scope="col">Keterangan</th>
                </tr>
            </thead>
           <tr >
               <?php
                    $no = 1;
                    ?>
                  <td><?= $no++; ?></td>
                  <td>Rehabilitasi Saluran <br>Pembuangan</td>
                  <td>700 Meter</td>
                  <td>Rp. 80.000.000</td>
                  <td>Kp. Garisul</td>
                  <td>Dikerjakan Tahun <br> Anggaran 2019</td>
          </tr>
           <tr >
                  <td><?= $no++; ?></td>
                  <td>Pembangunan Drainase <br>Jalan Poros</td>
                  <td>500 Meter</td>
                  <td>Rp. 60.000.000</td>
                  <td>Kp. Kalongsawah</td>
                  <td>Dikerjakan Tahun <br> Anggaran 2019</td>
          </tr>
           <tr >
                  <td><?= $no++; ?></td>
                  <td>Peningkatan jalan <br>Lingkungan</td>
                  <td>850 Meter</td>
                  <td>Rp. 950.000.000</td>
                  <td>Kp. Toge Lebak</td>
                  <td>Dikerjakan Tahun <br> Anggaran 2018</td>
          </tr>
           <tr >
                  <td><?= $no++; ?></td>
                  <td>Pembangunan Jalan <br> Setapak</td>
                  <td>700 Meter</td>
                  <td>Rp. 30.000.000</td>
                  <td>Kp. Garisul</td>
                  <td>Dikerjakan Tahun <br> Anggaran 2017</td>
          </tr>
           <tr >
                  <td><?= $no++; ?></td>
                  <td>Rehabilitasi Saluran <br>Pembuangan</td>
                  <td>400 Meter</td>
                  <td>Rp. 50.000.000</td>
                  <td>Kp. Kalongsawah</td>
                  <td>Dikerjakan Tahun <br> Anggaran 2017</td>
          </tr>

     </table>
     </div>


        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    </body>
</html>
