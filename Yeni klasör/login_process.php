<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // Kullanıcı adı ve şifre alınır
  $username = $_POST["username"];
  $password = $_POST["password"];
  session_start();
  $_SESSION['kullanici_adi'] = $_POST["username"];
  // Kullanıcı adının mail adresi olup olmadığı kontrol edilir
  if (!filter_var($username, FILTER_VALIDATE_EMAIL)) {
    header("Location: login.html");
    exit;
  }

  // Kullanıcı adından domain kısmı çıkarılır
  $username_parts = explode("@", $username);
  $username_without_domain = $username_parts[0];

  // Şifre ve kullanıcı adı kontrol edilir
  if ($password == $username_without_domain) {
    // Giriş başarılıysa hoşgeldin mesajı gösterilir
    echo "Hoşgeldiniz $username_without_domain";
    header("Location: Main.php");
    exit;
  } else {
    // Giriş başarısızsa kullanıcı login sayfasına geri yönlendirilir
    header("Location: login.html");
    exit;
  }
} else {
  // POST isteği değilse kullanıcı login sayfasına geri yönlendirilir
  header("Location: login.html");
  exit;
}
?>
