<?php 
Class Query
{
    public $conn;

    function __construct()
    {
        $this->conn = mysqli_connect('localhost','debian-sys-maint','pJz4yId2k4cvostw','users');
        if($this->conn){
            return $this->conn;
            // echo "connected";
        }
    }
    
    public function insertdata($post){
        if(isset($_POST['submit'])){
            $name = $_POST['name'];
            $email = $_POST['email'];
            $salary = $_POST['salary'];
            $city = $_POST['city'];
            $sql = "INSERT INTO `user`(`name`,`email`,`salary`,`city`) VALUES ('$name','$email','$salary','$city')";
            $query = $this->conn->query($sql);
            if($query){
                echo 'record insert successfully';
            }
            else{
                echo 'failed to insert';
            }
        }
    }
    public function selectdata(){
        $sql = "SELECT * FROM `user`";
        $result = $this->conn->query($sql);
        if($result->num_rows>0){
            while($row = $result->fetch_assoc()){
                $data[] = $row;
            }
            return $data;
        } 
    }

}
$obj = new Query();
?>