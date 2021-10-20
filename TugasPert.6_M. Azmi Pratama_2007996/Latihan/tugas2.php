<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Method POST!</title>
</head>
<body>
    <form name="" action="proses_post.php" method="POST"> <br>
    <table>
    <tr>
        <td>Nama</td>
        <td>:</td>
        <td><input type="text" name="nama"></td>
    </tr>
    <tr>
        <td>Jenis Kelamin</td>
        <td>:</td>
    <td>
        <input type="radio" name="jk" value ="Laki-Laki"> Laki-Laki <br>
        <input type="radio" name="jk" value ="Perempuan"> Perempuan 
    </td>
    </tr>
    <tr>
        <td>Umur</td>
        <td>:</td>
        <td><input type="text" name="umur"></td>
    </tr>
    <tr>
        <td>Alamat</td>
        <td>:</td>
        <td><textarea name="alamat" cols="30" rows="10"></textarea></td>
    </tr>
    <tr>
        <td>Hobby</td>
        <td>:</td>
        <td>
            <input type="checkbox" name="hoby[]" value ="Belajar"> Belajar <br>
            <input type="checkbox" name="hoby[]" value ="Membaca"> Membaca <br>
            <input type="checkbox" name="hoby[]" value ="Olahraga"> Olahraga <br>
            <input type="checkbox" name="hoby[]" value ="Rebahan"> Rebahan <br>
        </td>
    </tr>
    <tr>
        <td colspan="3"><input type="submit" value="Simpan" name="tombol"></td>
    </tr>
        </table> 
    </form>
</body>
</html>