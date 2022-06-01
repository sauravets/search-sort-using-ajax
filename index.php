<?php
include 'conn.php';
include 'insert.php';

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search-sort using ajax</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="script.js"></script>
</head>

<body>
    <div class="container">

    <h2 class="text-center">Please Fill To Register An Account</h2>
        <form action="index.php" method="POST" enctype="multipart/form-data">
            <div class="form-group">
                <label>Name:</label>
                <input type="text" name="name" placeholder="Enter your name" class="form-control">
            </div>
            <div class="form-group">
                <label>Email:</label>
                <input type="text" name="email" id="email" placeholder="Enter your mail" autocomplete="off" class="form-control">
                <div id="emailmsg"></div>
            </div>
            
            <div class="form-group">
                <label>Password:</label>
                <input type="password" autocomplete="new-password" name="pass" id="pwd" placeholder="Enter your password" class="form-control">
            </div>
            <div class="form-group">
                <label>Confirm Password:</label>
                <input type="password" autocomplete="new-password" name="cpass" id="cpass" placeholder="Enter your password" class="form-control">
                <div id="showErrorcPwd"></div>
            </div>
            
            <div class="form-group">
                <label>Gender:</label><br>
                <label>Male</label>
                <input type="radio" name="gender" id="male" value="male" checked><br>
                <label>Female</label>
                <input type="radio" name="gender" id="female" value="female"><br>
            </div>
            <div class="form-group">
            <input type="file" name="imageUpload" id="imageUpload">
            </div>
            <div class="form-group">
                <button type="submit" name="submit" class="btn btn-info">Submit to register</button>
               <a href="login.php"><button type="button" name="login" class="btn btn-info">Login</button></a> 
            </div>
            <br>
            
</body>

</html>