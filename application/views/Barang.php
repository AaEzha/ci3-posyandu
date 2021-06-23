<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
 
    <title>Tutorial CodeIgniter - JARANGUDA.COM</title>
  </head>
  <body>
    <div class="container">
      <hr>
      <h3>KODE BARANG</h3>
      <hr>
      <form action="/Barang/simpan" method="POST" >
        <div class="form-group">
          <label for="cari">Kode Barang</label>
          <input type="text" class="form-control" id="kodebarang" name="kodebarang" value="JRD<?php echo sprintf("%04s", $kode_barang) ?>" readonly>
        </div>
        <div class="form-group">
          <label for="cari">Nama Barang</label>
          <input type="text" class="form-control" id="namabarang" name="namabarang">
        </div>
        <input class="btn btn-primary" type="submit" value="Simpan">
        <input class="btn btn-primary" type="reset" value="Reset">
      </form>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>