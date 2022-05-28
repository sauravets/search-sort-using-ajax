<?php
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
        <h2 class="text-center">Employee Information</h2>
        <form action="index.php" method="POST">
        <div class="form-group">
                <label>Searching:</label>
                <input type="text" name="search" id="search" class="form-control" autocomplete="off" placeholder="search from table">
            </div>
        </form>
        <div id="sorting_reuslt">
            <select name="fetch_val" id="fetch_val">
                <option value="" disabled="" selected="">select sorting</option>
                <option value="ascending">ascending</option>
                <option value="descending">descending</option>
            </select>
        </div>
        <div id="search_result"></div>
        
    </div>
</body>
</html>