<?php
include 'conn.php';
$obj->insertdata($post);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Searching and Sorting</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>
    <div class="container">
        <h2 class="text-center">Insert Employee Information</h2>
        <form action="index.php" method="POST">
            <div class="form-group">
                <label>Name:</label>
                <input type="text" name="name" placeholder="Enter your name" class="form-control">
            </div>
            <div class="form-group">
                <label>Email:</label>
                <input type="text" name="email" placeholder="Enter your mail" class="form-control">
            </div>
            <div class="form-group">
                <label>Salary:</label>
                <input type="text" name="salary" placeholder="Enter your salary" class="form-control">
            </div>
            <div class="form-group">
                <label>City:</label>
                <input type="text" name="city" placeholder="Enter your city" class="form-control">
            </div>
            <div class="form-group">
                <button type="submit" name="submit" class="btn btn-info">Submit</button>
            </div>
            <div class="form-group">
                <label>Searching:</label>
                <input type="text" name="search" class="form-control" placeholder="search from table">
            </div>
        </form>
        <h2 class="text-center">Display Employee Information</h2>
        <table class="table table-bordered">
            <thead>
                <tr class="bg-primary text-center">
                    <th>S no.</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Salary</th>
                    <th>City</th>
                </tr>
            </thead>
        </table>
    </div>
</body>

</html>