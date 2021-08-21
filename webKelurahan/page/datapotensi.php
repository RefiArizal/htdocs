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
               <h2>Data Potensi Wilayah <br> Desa Kalongsawah</h2>
          </div>

          <div class="container" style="width: 45%;">
               <h4 style="margin-left : -5rem">1. Potensi Sumber Daya Alam</h4> <br>
        <table class="table table-bordered border-dark  table-hover  " >
             <h5>a. Luas Wilayah Menurut Penggunaan</h5>
            <thead class="text-center" style="background-color : #30968a">
                <tr >
                    <th scope="col">No</th>
                    <th scope="col">Nama Lahan</th>
                    <th scope="col">Luas</th>
                </tr>
            </thead>
           <tr >
               <?php
                    $no = 1;
                    ?>
                  <td class="text-center"><?= $no++; ?></td>
                  <td>Luas Pemukiman</td>
                  <td>556.300 ha/m2</td>
          </tr>
           <tr >
                  <td class="text-center"><?= $no++; ?></td>
                  <td>Luas Persawahan</td>
                  <td>879.120 ha/m2</td>
          </tr>
           <tr >
                  <td class="text-center"><?= $no++; ?></td>
                  <td>Luas Perkebunan</td>
                  <td>219.650 ha/m2</td>
          </tr>
           <tr >
                  <td class="text-center"><?= $no++; ?></td>
                  <td>Luas Taman</td>
                  <td>90.700 ha/m2</td>
          </tr>
           <tr >
                  <td class="text-center"><?= $no++; ?></td>
                  <td>Luas Prasarana Umum dan Lainnya</td>
                  <td>581.100 ha/m2</td>
          </tr>
           <tr >
                  <td class="text-center"><?= $no++; ?></td>
                  <td>Total Luas</td>
                  <td>2.326.870 ha/m2</td>
          </tr>


     </table>
     <br>

             <table class="table table-bordered border-dark  table-hover  " >
             <h5>b. Iklim</h5>
            <thead class="text-center" style="background-color : #30968a">
                <tr >
                    <th scope="col">No</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Jumlah</th>
                </tr>
            </thead>
           <tr >
               <?php
                    $no = 1;
                    ?>
                  <td class="text-center"><?= $no++; ?></td>
                  <td>Curah Hujan</td>
                  <td>21 Mm</td>
          </tr>
           <tr >
                  <td class="text-center"><?= $no++; ?></td>
                  <td>Curah Hujan Perbulan</td>
                  <td>160 Mm</td>
          </tr>
           <tr >
                  <td class="text-center"><?= $no++; ?></td>
                  <td>kelembapan</td>
                  <td>50 %</td>
          </tr>
           <tr >
                  <td class="text-center"><?= $no++; ?></td>
                  <td>Suhu rata-rata Harian</td>
                  <td>28 C</td>
          </tr>
           <tr >
                  <td class="text-center"><?= $no++; ?></td>
                  <td>Tinggi TTempat Dari Permukaan Laut</td>
                  <td>107.59 mdpl</td>
          </tr>


     </table>

     <br>


      <h4 style="margin-left : -5rem">2. Potensi Sumber Daya Air</h4> <br>
        <table class="table table-bordered border-dark  table-hover  " >
             <h5>b. Potensi Air dan Sumber Daya Air</h5>
            <thead class="text-center" style="background-color : #30968a">
                <tr >
                    <th scope="col">No</th>
                    <th scope="col">Nama Lahan</th>
                    <th scope="col">Volume</th>
                </tr>
            </thead>
           <tr >
               <?php
                    $no = 1;
                    ?>
                  <td class="text-center"><?= $no++; ?></td>
                  <td>Sungai</td>
                  <td>Besar</td>
          </tr>
           <tr >
                  <td class="text-center"><?= $no++; ?></td>
                  <td>Danau</td>
                  <td>Kecil</td>
          </tr>
           <tr >
                  <td class="text-center"><?= $no++; ?></td>
                  <td>Mata Air</td>
                  <td>Sedang</td>
          </tr>
           <tr >
                  <td class="text-center"><?= $no++; ?></td>
                  <td>Bendungan/Waduk</td>
                  <td>Sedang</td>
          </tr>
           <tr >
                  <td class="text-center"><?= $no++; ?></td>
                  <td>Embung-embung</td>
                  <td>Kecil</td>
          </tr>


     </table>
     <br><br>

           <h4 style="margin-left : -5rem">3. Potensi Sumber Daya Manusia</h4> <br>
        <table class="table table-bordered border-dark  table-hover  " >
             <h5>a. Data Penduduk</h5>
            <thead class="text-center" style="background-color : #30968a">
                <tr >
                    <th scope="col">No</th>
                    <th scope="col">Data Penduduk</th>
                    <th scope="col">Total</th>
                </tr>
            </thead>
           <tr >
               <?php
                    $no = 1;
                    ?>
                  <td class="text-center"><?= $no++; ?></td>
                  <td>Jumlah Laki - Laki</td>
                  <td>742 Orang</td>
          </tr>
           <tr >
                  <td class="text-center"><?= $no++; ?></td>
                  <td>Jumlah Perempuan</td>
                  <td>914 Orang</td>
          </tr>
           <tr >
                  <td class="text-center"><?= $no++; ?></td>
                  <td>Jumlah total</td>
                  <td>1.656 Orang</td>
          </tr>
           <tr >
                  <td class="text-center"><?= $no++; ?></td>
                  <td>Jumlah Kepala Keluarga</td>
                  <td>297 KK</td>
          </tr>
     </table>
     <br><br>

     <table class="table table-bordered border-dark  table-hover  " >
             <h5>b. Usia</h5>
            <thead class="text-center" style="background-color : #30968a">
                <tr >
                    <th scope="col">No</th>
                    <th scope="col">Usia</th>
                    <th scope="col">Laki - Laki</th>
                    <th scope="col">Perempuan</th>
                </tr>
            </thead>
           <tr >
               <?php
                    $no = 1;
                    ?>
                  <td class="text-center"><?= $no++; ?></td>
                  <td>0-12 bulan</td>
                  <td>55 Orang</td>
                  <td>87 Orang</td>
          </tr>
          <tr>
                  <td class="text-center"><?= $no++; ?></td>
                  <td>1 - 10 Tahun</td>
                  <td>153 Orang</td>
                  <td>138 Orang</td>
          </tr>
          <tr>
                  <td class="text-center"><?= $no++; ?></td>
                  <td>11 - 30 Tahun</td>
                  <td> 142 Orang</td>
                  <td> 164 Orang</td>
          </tr>
          <tr>
                  <td class="text-center"><?= $no++; ?></td>
                  <td>31 - 50 Tahun bulan</td>
                  <td> 236 Orang</td>
                  <td>350 Orang</td>
          </tr>
          <tr>
                  <td class="text-center"><?= $no++; ?></td>
                  <td>51 - 70 Tahun</td>
                  <td>89 Orang</td>
                  <td>95 Orang</td>
          </tr>
          <tr>
                  <td class="text-center"><?= $no++; ?></td>
                  <td>Lebh dari 71 Tahun</td>
                  <td>67 Orang</td>
                  <td>80 Orang</td>
          </tr>

     </table>
     <br><br>
     </div>


        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    </body>
</html>
