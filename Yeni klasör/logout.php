<?php
session_start();

// Kullanıcı adını boş bir değere eşitleme
$_SESSION['kullanici_adi'] = "";

// Başka bir sayfaya yönlendirme (opsiyonel)
header("Location: Login.html");
exit();
?>