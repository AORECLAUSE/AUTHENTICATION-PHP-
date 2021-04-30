<?php include('server.php') ?>
<?php
if(isset($_POST['login_user'])) {
    $username = mysqli_real_escape_string($db,$_POST["username"]);
    $password = mysqli_real_escape_string($db,$_POST["password_1"]);
    if(empty($username)) {
        array_push($errors, "Username is Reqiured");
    }
    if(empty($password)) {
        array_push($errors, "Password is Reqiured");
    }
    if (count($errors)== 0) {
        $password = md5($password);

        $query = "SELECT * from user WHERE username = '$username' and password = '$password'";
        $result = mysqli_query($db , $query);

        if(mysqli_num_rows($results)){
            $_SESSION['username'] = $username;
            $_SESSION['success'] = "Logged in successfully";
            header("location : index.php");
        }
        else {
            array_push($error, "Wrong username/password combination. Please try again");
        }
    }
  }


  ?>