<?php
// (A) START SESSION
session_start();

// (B) HANDLE LOGIN
if (isset($_POST["user"]) && !isset($_SESSION["user"])) {
  // (B1) USERS & PASSWORDS
   $users = [
    "user" => "user",
    "user1" => "user1",
    "user123" => "user123",
  ];

  // (B2) CHECK & VERIFY
  if (isset($users[$_POST["user"]])) {
    if ($users[$_POST["user"]] == $_POST["password"]) {
      $_SESSION["user"] = $_POST["user"];
    }
  }

  // (B3) FAILED LOGIN FLAG
  if (!isset($_SESSION["user"])) { $failed = true; }
}

// (C) REDIRECT USER KE HALAMAN INDEX-USER JIKA SUKSES LOGIN
if (isset($_SESSION["user"])) {
  header("Location: index-user.php"); // SET YOUR OWN HOME PAGE!
  exit();
}
