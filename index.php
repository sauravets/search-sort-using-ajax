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
<style>
    th {
        cursor: pointer;
    }

    table {
        border-collapse: separate;
    }
</style>

<body>
    <div class="container">

    <h2 class="text-center">Please Fill To Register An Account</h2>
        <form action="index.php" method="POST" enctype="multipart/form-data">
            <div class="form-group">
                <label>Name:</label>
                <input type="text" name="name" placeholder="Enter your name" class="form-control"><br>
            </div>
            <div class="form-group">
                <label>Email:</label>
                <input type="text" name="email" placeholder="Enter your mail" autocomplete="off" class="form-control"><br>
            </div>
            <div class="form-group">
                <label>Password:</label>
                <input type="password" autocomplete="new-password" name="pass" placeholder="Enter your password" class="form-control"><br>
            </div>
            <div class="form-group">
                <label>Confirm Password:</label>
                <input type="password" autocomplete="new-password" name="cpass" placeholder="Enter your password" class="form-control"><br>
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
            <h2 class="text-center">Employee Information</h2>
            <div class="form-group">
                <label>Searching:</label>
                <input type="text" name="search" id="search" class="form-control" autocomplete="off" placeholder="search from table">
            </div>
        </form>
        <br>
       
        <input type='hidden' id='sort' value='asc'>
        <h3 class="text-primary text-center">Click Column Heading For Sorting Table Data</h3><br>
        <table class="table table-bordered" id="empTable">
            <thead class="thead-dark">
                <tr class="bg-primary text-center">
                    <th><a class="column_sort" href="#"> ID</a></th>
                    <th class="column_sort">Name</th>
                    <th class="column_sort">Email</th>
                    <th class="column_sort">Salary</th>
                    <th class="column_sort"> City</th>
                </tr>
            </thead>
            <tbody id="tbody">
                <?php
                $sql = "SELECT * FROM user ";
                $result = mysqli_query($conn, $sql);
                while ($row = mysqli_fetch_assoc($result)) {
                    $id = $row['ID'];
                    $name = $row['name'];
                    $email = $row['email'];
                    $salary = $row['salary'];
                    $city = $row['city'];

                ?>
                    <tr class="text-center">
                        <td><?php echo $id; ?></td>
                        <td><?php echo $name; ?></td>
                        <td><?php echo $email; ?></td>
                        <td><?php echo $salary; ?></td>
                        <td><?php echo $city; ?></td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
        <!-- <div id="sorting_reuslt">
            <select name="fetch_val" id="fetch_val">
                <option value="" disabled="" selected="">select sorting</option>
                <option value="ascending">ascending</option>
                <option value="descending">descending</option>
            </select>
        </div> -->
        <div id="search_result"></div>

    </div>
    <!-- <script>
        $(document).ready(function() {
            $(".table_head").click(function() {
                sortTable(columnName);
            });
        });
    </script> -->
</body>

</html>