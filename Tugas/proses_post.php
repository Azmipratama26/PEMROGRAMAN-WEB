<?php
    $nama = $_POST['nama'];
    $umur = $_POST['umur'];
    $alamat = $_POST['alamat'];
    $tombol = $_POST['tombol'];
    $jk = $_POST['jk'];
    $hoby = $_POST['hoby'];

    echo "<h1> Identitas Mahasiswa</h1>";
?>

<table>
    <tr>
        <td>Nama</td>
        <td>:</td>
        <td><?php echo $nama; ?></td>
    </tr>
    <tr>
        <td>Jenis Kelamin</td>
        <td>:</td>
        <td><?php echo $jk; ?></td>
    </tr>
    <tr>
        <td>Umur</td>
        <td>:</td>
        <td><?php echo $umur; ?></td>
    </tr>
    <tr>
        <td>Alamat</td>
        <td>:</td>
        <td><?php echo $alamat; ?></td>
    </tr>
    <tr>
        <td>Hobby</td>
        <td>:</td>
        <td>
            <?php
                echo "<ul>";
                foreach ($hoby as $value){ 
                    echo "<li>" .$value. "</li>";
                }
                echo "</ul>";
            ?>
        </td>
    </tr>
        </table>