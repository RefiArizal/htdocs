<?php

     include 'koneksi.php';
     $id = $_GET['id'];

     $query = "DELETE FROM tbl_datawarga WHERE id = '$id'";
     $delete = mysqli_query($conn,$query);

     header("Location:index.php?p=datawarga");

?>