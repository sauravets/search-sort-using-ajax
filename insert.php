<?php
include 'conn.php';
session_start();
if (
    isset($_POST['submit']) && isset($_POST['name']) && !empty($_POST['name']) &&
    isset($_POST['email']) && !empty($_POST['email']) &&
    isset($_POST['pass']) && !empty($_POST['pass']) &&
    isset($_POST['gender']) && !empty($_POST['gender']
    )&&
    isset($_FILES['imageUpload']['name']) && !empty($_FILES['imageUpload']['name'])
) {

    $name = $_POST['name'];
    $email = $_POST['email'];
    $pass = $_POST['pass'];
    $pass = md5($pass);
    $gender = $_POST['gender'];
    // $imageUpload = $_POST['imageUpload'];
    // $files = $_FILES['imageUpload'];
    // $filename = $files['name'];
    // $fileerror = $files['error'];
    // $filetmp = $files['tmp_name'];
    // $fileext = explode('.', $filename);
    // $filecheck = strtolower(end($fileext));
    // $fileextstored = array('png', 'jpg', 'jpeg');
    // if (in_array($filecheck, $fileextstored)) {
    //     $destinationfile = 'uploads/' .$filename;
    //     move_uploaded_file($filetmp, $destinationfile);
    // }



    $filename = $_FILES['imageUpload']['name'];
	$filetmpname = $_FILES['imageUpload']['tmp_name'];
	$destpath = "upload/".time().$filename;
    move_uploaded_file($filetmpname, $destpath);
    print_r($destpath);
    $sql = "SELECT * FROM `userRegistration` WHERE email = '$email' ";
    $res = mysqli_query($conn, $sql);
    if (mysqli_num_rows($res) > 0) {
        echo '<div class="alert alert-danger" role="alert">
        Email already exist.
      </div>';
    } else {
        $sql = "INSERT INTO `userRegistration`(`name`,`email`,`pass`,`gender`,`imageUpload`)VALUES('$name','$email','$pass','$gender','$destpath')";
        if (mysqli_query($conn, $sql)) {
            echo '<div class="alert alert-success" role="alert">
        Record Added Successfull.
      </div>';
        } else {
            echo "not inserted";
        }
    }
}
