<?php
// (A) START SESSION
// session_start();

// (B) LOGOUT REQUEST
if (isset($_POST["logout"])) { unset($_SESSION["user"]); }

// (C) REDIRECT KE HALAMAN LOGIN JIKA BELUM LOGIN
if (!isset($_SESSION["user"])) {
  header("Location: message-user.php");
  exit();
}
