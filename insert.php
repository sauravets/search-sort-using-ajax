<?php
include 'conn.php';
if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $pass = $_POST['pass'];
    $cpass = $_POST['cpass'];
    $gender = $_POST['gender'];
    $imageUpload = $_POST['imageUpload'];
    $sql = "INSERT INTO `userRegistration`(`name`,`email`,`pass`,`cpass`,`gender`,`imageUpload`)VALUES('$name','$email','$pass','$cpass','$gender','$imageUpload')";
    if (mysqli_query($conn, $sql)) {
        echo "insert data successfully";
    }
    else
    {
        echo "not inserted";
    }
}
