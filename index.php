<?php
include 'conn.php';

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

        <h2 class="text-center">Employee Information</h2>
        <form action="index.php" method="POST">
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
                <tr class="bg-primary text-center" >
                    <th id="table_head">ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Salary</th>
                    <th>City</th>
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