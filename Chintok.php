<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

    <title>From Store</title>
  </head>
  <body>
    
  <div class="card bg-dark text-white">
  <img src="img/1q.jpg" class="card-img" widht="100%" height="630">
    </div>
    <center>
  <div class="card-img-overlay">
    <img src="img/download (4).jpg">

    <h2><b>Toko Chintok</b></h2>
    <p>Program Aplikasi Sederhana Untuk Menghitung Penjualan Barang Toko Chintok</p>
    <br>
    </center>
    <hr>
    <ul>
        <form method="POST" action="">
            <div class="form-group">
              <label for="exampleInputBarang"><h5><b>Masukan Nama Barang</b></h5></label>
              <input type="text" class="form-control" id="namaBarang" name="nama" placeholder="">
            </div>
            <div class="form-group">
                <label for="exampleInputBarang"><h5><b>HargaBarang</b></h5></label>
                <input type="text" class="form-control" id="hargaBarang" name ="harga" placeholder="">
              </div>
              <div class="form-group">
    <label for="jumlahBarang"><h5><b>Jumlah Barang</b></h5></label>
    <select class="form-control" id="jumlahBarang" name="jumlah">
      <option>1</option>
      <option>2</option>
      <option>3</option>
      <option>4</option>
      <option>5</option>
    </select>
            </div>
                <button type="submit" name="hitung" class="btn btn-primary">Hitung</button>
              </div> 
              <br>
</ul>      
</form>
</div>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
    <center>
    <?php
    if(isset($_POST['hitung'])){
        $nama = $_POST['nama'];
        $harga = $_POST['harga'];
        $jumlah = $_POST['jumlah'];
        $d = 10;
        $da = $d / 100;
        $h = $harga * $jumlah * (1- $da);

        echo "<h3>Jumlah yang harus dibayar</h3>";
        echo "<h6>Nama Barang: $nama </h6>";
        echo "<h6>Harga Barang: $harga </h6>";
        echo "<h6>jumlah Barang: $jumlah </h6>";
        echo "<h6>Diskon: $d % </h6>";
        echo "<h3>Rp " . number_format($h, 2) . "</h3>";
    }
    ?>
    </center>
</body>
    </html>


   