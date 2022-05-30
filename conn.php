<?php
$conn = mysqli_connect("localhost","debian-sys-maint","pJz4yId2k4cvostw","users");
if(!$conn){
    echo "connection failed" . mysqli_connect_error();
}