<?php
  if(isset($_GET['submit'])){
    if(count($_GET) > 0) {
      $total = (30*$_GET['uts']/100)+(35*$_GET['uas']/100)+(35*$_GET['nilai_tugas']/100);
      $hasil = $total;
      if($hasil >= 8.5){
        $grade = 'A';
        $ip = '4';
      } else if($hasil >= 7.0){
        $grade = 'B';
        $ip = '3';
      } else if($hasil >= 5.5) {
        $grade = 'C';
        $ip = '2';
      } else if($hasil >= 4.0) {
        $grade = 'D';
        $ip = '1';
      } else {
        $grade = 'E';
        $ip = '0';
      }
    } else {
      header('form_nilai.php');
    }
  } else {
    header('form_nilai.php');
  }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Praktikum Form PHP</title>
    <link href="assets/vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <link href="assets/vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <link href="assets/vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="assets/css/main.css" rel="stylesheet" media="all">
</head>

<body>
    <div class="page-wrapper bg-gra-02 p-b-100 font-poppins">
        <div class="wrapper wrapper--w680">
            <div class="card card-4">
                <div class="card-body">
                    <h2 class="title">Tugas Form - Praktikum 1</h2>
                    <form method="GET">
                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label" for="nama">Nama :</label>
                                    <input class="input--style-4" type="text" name="nama" id="nama" placeholder="Masukan Nama">
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label" for="nama">Nim : </label>
                                    <input class="input--style-4" type="text" name="nim" id="nim" placeholder="Masukan NIM">
                                </div>
                            </div>
                        </div>
                        <div class="row row-space">
                            <div class="input-group">
                                <label class="label">Mata Kuliah : </label>
                                <div class="rs-select2 js-select-simple select--no-search">
                                    <select name="matkul" id="matkul">
                                          <option value="Pemrograman Web">Pemrograman Web</option>
                                          <option value="Jaringan Komputer">Jaringan Komputer</option>
                                          <option value="Basis Data">Basis Data</option>
                                    </select>
                                    <div class="select-dropdown"></div>
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label" for="nilai_tugas">Nilai Tugas : </label>
                                    <input class="input--style-4" name="nilai_tugas" id="nilai_tugas" type="text" placeholder="Masukan Nilai Tugas">
                                </div>
                            </div>
                        </div>
                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label" for="nilai_uts">Nilai UTS :</label>
                                    <input class="input--style-4" type="text" name="uts" id="uts" placeholder="Masukan Nilai UTS">
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label" for="nilai_uas">Nilas UAS :</label>
                                    <input class="input--style-4" type="text" name="uas" id="uas" placeholder="Masukan Nilai UAS">
                                </div>
                            </div>
                        </div>
                        <div class="p-t-15">
                            <button type="submit" name="submit" class="btn btn--radius-2 btn--blue">Submit</button>
                        </div>
                        <div>
                          <br/>
                        </div>
                        <div class="hasilnya">
                          <div>
                              <strong>NAMA</strong><?= isset($_GET['nama']) ? $_GET['nama'] : 'Tidak ada' ?>
                          </div>

                          <div>
                              <strong>NIM</strong><?= isset($_GET['nim']) ? $_GET['nim'] : 'Tidak ada' ?>
                          </div>

                          <div>
                              <strong>Matkul</strong><?= isset($_GET['matkul']) ? $_GET['matkul'] : 'Tidak ada' ?>
                          </div>
                        </div>

                      <div class="hasilnya">
                          <div>
                              <strong>Nilai Tugas</strong><?= isset($_GET['nilai_tugas']) ? $_GET['nilai_tugas'] : 'Tidak ada' ?>
                          </div>

                          <div>
                              <strong>Nilai UTS</strong><?= isset($_GET['uts']) ? $_GET['uts'] : 'Tidak ada' ?>
                          </div>

                          <div>
                              <strong>Nilai UAS</strong><?= isset($_GET['uas']) ? $_GET['uas'] : 'Tidak ada' ?>
                          </div>
                      </div>

                      <div class="hasilnya">
                          <div>
                            <strong>Hasil</strong><?= isset($hasil) ? $hasil : 'Tidak ada' ?>
                          </div>
                          <div>
                            <strong>Grade</strong><?= isset($grade) ? $grade : 'Tidak ada' ?>
                          </div>
                          <div>
                            <strong>IP</strong><?= isset($ip) ? $ip : ' ' ?>
                          </div>
                      </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
    <script src="assets/vendor/jquery/jquery.min.js"></script>
    <script src="assets/vendor/select2/select2.min.js"></script>
    <script src="assets/js/global.js"></script>
</body>
</html>
