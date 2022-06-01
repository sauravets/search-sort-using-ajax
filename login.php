<?php
include 'conn.php';
session_start();

if(isset($_REQUEST['login'])){
    $email = $_REQUEST['email'];
    $pass = $_REQUEST['pass'];
    $sql = "SELECT * FROM userRegistration WHERE email = '$email' && pass = '$pass' " ;
    $res = mysqli_query($conn,$sql);
    if(mysqli_num_rows($res)>0){
        $_SESSION['email'] = $email;
    //    echo "login successfully";
    header('location:welcome.php');
    }
    else{
        echo '<div class="alert alert-danger" role="alert">
        Your email and password is incorrect.
      </div>';
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
</head>
<body>
    <div class="container">
    <h2 class="text-center">Welcome To The Login Page</h2>
        <form action="login.php" method="POST">
        <div class="form-group">
                <label>Email:</label>
                <input type="text" name="email" placeholder="Enter your mail" autocomplete="off" class="form-control"><br>
            </div>
            <div class="form-group">
                <label>Password:</label>
                <input type="password" autocomplete="new-password" name="pass" placeholder="Enter your password" class="form-control"><br>
            </div>
            <div class="form-group">
                <button type="submit" name="login" class="btn btn-info">Login</button>               
            </div>
    </div>
        </form>

</body>
</html>