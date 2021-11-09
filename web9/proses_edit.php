<?php

    include("koneksi.php");

    $id_identitas = $_POST['id_identitas'];
    $nama = $_POST['nama'];
    $tanggallahir = $_POST['tanggallahir'];
    $jeniskelamin = $_POST['jeniskelamin'];
    $umur = $_POST['umur'];
    $agama = $_POST['agama'];
    $hobi = $_POST['hobi'];
    $pekerjaan = $_POST['pekerjaan'];
    $alamat = $_POST['alamat'];

    $query = "update identitas set nama = '$nama', tanggallahir = '$tanggallahir', jeniskelamin = '$jeniskelamin', umur ='$umur', agama='$agama', hobi='$hobi', pekerjaan='$pekerjaan' alamat = '$alamat' where id_identitas = $id_identitas";
    
    if(mysqli_query($koneksi, $query)){
        header("Location: index.php");
    }else{
        header("Location: edit.php?id_identitas=$id_identitas");
    }

?>