<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Yasin Yilmaz</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="Maincss.css">
</head>
<body>
    <div class="container">
        <div class="alert alert-primary" role="alert">
            Yasin Yılmaz 
        </div>
        <button id="Anasayfa" type="button" class="btn btn-custom2">Ana Sayfa</button>
        <button id="Sehrim" type="button" class="btn btn-custom1">Şehrim</button>
        <button id="Skor" type="button" class="btn btn-custom">Canlı Puan Durumu</button>
        <button id="Cıkıs" type="button" class="btn btn-custom3">Çıkış Yap</button>
    </div>
    <br>
    <div class="container"><?php
session_start();
$kullanici_adi = $_SESSION['kullanici_adi'];
echo  $kullanici_adi;
// Örnek kontrol
if(empty($kullanici_adi)) {
    // Kullanıcı adı boşsa, tekrar giriş sayfasına yönlendir
    header("Location: login.html");
    exit; // Yönlendirme yapıldıktan sonra betik çalışmasını durdurmak için
}
?></div>
   <br>
    <div class= "centered-text ">
        <section>
            <h2>Kişisel Bilgiler</h2>
            <p><strong>Ad Soyad :</strong> Yasin Yılmaz</p>
            <p><strong>Doğum Tarihi:</strong> 8 Mayıs 2005</p>
            <p><strong>Adres:</strong> Türkiye,Sakarya,Erenler,Bağlar mahallesi,7084.sokak no 2 kat 2 </p>
            <p><strong>Telefon:</strong> 05443650876</p>
            <p><strong>E-posta:</strong> 1yasinylmazz@gmail.com</p>
        </section>
    
        <section>
            <h2>Eğitim Bilgileri</h2>
            <article>
                <h3>Lisans</h3>
                <p><strong>İlkokul:</strong> <a href="https://sakaryamehmetakifersoyio.meb.k12.tr" target="_blank">Mehmet Akif Ersot İlkokulu</a></p>
                <p><strong>Ortaokul:</strong> <a href="https://hizirtepe.meb.k12.tr" target="_blank">Hızırtepe Ortaokulu</a></p>
                <p><strong>Lise :</strong> <a href="https://adal.meb.k12.tr" target="_blank">Ali Dilmen Anadolu Lisesi</a></p>
                <p><strong>Üniversite :</strong> <a href="https://www.sakarya.edu.tr" target="_blank">Sakarya Üniversitesi</a></p>
                <p><strong>Bölüm:</strong> Bilgisayar Mühendisliği</p>
                <p><strong>Yıl:</strong> 2023 - ? </p>
            </article>
        </section>
        <h1 > <b >Hobilerim</b> </h1>
    </div>
    <img src="resim1.jpg" alt="Futbol Resim " width="370" height="200">
    <img src="resim2.jpg" alt="Oyun Oynayan Kişi Resmi" width="370" height="200">
    <img src="resim3.jpg" alt="Dizi İzleyen Kişi Resmi" width="370" height="200">
    <img src="resim4.jpg" alt="Spor yapan  Kişi Resmi" width="370" height="200">
    <h3> Futbol Oynamak &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Oyun Oynamak &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Spor Yapmak&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Dizi İzlemek</h3>
    <header>
        <div class= "centered-text ">
            <h1 > <b >İletişim </b> </h1>
            <h3>Telefon Numarası: 0544 365 08 76</h3>
        <h3><a href="https://www.instagram.com/yyasinyilmz/" target="_blank">Instagram</a></h3>
        <h3> <a href="mailto:1yasinylmazz@gmail.com"target="_blank" >E-posta</a></h3>
        <h3>1yasinylmazz@gmail.com</h3>
        </div>
        <div class="container">
    <h2>İletişim Formu</h2>
    <form id="contactForm">
    E-mail:<input type="text" value="<?php echo  $kullanici_adi;?>" readonly>
<br>
        <label for="message">Mesajınız</label>
        <textarea id="message" name="message" placeholder="Mesajınız.." style="height:200px"></textarea>
        <input type="submit" value="Gönder">
        <input type="button" value="Temizle" onclick="temizle()">
    </form>
</div>
    </header>
    <script>
        // Butona tıklama olayını dinleyen JavaScript fonksiyonu
        document.getElementById("Anasayfa").addEventListener("click", function() {
          // Yönlendirme işlemi
          window.location.href = "Main.php";
        });
        document.getElementById("Sehrim").addEventListener("click", function() {
          // Yönlendirme işlemi
          window.location.href = "Şehrim.html";
        });
        document.getElementById("Skor").addEventListener("click", function() {
          // Yönlendirme işlemi
          window.location.href = "index.php";
        });
        document.getElementById("Cıkıs").addEventListener("click", function() {
          // Yönlendirme işlemi
          window.location.href = "logout.php";
        });
        function temizle() {
        // Formdaki tüm input ve textarea alanlarını temizler
        document.getElementById("contactForm").reset();
    }
    document.getElementById("contactForm").addEventListener("submit", function(event){
        event.preventDefault(); // Formun normal submit işlemini engeller
        // Burada e-postayı gönderme işlemini yapabilirsiniz, örneğin Ajax kullanarak
        // Şu anda sadece formu temizliyoruz
        temizle();
        alert("Form gönderildi!");
    });
      </script>
</body>
</html>
