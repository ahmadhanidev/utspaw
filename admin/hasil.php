<?php
//PROTECTED PAGE
session_start();

require "protect-admin.php";

//LogOut
if(isset($_POST['logout'])){
  unset($_SESSION['user']);
}

if (!isset($_SESSION['user'])){
  header("Location: login-admin.php");
}
 ?>


<html>
  <head>
    <title>INPUT Data Nilai Mahasiswa | SIM UBHARA</title>
    <link rel="shortcut icon" href="icon.png">
    <link href="login-admin.css" rel="stylesheet">
  </head>
  <style>
.button {
  background-color: red;
  border: none;
  color: white;
  padding: 8px 15px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
}
.buttonPrint {
  background-color: green;
  border: none;
  color: white;
  padding: 8px 15px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
}
</style>
<body>
  <div id="success-login">Status: ADMIN MODE | 001 - Admin 1</div>
  <form method="post">
  <input type="hidden" name="logout" value="1"/>
  <input type="submit" class="button" value="Logout"/>
  <button class="buttonPrint" onclick="window.print()" target="_blank">Cetak Data</button>
  </form>

  <!-- CSS Tabel -->
  <style>
  th, td {
    border-style: solid;
    padding: 5px;
  }
  </style>
  <!-- CSS Tabel -->

  <!-- Get POST DATA -->
    <?php
    $namamatkul1 = $_POST['namamatkul1'];
    $namamatkul2 = $_POST['namamatkul2'];
    $namamatkul3 = $_POST['namamatkul3'];
    $namamatkul4 = $_POST['namamatkul4'];
    $namamatkul5 = $_POST['namamatkul5'];
    $namamatkul6 = $_POST['namamatkul6'];
    $namamatkul7 = $_POST['namamatkul7'];
    $namamatkul8 = $_POST['namamatkul8'];

    $nilaimatkul1 = $_POST['nilaimatkul1'];
    $nilaimatkul2 = $_POST['nilaimatkul2'];
    $nilaimatkul3 = $_POST['nilaimatkul3'];
    $nilaimatkul4 = $_POST['nilaimatkul4'];
    $nilaimatkul5 = $_POST['nilaimatkul5'];
    $nilaimatkul6 = $_POST['nilaimatkul6'];
    $nilaimatkul7 = $_POST['nilaimatkul7'];
    $nilaimatkul8 = $_POST['nilaimatkul8'];

    $namamhs2 = $_POST['namamhs'];
    $namadosen = $_POST['namadosen'];
    ?>
  <!-- Get POST DATA -->

  <!-- Data Mahasiswa -->
    <?php
      $namaMhs = "AHMAD DHANI";
      $univ = "Universitas Bhayangkara Surabaya";
      $fakultas = "Teknik";
      $programstudi = "Teknik Informatika (TI)";
      $peminatan = "Sistem Informasi (SI)";
      $jenjang = "Strata-1 (S1)";
      $jnskelamin = "Laki-laki";
      $ttl = "Surabaya, 04 Juni 2001";
      $alamat = "Jl. Raya Menganti Jeruk No. 310 - (SURABAYA)";
    ?>
  <!-- Data Mahasiswa -->

  <!-- Detail -->
    <?php
      $namaDosenWali = "M MAHAPUTRA HIDAYAT";
      $nim = "1914311048";
      $ips = "3.5";
      $semester = "6";
    ?>
  <!-- Detail -->

  <!-- Data Kode & Mata Kuliah -->
    <?php
      $jumlahmatkul = 8;

      $kdmatkul1 = "5TI1011";
      $matkul1 = "Sistem Optimasi";
      $kdmatkul2 = "5TI1021";
      $matkul2 = "Probabilitas & Stokastik";
      $kdmatkul3 = "5TI2011";
      $matkul3 = "Data Mining";
      $kdmatkul4 = "5TI2021";
      $matkul4 = "Enterprise Resource Planning (ERP)";
      $kdmatkul5 = "5TI2031";
      $matkul5 = "Rekayasa Perangkat Lunak";
      $kdmatkul6 = "7TI2021";
      $matkul6 = "Sistem Pendukung Keputusan";
      $kdmatkul7 = "7TI2011";
      $matkul7 = "Data Sains";
      $kdmatkul8 = "7TI1021";
      $matkul8 = "Technopreneurship 1";
    ?>
  <!-- Data Kode & Mata Kuliah -->

  <!-- Data Nilai, Kelas, Bobot -->
    <?php
      $sksmatkul = 3;

      $kelas1 = "A";
      $kelas2 = "B";
      $kelas3 = "C";

      $nilai1 = "A";
      $bobotnilai1 = 12;
      $nilai2 = "B";
      $bobotnilai2 = 9;
      $nilai3 = "C";
      $bobotnilai3 = 6;
      $nilai4 = "D";
      $bobotnilai4 = 3;

      $nilaiipssmt1 = 3.32;
      $nilaiipssmt2 = 3.38;
      $nilaiipssmt3 = 3.41;
      $nilaiipssmt4 = 3.45;
      $nilaiipssmt5 = 3.58;
    ?>
  <!-- Data Nilai, Kelas, Bobot -->

<?php
if (is_numeric($nilaimatkul1) && is_numeric($nilaimatkul2) && is_numeric($nilaimatkul3) && is_numeric($nilaimatkul4) && is_numeric($nilaimatkul5) && is_numeric($nilaimatkul6) && is_numeric($nilaimatkul7) && is_numeric($nilaimatkul8)) {
  $jumlahbobot = $nilaimatkul1 + $nilaimatkul2 + $nilaimatkul3 + $nilaimatkul4 + $nilaimatkul5 + $nilaimatkul6 + $nilaimatkul7 + $nilaimatkul8;
} else {
  $jumlahbobot = 0;
}
 ?>

  <!-- Perhitungan -->
    <?php
      $totalsks = $sksmatkul * $jumlahmatkul;
      $jumlahbobot = 0;
      $jumlahbobot = $nilaimatkul1 + $nilaimatkul2 + $nilaimatkul3 + $nilaimatkul4 + $nilaimatkul5 + $nilaimatkul6 + $nilaimatkul7 + $nilaimatkul8;
      $nilaiipssmt6 = $jumlahbobot / $totalsks;
      $jumlahnilaismt = $nilaiipssmt1 + $nilaiipssmt2 + $nilaiipssmt3 + $nilaiipssmt4 + $nilaiipssmt5 + $nilaiipssmt6;
      $nilaiipksmt6 = $jumlahnilaismt / $semester;
    ?>
  <!-- Perhitungan -->



    <h1 align="center"><u>KARTU HASIL STUDI UBHARA</u></h1>
    <table width="500" border="1" cellspacing="0" cellpadding="5" align="center">
      <tr align="center" bgcolor="yellow">
        <td colspan="2"><b>DETAIL INFORMASI</b></td>
      </tr>
      <tr>
      <tr>
        <td>Nama Dosen Wali</td>
        <td><?php echo $namaDosenWali ?></td>
      </tr>
      <tr>
        <td>Nama Mahasiswa</td>
        <td><?php echo $namaMhs ?></td>
      </tr>
      <td>Fakultas</td>
      <td><?php echo $fakultas ?></td>
    </tr>
    <tr>
      <td>Program Studi</td>
      <td><?php echo $programstudi ?></td>
    </tr>
      <tr>
        <td>NIM</td>
        <td><?php echo $nim ?></td>
      </tr>
      <tr>
        <td>IPS (Sem: 5)</td>
        <td><?php echo $nilaiipssmt5 ?></td>
      </tr>
      <tr>
        <td>Semester</td>
        <td><?php echo $semester ?></td>
      </tr>
    </table>

    <br><br>

    <table width="900" border="1" cellspacing="0" cellpadding="5" align="center">
      <tr align="center" bgcolor="yellow">
        <td><b>KODE</b></td>
        <td><b>NAMA MATAKULIAH</b></td>
        <td><b>SKS</b></td>
        <td><b>KELAS</b></td>
        <td><b>NILAI</b></td>
        <td><b>BOBOT</b></td>
      </tr>
      <tr align="center">
        <td><?php echo $kdmatkul1 ?></td>
        <td align="left"><?php echo $matkul1 ?></td>
        <td><?php echo $sksmatkul ?></td>
        <td><?php echo $kelas1 ?></td>
        <td><?php echo $nilai1 ?></td>
        <td><?php echo $nilaimatkul1 ?></td>
      </tr>
      <tr align="center">
        <td><?php echo $kdmatkul2 ?></td>
        <td align="left"><?php echo $matkul2 ?></td>
        <td><?php echo $sksmatkul ?></td>
        <td><?php echo $kelas1 ?></td>
        <td><?php echo $nilai1 ?></td>
        <td><?php echo $nilaimatkul2 ?></td>
      </tr>
      <tr align="center">
        <td><?php echo $kdmatkul3 ?></td>
        <td align="left"><?php echo $matkul3 ?></td>
        <td><?php echo $sksmatkul ?></td>
        <td><?php echo $kelas1 ?></td>
        <td><?php echo $nilai3 ?></td>
        <td><?php echo $nilaimatkul3 ?></td>
      </tr>
      <tr align="center">
        <td><?php echo $kdmatkul4 ?></td>
        <td align="left"><?php echo $matkul4 ?></td>
        <td><?php echo $sksmatkul ?></td>
        <td><?php echo $kelas2 ?></td>
        <td><?php echo $nilai1 ?></td>
        <td><?php echo $nilaimatkul4 ?></td>
      </tr>
      <tr align="center">
        <td><?php echo $kdmatkul5 ?></td>
        <td align="left"><?php echo $matkul5 ?></td>
        <td><?php echo $sksmatkul ?></td>
        <td><?php echo $kelas2 ?></td>
        <td><?php echo $nilai1 ?></td>
        <td><?php echo $nilaimatkul5 ?></td>
      </tr>
      <tr align="center">
        <td><?php echo $kdmatkul6 ?></td>
        <td align="left"><?php echo $matkul6 ?></td>
        <td><?php echo $sksmatkul ?></td>
        <td><?php echo $kelas1 ?></td>
        <td><?php echo $nilai4 ?></td>
        <td><?php echo $nilaimatkul6 ?></td>
      </tr>
      <tr align="center">
        <td><?php echo $kdmatkul7 ?></td>
        <td align="left"><?php echo $matkul7 ?></td>
        <td><?php echo $sksmatkul ?></td>
        <td><?php echo $kelas1 ?></td>
        <td><?php echo $nilai2 ?></td>
        <td><?php echo $nilaimatkul7 ?></td>
      </tr>
      <tr align="center">
        <td><?php echo $kdmatkul8 ?></td>
        <td align="left"><?php echo $matkul8 ?></td>
        <td><?php echo $sksmatkul ?></td>
        <td><?php echo $kelas3 ?></td>
        <td><?php echo $nilai1 ?></td>
        <td><?php echo $nilaimatkul8 ?></td>
      </tr>
      <tr align="center" bgcolor="#dee3d5">
        <td colspan="2"><b>JUMLAH</b></td>
        <td><b><?php echo $totalsks; ?></b></td>
        <td colspan="2">&nbsp</td>
        <td><b><?php echo $jumlahbobot; ?></b></td>
      </tr>
      <tr align="center">
        <td rowspan="2" colspan="3"><b>TOTAL NILAI</b></td>
        <td><b>IPS</b></td>
        <td><b><?php echo $nilaiipssmt6; ?></b></td>
        <td rowspan="2">&nbsp</td>
      </tr>
      <tr align="center">
        <td><b>IPK</b></td>
        <td><b><?php echo number_format($nilaiipksmt6, 2); ?></b></td>
      </tr>
    </table>



</body>
</html>
