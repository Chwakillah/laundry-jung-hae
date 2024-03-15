<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Lupa Sandi</title>
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
    <section id="reset-password">
    <div class="container-reset-password">
    <h2>RESET PASSWORD</h2>
    <form method="post" action="function.php">
        <label for="email"></label><br>
        <input type="email" name="email" id="email" required placeholder="Email" class="input-reset"><br>

        <label for="newPassword"></label><br>
        <input type="password" name="newPassword" id="newPassword" placeholder="New Password" required class="input-reset"><br>

        <label for="confirmPassword"></label><br>
        <input type="password" name="confirmPassword" id="confirmPassword" required placeholder="Confirm Password" class="input-reset"><br>

        <button type="submit" name="updatePassword" class="button-reset">RESET PASSWORD</button>
    </form>
    </div>
    </section>
</body>
