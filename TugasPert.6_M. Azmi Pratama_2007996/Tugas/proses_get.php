<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <link rel="stylesheet" href="style.css">
    <title>Hello, world!</title>
  </head>
<?php
    $nama = $_GET['nama'];
    $umur = $_GET['umur'];
    $alamat = $_GET['alamat'];
    $tombol = $_GET['tombol'];
?>

 <!--Form-->
 <div class="container">
    <div class="card mt-2">
    <div class="card-header"> 
        <h3>Selamat Datang!</h3> 
    </div>

    <div class="card-body">

    <form>
    <div class="row mb-3">
    <label for="nama" class="col-sm-2 col-form-label">Nama</label>
    <div class="col-sm-3">
        <textarea class="form-control"><?php echo $nama; ?></textarea>
    </div>
    </div>

    <div class="row mb-3">
    <label for="umur" class="col-sm-2 col-form-label">Umur</label>
    <div class="col-sm-1">
        <textarea class="form-control"><?php echo $umur; ?></textarea>
    </div>
    </div>

    <div class="row mb-3">
    <label for="alamat" class="col-sm-2 col-form-label">Alamat</label>
    <div class="col-sm-7">
        <textarea class="form-control"> <?php echo $alamat; ?> </textarea>
    </div>
    </div>