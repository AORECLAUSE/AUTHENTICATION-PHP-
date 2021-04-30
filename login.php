<?php include('server.php') ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>LOGIN</title>
  </head>
  <body>
    <div class="container">
      <h2>Login</h2>
    </div>
    <form action="login.php" method="post">
        <div>
            <label form="username">USERNAME</label>
            <input type="text" name="username" required>
        </div>
        <div>
            <label form="password">PASSWORD</label>
            <input type="password" name="password_1" required>
        </div>
            <button type="submit" name="login_user">LOG IN</button>
          <p>Not a user <a href="reg.php"><b>Sign up</b></a></p>
    </form>
  </body>
</html>
