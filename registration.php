<?php include 'registration_function.php'; ?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <title>Registration</title>
    <link rel="stylesheet" href="style.css" />
</head>

<body>
    <form class="form" action="" method="post">
        <h1 class="login-title">Registration</h1>
        <input type="hidden" name="register">
        <input type="text" class="login-input" name="username" placeholder="Username" required />
        <input type="text" class="login-input" name="email" placeholder="Email Adress" required>
        <input type="password" class="login-input" name="password" placeholder="Password" required>
        <input type="submit" name="submit" value="Register" class="login-button">
        <p class="link"><a href="login.php">Click to Login</a></p>
    </form>
</body>

</html>