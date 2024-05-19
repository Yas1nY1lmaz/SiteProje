<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Sayfası</title>
</head>
<body>
    <h2>Login</h2>
    <form action="login_process.php" method="post">
        <label for="username">Kullanıcı Adı (Öğrenci Numarası):</label><br>
        <input type="text" id="username" name="username" required><br><br>
        <label for="password">Şifre:</label><br>
        <input type="password" id="password" name="password" required><br><br>
        <button type="submit">Giriş Yap</button>
    </form>
</body>
</html>
