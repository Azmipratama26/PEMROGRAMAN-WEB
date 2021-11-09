<?php

    include("koneksi.php");

    $nama = $_POST['nama'];
    $tanggallahir = $_POST['tanggallahir'];
    $jeniskelamin = $_POST['jeniskelamin'];
    $umur = $_POST['umur'];
    $agama = $_POST['agama'];
    $hobi = $_POST['hobi'];
    $pekerjaan = $_POST['pekerjaan'];
    $alamat = $_POST['alamat'];
    $id_user = $_POST['id_user'];

    $query = "insert into identitas values ('', '$nama', '$tanggallahir', '$jeniskelamin', '$umur', '$agama', '$hobi', '$pekerjaan', '$alamat', $id_user)";
    
    if(mysqli_query($koneksi, $query)){
        header("Location: index.php");
    }else{
        header("Location: edit.php?id_identitas=$id_identitas");
    }

?>