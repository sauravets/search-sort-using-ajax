<?php
include 'conn.php';
if (
    isset($_POST['submit']) && isset($_POST['name']) && !empty($_POST['name']) &&
    isset($_POST['email']) && !empty($_POST['email']) &&
    isset($_POST['pass']) && !empty($_POST['pass']) &&
    isset($_POST['cpass']) && !empty($_POST['cpass']) &&
    isset($_POST['gender']) && !empty($_POST['gender'])
) {

    $name = $_POST['name'];
    $email = $_POST['email'];
    $pass = $_POST['pass'];
    $cpass = $_POST['cpass'];
    $gender = $_POST['gender'];
    // $imageUpload = $_POST['imageUpload'];
    $files = $_FILES['imageUpload'];
    $filename = $files['name'];
    $fileerror = $files['error'];
    $filetmp = $files['tmp_name'];
    $fileext = explode('.', $filename);
    $filecheck = strtolower(end($fileext));
    $fileextstored = array('png', 'jpg', 'jpeg');
    if (in_array($filecheck, $fileextstored)) {
        $destinationfile = "uploads/" . $filename;
        move_uploaded_file($filetmp, $destinationfile);
    }
    $sql = "SELECT * FROM `userRegistration` WHERE email = '$email' ";
    $res = mysqli_query($conn, $sql);
    if (mysqli_num_rows($res) > 0) {
        echo '<div class="alert alert-danger" role="alert">
        Email already exist.
      </div>';
    } else {
        $sql = "INSERT INTO `userRegistration`(`name`,`email`,`pass`,`cpass`,`gender`,`imageUpload`)VALUES('$name','$email','$pass','$cpass','$gender','$destinationfile')";
        if (mysqli_query($conn, $sql)) {
            echo '<div class="alert alert-success" role="alert">
        Record Added Successfull.
      </div>';
        } else {
            echo "not inserted";
        }
    }
}
