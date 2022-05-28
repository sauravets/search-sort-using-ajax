<?php 
include 'conn.php';

if(isset($_POST['input'])){
    $input = $_POST['input'];
    $query = "SELECT * FROM user WHERE name LIKE '{$input}%' OR email LIKE '{$input}%' OR salary LIKE '{$input}%' OR city LIKE '{$input}%' ";
    $result = mysqli_query($conn,$query);
    if(mysqli_num_rows($result)>0){ ?>
     <table class="table table-bordered">
            <thead class="thead-dark">
                <tr class="bg-primary text-center">
                    <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Salary</th>
                    <th>City</th>
                </tr>
            </thead>
            <tbody>
                <?php
                while($row = mysqli_fetch_assoc($result)){
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
                <?php }?>
            </tbody>
     </table>
     
    <?php }

         else{echo "<h3 class = 'text-danger text-center mt-3'>No Result Found</h3>";
         }            
    ?>
      <?php }?>
    
 
