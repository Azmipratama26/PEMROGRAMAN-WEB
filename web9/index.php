<!DOCTYPE html>
<html lang="en">
<head>
    <title>Halaman</title>
</head>
<body>

<?php
    include ("koneksi.php");

    $query = "select * from identitas";
    $hasil = mysqli_query($koneksi, $query);
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
    
    
    <form action="proses_insert.php" method="POST">

    <div class="container">
    <div class="card mt-2">
    <div class="card-header">
    <h1> Tambah Identitas </h1>
    </div>

        <div class="card-body">
        <form>

    <div class="row mb-3">
        <label for="nama" class="col-sm-2 col-form-label">Nama Lengkap</label>
        <div class="col-sm-3">
        <input type="text" id="text" name="nama" class="form-control">
        </div>
    </div>

    <div class="row mb-3">
        <label for="tanggallahir" class="col-sm-2 col-form-label">Tanggal Lahir</label>
        <div class="col-sm-7">
            <textarea type= "text" id="text" name ="tgl"class="form-control"></textarea>
        </div>
    </div>

    <div class="row mb-3">
        <label for="jeniskelamin" class="col-sm-2 col-form-label">Jenis Kelamin</label>
        <div class="col-sm-7">
            <textarea type= "text" id="text" name ="jeniskelamin"class="form-control"></textarea>
        </div>
    </div>

    <div class="row mb-3">
        <label for="alamat" class="col-sm-2 col-form-label">Alamat</label>
        <div class="col-sm-7">
            <textarea type= "text" id="text" name ="alamat"class="form-control"></textarea>
        </div>
    </div>

    <div class="row mb-3">
        <label for="umur" class="col-sm-2 col-form-label">Umur</label>
        <div class="col-sm-7">
            <textarea type= "text" id="text" name ="umur"class="form-control"></textarea>
        </div>
    </div>

    <div class="row mb-3">
        <label for="agama" class="col-sm-2 col-form-label">Agama</label>
        <div class="col-sm-7">
            <textarea type= "text" id="text" name ="agama" class="form-control"></textarea>
        </div>
    </div>

    <div class="row mb-3">
        <label for="hobi" class="col-sm-2 col-form-label">Hobi</label>
        <div class="col-sm-7">
            <textarea type= "text" id="text" name ="hobi" class="form-control"></textarea>
        </div>
    </div>
    <div class="row mb-3">
        <label for="pekerjaan" class="col-sm-2 col-form-label">Pekerjaan</label>
        <div class="col-sm-7">
            <textarea type= "text" id="text" name ="pekerjaan"class="form-control"></textarea>
        </div>
    </div>

    <div class="row mb-3">
        <label for="id_user" class="col-sm-2 col-form-label">ID User</label>
        <div class="col-sm-7">
            <textarea type= "text" id="text" name ="id_user"class="form-control"></textarea>
        </div>
    </div>

    <div class="card-footer text-muted">
        <input type="submit" class="btn btn-primary" value="Simpan">
    </div>

    </form>

    </div>
    </div>
    <br>
    <br>
    
   
    <h1> Tabel Identitas </h1>

    <table border="1">
        <tr>
            <th>ID</th>
            <th>Nama</th>
            <th>Tanggal Lahir</th>
            <th>Jenis Kelamin</th>
            <th>Umur</th>
            <th>Agama</th>
            <th>Hobi</th>
            <th>Pekerjaan</th>
            <th>Alamat</th>
            <th colspan="2">Aksi</th>
        </tr>

        <?php
        while($row = mysqli_fetch_array($hasil)){
            echo "<tr>";
            echo "<td>".$row['id_identitas']."</td>";
            echo "<td>".$row['nama']."</td>";
            echo "<td>".$row['tanggallahir']."</td>";
            echo "<td>".$row['jeniskelamin']."</td>";
            echo "<td>".$row['umur']."</td>";
            echo "<td>".$row['agama']."</td>";
            echo "<td>".$row['hobi']."</td>";
            echo "<td>".$row['pekerjaan']."</td>";
            echo "<td>".$row['alamat']."</td>";
            echo "<td><a href='edit.php?id_identitas=".$row['id_identitas']."'>edit</a></td>";
            echo "<td><a href='delete.php?id_identitas=".$row['id_identitas']."'>delete</a></td>";
            echo "</tr>";
        }
        
        ?>  
    </table>

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

