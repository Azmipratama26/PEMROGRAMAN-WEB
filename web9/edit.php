<!DOCTYPE html>
<html lang="en">
<head>
    <title>Edit Identitas</title>
</head>
<body>

    <?php
        include ("koneksi.php");
        $id_identitas = $_GET['id_identitas'];

        $query = "select * from identitas where id_identitas = $id_identitas";
        $hasil = mysqli_query($koneksi, $query);
        $row = mysqli_fetch_assoc($hasil);
    ?>

        <!doctype html>
        <html lang="en">
        <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

        <link rel="stylesheet" href="style.css">
    </head>
<body>
    
    <form action="proses_edit.php" method="POST">

    <div class="container">
    <div class="card mt-2">
    <div class="card-header">
    <h1> Edit Data </h1>
    </div>

    <div class="card-body">
        <form>

    <input type="hidden" name="id_identitas" value="<?php echo $row['id_identitas']; ?>">

    <div class="row mb-3">
    <label for="nama" class="col-sm-2 col-form-label">Nama</label>
    <div class="col-sm-3">
        <textarea class="form-control"><?php echo $row ['nama']; ?></textarea>
    </div>
    </div>

    <div class="row mb-3">
    <label for="tanggallahir" class="col-sm-2 col-form-label">Tanggal Lahir</label>
    <div class="col-sm-3">
        <textarea class="form-control"><?php echo $row ['tanggallahir']; ?></textarea>
    </div>
    </div>

    <div class="row mb-3">
    <label for="jeniskelamin" class="col-sm-2 col-form-label">Jenis Kelamin</label>
    <div class="col-sm-3">
        <textarea class="form-control"><?php echo $row ['jeniskelamin']; ?></textarea>
    </div>
    </div>
    
    <div class="row mb-3">
    <label for="umur" class="col-sm-2 col-form-label">Umur</label>
    <div class="col-sm-3">
        <textarea class="form-control"><?php echo $row ['umur']; ?></textarea>
    </div>
    </div>

    <div class="row mb-3">
    <label for="agama" class="col-sm-2 col-form-label">agama</label>
    <div class="col-sm-3">
        <textarea class="form-control"><?php echo $row ['agama']; ?></textarea>
    </div>
    </div>

    <div class="row mb-3">
    <label for="hobi" class="col-sm-2 col-form-label">hobi</label>
    <div class="col-sm-3">
        <textarea class="form-control"><?php echo $row ['hobi']; ?></textarea>
    </div>
    </div>

    <div class="row mb-3">
    <label for="pekerjaan" class="col-sm-2 col-form-label">Pekerjaanr</label>
    <div class="col-sm-3">
        <textarea class="form-control"><?php echo $row ['pekerjaan']; ?></textarea>
    </div>
    </div>

    <div class="row mb-3">
    <label for="alamat" class="col-sm-2 col-form-label">Alamat</label>
    <div class="col-sm-3">
        <textarea class="form-control"><?php echo $row ['alamat']; ?></textarea>
    </div>
    </div>

    <div class="card-footer text-muted">
        <input type="submit" value="Simpan">
    </div>
    </form>
    </div>
    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
   
</body>
</html>