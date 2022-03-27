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
  </form>

<h1><center>Input Data Nilai Mahasiswa<center></h3>
  <form id="login-form" method="POST" action="hasil.php">
    <h1>Sistem Informasi UBHARA</h1>
    <center><h4>--- INPUT DATA ---</h4></center>
    <fieldset>
    <legend>Data Umum</legend>
    <label for="namamhs">Nama Mahasiswa:</label>
      <select name="namamhs" id="namamhs">
        <option value="Ahmad Dhani">Ahmad Dhani - 1914311048</option>
      </select>
    <label for="namadosen">Nama Dosen Wali:</label>
      <select name="namadosen" id="namadosen">
        <option value="M Mahaputra Hidayat">M Mahaputra Hidayat</option>
      </select>
  </fieldset>
  <br>
  <fieldset>
  <legend>Data Tambahan</legend>
  <label for="namamatkul1">Mata Kuliah 1:</label>
    <select name="namamatkul1" id="namamatkul1">
      <option value="-">Pilih...</option>
      <option value="Sistem Optimasi">[1] Sistem Optimasi</option>
      <option value="Probabilitas & Stokastik">[2] Probabilitas & Stokastik</option>
      <option value="Data Mining">[3] Data Mining</option>
      <option value="Enterprise Resource Planning (ERP)">[4] Enterprise Resource Planning (ERP)</option>
      <option value="Rekayasa Perangkat Lunak">[5] Rekayasa Perangkat Lunak</option>
      <option value="Sistem Pendukung Keputusan">[6] Sistem Pendukung Keputusan</option>
      <option value="Data Sains">[7] Data Sains</option>
      <option value="Technopreneurship 1">[8] Technopreneurship 1</option>
    </select>
  <label for="nilaimatkul1">Nilai Matkul 1:</label>
  <select name="nilaimatkul1" id="nilaimatkul1">
    <option value="-">Pilih...</option>
    <option value="12">[A] 12</option>
    <option value="9">[B] 9</option>
    <option value="6">[C] 6</option>
    <option value="3">[D] 3</option>
    <option value="0">[E] 0</option>
  </select>

  <label for="namamatkul2">Mata Kuliah 2:</label>
    <select name="namamatkul2" id="namamatkul2">
      <option value="-">Pilih...</option>
      <option value="Probabilitas & Stokastik">[2] Probabilitas & Stokastik</option>
      <option value="Data Mining">[3] Data Mining</option>
      <option value="Enterprise Resource Planning (ERP)">[4] Enterprise Resource Planning (ERP)</option>
      <option value="Rekayasa Perangkat Lunak">[5] Rekayasa Perangkat Lunak</option>
      <option value="Sistem Pendukung Keputusan">[6] Sistem Pendukung Keputusan</option>
      <option value="Data Sains">[7] Data Sains</option>
      <option value="Technopreneurship 1">[8] Technopreneurship 1</option>
    </select>
  <label for="nilaimatkul2">Nilai Matkul 2:</label>
  <select name="nilaimatkul2" id="nilaimatkul2">
    <option value="-">Pilih...</option>
    <option value="12">[A] 12</option>
    <option value="9">[B] 9</option>
    <option value="6">[C] 6</option>
    <option value="3">[D] 3</option>
    <option value="0">[E] 0</option>
  </select>

  <label for="namamatkul3">Mata Kuliah 3:</label>
    <select name="namamatkul3" id="namamatkul3">
      <option value="-">Pilih...</option>
      <option value="Data Mining">[3] Data Mining</option>
      <option value="Enterprise Resource Planning (ERP)">[4] Enterprise Resource Planning (ERP)</option>
      <option value="Rekayasa Perangkat Lunak">[5] Rekayasa Perangkat Lunak</option>
      <option value="Sistem Pendukung Keputusan">[6] Sistem Pendukung Keputusan</option>
      <option value="Data Sains">[7] Data Sains</option>
      <option value="Technopreneurship 1">[8] Technopreneurship 1</option>
    </select>
  <label for="nilaimatkul3">Nilai Matkul 3:</label>
  <select name="nilaimatkul3" id="nilaimatkul3">
    <option value="-">Pilih...</option>
    <option value="12">[A] 12</option>
    <option value="9">[B] 9</option>
    <option value="6">[C] 6</option>
    <option value="3">[D] 3</option>
    <option value="0">[E] 0</option>
  </select>

  <label for="namamatkul4">Mata Kuliah 4:</label>
    <select name="namamatkul4" id="namamatkul4">
      <option value="-">Pilih...</option>
      <option value="Enterprise Resource Planning (ERP)">[4] Enterprise Resource Planning (ERP)</option>
      <option value="Rekayasa Perangkat Lunak">[5] Rekayasa Perangkat Lunak</option>
      <option value="Sistem Pendukung Keputusan">[6] Sistem Pendukung Keputusan</option>
      <option value="Data Sains">[7] Data Sains</option>
      <option value="Technopreneurship 1">[8] Technopreneurship 1</option>
    </select>
  <label for="nilaimatkul4">Nilai Matkul 4:</label>
  <select name="nilaimatkul4" id="nilaimatkul4">
    <option value="-">Pilih...</option>
    <option value="12">[A] 12</option>
    <option value="9">[B] 9</option>
    <option value="6">[C] 6</option>
    <option value="3">[D] 3</option>
    <option value="0">[E] 0</option>
  </select>
</fieldset>
<br>
<fieldset>
<legend>Data Tambahan 2</legend>
<label for="namamatkul5">Mata Kuliah 5:</label>
  <select name="namamatkul5" id="namamatkul5">
    <option value="-">Pilih...</option>
    <option value="Rekayasa Perangkat Lunak">[5] Rekayasa Perangkat Lunak</option>
    <option value="Sistem Pendukung Keputusan">[6] Sistem Pendukung Keputusan</option>
    <option value="Data Sains">[7] Data Sains</option>
    <option value="Technopreneurship 1">[8] Technopreneurship 1</option>
  </select>
<label for="nilaimatkul5">Nilai Matkul 5:</label>
<select name="nilaimatkul5" id="nilaimatkul5">
  <option value="-">Pilih...</option>
  <option value="12">[A] 12</option>
  <option value="9">[B] 9</option>
  <option value="6">[C] 6</option>
  <option value="3">[D] 3</option>
  <option value="0">[E] 0</option>
</select>

<label for="namamatkul6">Mata Kuliah 6:</label>
  <select name="namamatkul6" id="namamatkul6">
    <option value="-">Pilih...</option>
    <option value="Sistem Pendukung Keputusan">[6] Sistem Pendukung Keputusan</option>
    <option value="Data Sains">[7] Data Sains</option>
    <option value="Technopreneurship 1">[8] Technopreneurship 1</option>
  </select>
<label for="nilaimatkul6">Nilai Matkul 6:</label>
<select name="nilaimatkul6" id="nilaimatkul6">
  <option value="-">Pilih...</option>
  <option value="12">[A] 12</option>
  <option value="9">[B] 9</option>
  <option value="6">[C] 6</option>
  <option value="3">[D] 3</option>
  <option value="0">[E] 0</option>
</select>

<label for="namamatkul7">Mata Kuliah 7:</label>
  <select name="namamatkul7" id="namamatkul7">
    <option value="-">Pilih...</option>
    <option value="Data Sains">[7] Data Sains</option>
    <option value="Technopreneurship 1">[8] Technopreneurship 1</option>
  </select>
<label for="nilaimatkul7">Nilai Matkul 7:</label>
<select name="nilaimatkul7" id="nilaimatkul7">
  <option value="-">Pilih...</option>
  <option value="12">[A] 12</option>
  <option value="9">[B] 9</option>
  <option value="6">[C] 6</option>
  <option value="3">[D] 3</option>
  <option value="0">[E] 0</option>
</select>

<label for="namamatkul8">Mata Kuliah 8:</label>
  <select name="namamatkul8" id="namamatkul8">
    <option value="-">Pilih...</option>
    <option value="Technopreneurship 1">[8] Technopreneurship 1</option>
  </select>
<label for="nilaimatkul8">Nilai Matkul 4:</label>
<select name="nilaimatkul8" id="nilaimatkul8">
  <option value="-">Pilih...</option>
  <option value="12">[A] 12</option>
  <option value="9">[B] 9</option>
  <option value="6">[C] 6</option>
  <option value="3">[D] 3</option>
  <option value="0">[E] 0</option>
</select>
</fieldset>
  <br>
    <input type="submit" value="SUBMIT DATA"/><br>
  </form>


</body>
</html>
