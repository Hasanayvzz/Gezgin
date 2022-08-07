<html lang="en">
<head>
<link rel="stylesheet" href="style.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div class="login">
        <div class="login screen">

            <div class="app-title">
                <h1>Kayit Ol</h1>
            </div>
            <form action="islem.php">
            <div class="login-form" method = "post">
                <div class="control-group">
                    <input type="text" name="username" class="login-field" placeholder="Kullanıcı Adı" id="login-name">
                    <label class="login-field-icon fui-user" for="login-name"></label>
                </div>
                <div class="control-group">
                    <input type="password" name="password" class="login-field" placeholder="Şifre" id="login-pass">
                    <label class="login-field-icon fui-user" for="login-pass"></label>

                </div>
                <div class="control-group">
                    <input type="password" name="password-again" class="login-field" placeholder="Şifrenizi doğrulayın" id="login-pass">
                    <label class="login-field-icon fui-user" for="login-pass"></label>

                </div>
                <button type ="button" onclick = "location.href='login.php'" class="btn-btn-primary btn-large btn-block"> Giriş Yap</button>
            </div>
            </form>
            <a href="kayit.php">     <button type ="" name ="kayit" class="btn-btn-primary btn-large btn-block"> Giriş Yap</button>
</a>
        </div>
</div>
</body>
</html>