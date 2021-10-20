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
  <body>
      <form name="" action="proses_get.php" method="GET"> <br>

    <!--Form-->
    <div class="container">
    <div class="card mt-2">
    <div class="card-header"> 
        <h3>FORM DATA DIRI</h3> 
    </div>

    <div class="card-body">

    <form>
    <div class="row mb-3">
    <label for="nama" class="col-sm-2 col-form-label">Nama</label>
    <div class="col-sm-3">
        <input type="text" id="text" name="nama" class="form-control">
    </div>
    </div>

  <div class="row mb-3">
    <label for="umur" class="col-sm-2 col-form-label">Umur</label>
    <div class="col-sm-3">
        <input type="text" id="text" name="umur" class="form-control">
    </div>
    </div>

  <div class="row mb-3">
    <label for="alamat" class="col-sm-2 col-form-label">Alamat</label>
    <div class="col-sm-7">
        <textarea type= "text" id="text" name ="alamat"class="form-control"></textarea>
    </div>
    </div>

    <div class="card-footer text-muted">
    <input class="btn btn-primary" type="submit" value="Simpan" name="tombol">
  </div>

</form>
    </div>
  </div>
</div>

    <!--Akhir Form-->

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