<?php
session_start();
////variables

$username = "";
$email = "";

$errors = array();
//db
$db = mysqli_connect('localhost','root','','Practice') or die("could not connect to database");

//register users

$username = mysqli_real_escape_string($db,$_POST["username"]);
$email = mysqli_real_escape_string($db,$_POST["email"]);
$password_1 = mysqli_real_escape_string($db,$_POST["password_1"]);
$password_2 = mysqli_real_escape_string($db,$_POST["password_2"]);

//form validation

if(empty($username)) array_push($errors, "Username is required");
if(empty($email)) array_push($errors, "Email is required");
if(empty($password_1)) array_push($errors, "Password is required");
if($password_1 != $password_2) array_push($errors, "Password dont match");


//check for existing user
 $user_check_query = "SELECT * from user WHERE username = '$username' or email = '$email' LIMIT 1";

 $result = mysqli_query($db, $user_check_query);
 $user = mysqli_fetch_assoc($result);
  if($user) {
      if ($user["username"] === $username) array_push($errors, "Username already exists");
      if ($user["email"] === $email) array_push($errors, "Email already exists");

  }
  //register 
  print_r($errors);
  if (count($errors) == 0){
      $password = md5($password_1); //encypt the password
      $query = "INSERT INTO user (username , email , password) VALUES ('$username','$email', '$password')" ;
      mysqli_query($db,$query);
      $_SESSION["username"] = $username;
      $_SESSION["success"] = "You are now logged In";
      header('location : index.php');
  }

if(isset($_POST['login_user'])) {
    $username = mysqli_real_escape_string($db,$_POST["username"]);
    $password = mysqli_real_escape_string($db,$_POST["password_1"]);
    print_r($errors);
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