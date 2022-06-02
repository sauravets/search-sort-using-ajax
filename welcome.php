<?php 
include 'conn.php';
session_start();
if(!isset($_SESSION['email'])){
    echo "you are logged out";
header('location:login.php');
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome To Login Page</title>
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
    .img_user{
        height: 60px;
        width: 60px;
        border-radius: 30px;
    }
</style>

<body>
<nav class="navbar navbar-expand-lg navbar-light bg-dark">
  <a class="navbar-brand text-primary" href="#">Navbar</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link text-primary" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
    </ul>
    <!-- <ul class="navbar-nav mr-auto"> -->
      <div class="nav-item active">
        <a class="nav-link text-success" href="">HELLO <strong><?php echo $_SESSION['name'];?> </strong> <span class="sr-only">(current)</span></a>
</div>
    <!-- </ul> -->
    <div class="dropdown">
  <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-expanded="false">
  <img class="img_user" src="<?php echo $_SESSION['imageUpload'];?>" alt="">
  </button>
  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
    <a class="dropdown-item" href="logout.php">Logout</a>
  </div>
</div>
  </div>
</nav>
    <div class="container">
    <h1 class="text-center text-primary">Welcome To Login Page</h1><br>
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
        <div id="search_result"></div>
    </div>
    </div>
    
</body>
</html>