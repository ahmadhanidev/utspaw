<?php
// Cek Login
require "check-user.php";
?>

<html>
  <head>
    <title>User Login</title>
    <link rel="shortcut icon" href="icon.png">
    <link href="login-user.css" rel="stylesheet">
  </head>
  <style>
.tombol {
  box-sizing: border-box;
  display: block;
  width: 100%;
  margin-top: 15px;
  background: #ad4343;
  color: #fff;
  border: 0;
  cursor: pointer;
  padding: 10px;
  max-width: 320px;
  margin: 0 auto;
  text-align: center;
}

.tombol2 {background-color: #008CBA;} /* Blue */
</style>
  <body>
    <?php if (isset($failed)) { ?>
    <div id="bad-login">Username/Password Anda Salah! | ERROR : Data User Tidak Ditemukan</div>
    <?php } ?>

    <form id="login-form" method="post" target="_self">
      <h1>Sistem Informasi UBHARA</h1>
      <center><h4>--- USER LOGIN ---</h4></center>
      <p>Silahkan login menggunakan Data User</p>
      <b><label for="user">Username</label></b>
      <input type="text" name="user" required/>
      <b><label for="password">Password</label></b>
      <input type="password" name="password" required/>
      <input type="submit" value="Sign In"/><br>
<a class="tombol tombol2" href="admin/login-admin.php" style="text-decoration: none;">Klik Disini untuk Halaman Admin Login</a>
</script>
    </form>
  </body>
</html>
