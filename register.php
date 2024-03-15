<?php
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Register</title>
<link href="
    https://cdn.jsdelivr.net/npm/css-reset-and-normalize@2.3.6/css/reset-and-normalize.min.css
    " rel="stylesheet">
    <link
    href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap"
    rel="stylesheet"
    />
    <link rel="stylesheet" href="style.css">
</head>
<body>
<section id="register">
    
    <div class="container-register">
        <div class="form-register">
            <h2>Sign Up</h2>
            <form action="function.php" method="POST">
                <label for="email"></label><br>
                <input type="email" id="email" name="email" required placeholder="Email"  class="input-register"><br>
                <label for="password"></label><br>
                <input type="password" id="password" name="password" required placeholder="Password" class="input-register"><br><br>
                <button type="submit" name="register" class="button-signup">SIGN UP</button>
            </form>
        </div>
    </div>
    <div class="background-right">
    <div class="form-gambar">
            <img src="aset/handuk.svg" alt="handuk">
        </div>
    </div>
</section>
</body>
</html>
