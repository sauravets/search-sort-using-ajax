<?php 
Class Query
{
    public $conn;

    function __construct()
    {
        $this->conn = mysqli_connect('localhost','debian-sys-maint','8TlNXNgZ7Z7USUNp','testing');
        if($this->conn){
            return $this->conn;
        }
    }
public function insertdata($post){
    if(isset($_POST['submit'])){
        $name = $_POST['name'];
        $email = $_POST['email'];
        $salary = $_POST['salary'];
        $city = $_POST['city'];
        $sql = "INSERT INTO `Employee`(`name`,`email`,`salary`,`city`) VALUES ('$name','$email','$salary','$city')";
        $query = $this->conn->query($sql);
        if($query){
            echo 'record insert successfully';
        }
        else{
            echo 'failed to insert';
        }
    }
}
}
?>