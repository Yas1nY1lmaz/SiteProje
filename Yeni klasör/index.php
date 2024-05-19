<?php
include 'class.php';
$url = "https://www.tff.org/Default.aspx?pageId=198&kulupID=51";

$html = str_get_html(file_get_contents($url));

$data = $html->find('.s-table');
?>


<?php
foreach($data as $datacek){
?>

<!DOCTYPE html>
<html>
<head>
    <title>Yazı Boyutunu Değiştirme</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="indexcss.css">
</head>
<body>
<div class="container">
        <div class="alert alert-primary" role="alert">
            Yasin Yılmaz
        </div>
        <button id="Anasayfa" type="button" class="btn btn-custom2">Ana Sayfa</button>
        <button id="Sehrim" type="button" class="btn btn-custom1">Şehrim</button>
        <button id="Skor" type="button" class="btn btn-custom">Canlı Puan Durumu</button>
    </div>
    <br><br>
    <p>Trendyol Süper Lig</p>
</body>
<script>        document.getElementById("Anasayfa").addEventListener("click", function() {
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
        });</script>
</html>
<?php echo $datacek->find(".griBG2",0)->plaintext;  ?><br>
<?php echo $datacek->find(".griBG",1)->plaintext; ?><br>
<?php echo $datacek->find(".griBG2",9)->plaintext; ?><br>
<?php echo $datacek->find(".griBG",10)->plaintext; ?><br>
<?php echo $datacek->find(".griBG2",18)->plaintext; ?><br>
<?php echo $datacek->find(".griBG",19)->plaintext; ?><br>
<?php echo $datacek->find(".griBG2",27)->plaintext; ?><br>
<?php echo $datacek->find(".griBG",28)->plaintext; ?><br>
<?php echo $datacek->find(".griBG2",36)->plaintext; ?><br>
<?php echo $datacek->find(".griBG",37)->plaintext; ?><br>
<?php echo $datacek->find(".griBG2",45)->plaintext; ?><br>
<?php echo $datacek->find(".griBG",46)->plaintext; ?><br>
<?php echo $datacek->find(".griBG2",54)->plaintext; ?><br>
<?php echo $datacek->find(".griBG",55)->plaintext; ?><br>
<?php echo $datacek->find(".griBG2",63)->plaintext; ?><br>
<?php echo $datacek->find(".griBG",64)->plaintext; ?><br>
<?php echo $datacek->find(".griBG2",72)->plaintext; ?><br>
<?php echo $datacek->find(".griBG",73)->plaintext; ?><br>
<?php echo $datacek->find(".griBG2",81)->plaintext; ?><br>
<?php echo $datacek->find(".griBG",82)->plaintext; ?><br>


<?php
}
?>