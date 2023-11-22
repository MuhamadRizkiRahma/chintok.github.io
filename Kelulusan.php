<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

    <title>Penilaian Raport</title>
  </head>
  <body>
            <ul><br>
                <h2><b>Hasil Kelulusan</b></h2>
                <p>Hasil kelulusan di SMK BAkti Nusantara 666</p>
            </ul><br>
            <ul>
                <div class="card bg-dark text-dark">
                <img src="img/k.png" class="card-img" alt="100%" widht="80%" height="700">
                    <div class="card-img-overlay">
                      <h3><b>Masukkan Identity:</b></h3><br>
                        <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
                        <div class="form-group">
                        <label for="nama"><h5>Masukkan Nama Siswa</h5></label>
                        <input type="text" class="form-control" id="nama" name="nama" placeholder="">
                        </div>
                        <div class="form-group">
                        <label for="kelas"><h5>Masukkan kelas</h5></label>
                        <input type="text" class="form-control" id="kelas" name ="kelas" placeholder="">
                        </div><hr>
                        <h3><b>Masukkan Nilai:</b></h3><br>
                        <div class="form-group">
                        <label for="produktif"><h5>Masukan Nilai Produktif</h5></label>
                        <input type="text" class="form-control" id="produktif" name ="produktif" placeholder="">
                        </div>
                        <div class="form-group">
                        <label for="normatif"><h5>Masukkan Nilai Normatif</h5></label>
                        <input type="text" class="form-control" id="normatif" name ="normatif" placeholder="">
                        </div>
                        <div class="form-group">
                        <label for="mulok"><h5>Masukkan Nilai Mulok</h5></label>
                        <input type="text" class="form-control" id="mulok" name ="mulok" placeholder="">
                        </div>
                        <button type="submit" name="submit" class="btn btn-primary">Hasil</button>
                    </div>
                </div>
            </ul>
            </body>
            </html>
            <?php
            echo "<ul>";
            if(isset($_POST['submit'])) {
              $nama = $_POST["nama"];
              $kelas = $_POST ["kelas"];
              $produktif = $_POST ["produktif"];
              $normatif = $_POST ["normatif"];
              $mulok = $_POST ["mulok"];
              $totalnilai = $produktif + $normatif + $mulok;
              $rata_rata = $totalnilai/3;
              
              echo "<div class = 'container'>";
              echo "<h4> NAMA   :        $nama </h4>";
              echo "<h4> KELAS  :        $kelas </h4>";

            }


            if ($produktif > 70) {
              $grade = "A";
            }elseif ($produktif>80) {
              $grade = "B";
            }elseif ($produktif>70) {
              $grade = "C";
            }elseif ($produktif>60) {
              $grade = "D";
            }elseif ($produktif>50) {
              $grade = "E";
            }

             if ($normatif > 70) {
              $grade2 = "A";
            }elseif ($normatif > 80) {
              $grade2 = "B";
            }elseif ($normatif > 70) {
              $grade2 = "C";
            }elseif ($normatif > 60) {
              $grade2 = "D";
            }elseif ($normatif > 50) {
              $grade2 = "E";
            }

            if ($mulok > 70) {
               $grade3 = "A";
            }elseif ($mulok > 80) {
              $grade3 = "B";
            }elseif ($mulok > 70) {
              $grade3 = "C";
            }elseif ($mulok > 60) {
              $grade3 = "D";
            }elseif ($mulok > 50) {
              $grade3 = "E";
            }

            if ($produktif > 80) {
              $hasil = "LULUS";
            }else {
              $hasil = "TIDAK LULUS";
            }
            if ($normatif > 80) {
              $hasil2 = "LULUS";
            }else {
              $hasil2 = "TIDAK LULUS";
            }
            if ($mulok > 80) {
              $hasil3 = "LULUS";
            }else {
              $hasil3 = "TIDAK LULUS";
            }
            if ($rata_rata > 80) {
              $hasil4 = "LULUS";
            }else {
              $hasil4 = "TIDAK LULUS";
            }

            echo "</div>";

            echo "<table class='table table-bordere'>";
            echo "<thead>
            <tr>
            <th scope='col'>NO</th>
            <th scope='col'>MAPEL</th>
            <th scope='col'>NILAI</th>
            <th scope='col'>GRADE</th>
            <th scope='col'>KETERANGAN</th>
            </tr>
            </thead>
            <tbody>
            <tr>
            <th scope='row'>1</th>
            <td>PRODUKTIF</td>
            <td>$produktif</td>
            <td>$grade</td>
            <td>$hasil</td>
            </tr>
            <tr>
            <th scope='row'>2</th>
            <td>PRODUKTIF</td>
            <td>$normatif</td>
            <td>$grade2</td>
            <td>$hasil</td>
            </tr>
            <tr>
            <th scope='row'>3</th>
            <td>PRODUKTIF</td>
            <td>$mulok</td>
            <td>$grade3</td>
            <td>$hasil</td>
            </tr>
            </tbody>
            </table>";
            echo "<div class='row'>";
            echo "<div class='col-md-6'>";
            echo "<h3>NILAI RATA-RATA</h3>";
            echo "</div>";
            echo "<div class='col-md-6'>";
            echo "<div style ='text-align : right;'><h3>$rata_rata</h3></div>";
            echo "<div style ='text-align : right;'><h3>$hasil4</h3></div>";
            echo "</div>";
            echo "</div>"; 
            echo "</ul>";        
            ?>
            <div class="card text-center">
            <div class="card-header">
            Footer
            </div>
            <div class="card-body">
            <h5 class="card-title">Special title treatment</h5>
            <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
            <a href="#smkbn666" class="btn btn-primary">Go somewhere</a>
            </div>
            <div class="card-footer text-muted">
            iqhr832923-
            </div>
            </div>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
  </body>
</html>