<?php include('server.php') ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>REGISTRATION</title>
  </head>
  <body>
    <div class="container">
      <h2>Register</h2>
    </div>
    <form action="reg.php" method="post">
        <div>
            <label form="username">USERNAME</label>
            <input type="text" name="username" required>
        </div>
        <div>
            <label form="email">EMAIL</label>
            <input type="email" name="email" required>
        </div>
        <div>
            <label form="password">PASSWORD</label>
            <input type="password" name="password_1" required>
        </div>
        <div>
            <label form="password">confirm password</label>
            <input type="password" name="password_2" required>
        </div>
            <button type="submit" name="reg_user">SUBMIT</button>
          <p>Already a user<a href="login.php"><b>Login</b></a></p>
    </form>
  </body>
</html>
