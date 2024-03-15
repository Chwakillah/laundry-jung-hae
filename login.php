<?php
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Login Page</title>
    <link href="
    https://cdn.jsdelivr.net/npm/css-reset-and-normalize@2.3.6/css/reset-and-normalize.min.css
    " rel="stylesheet">
    <link
    href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap"
    rel="stylesheet"/>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div>
    <section id="login">
        <img src="aset/Rectangle 8.svg" alt="" class="border-pink">
        <img src="aset/keranjang.svg" alt="">
        <div class="container-login">
            <h1>Login</h1>
            <form action="function.php" method="post">
                <div class="email-pw">
                    <input type="email" id="email" name="email" required placeholder="Email"><br>
                    <input type="password" id="password" name="password" required placeholder="Password"><br><br>
                </div>
                <p><a href="lupasandi.php">Lupa kata sandi?</a></p>
                <div class="login-signup">
                    <button type="submit" name="login" class="btn-login">LOGIN</button>
                    <a href="register.php">SIGN UP</a>
                </div>
            </form>
        </div>
    </div>
    </section>
</body>
</html>
