<?php
include 'conn.php';

    $columnName = $_POST['columnName'];
    $sort = $_POST['sort'];
    $query = "SELECT * FROM user ORDER BY ".$columnName." ".$sort." ";
    $result = mysqli_query($conn, $query);
    if (mysqli_num_rows($result) > 0) { ?>
        <?php
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

    <?php } else {
        echo "<h3 class = 'text-danger text-center mt-3'>No Result Found</h3>";
    }
    ?>
