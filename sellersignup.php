<?php
    include "connection.php";
    $name = $_POST['name'];
    $email = $_POST['email'];
    $mobilenumber = $_POST['mobilenumber'];
    $password = $_POST['password'];
    $query = "insert into sellerlogindetails values('$name','$email','$mobilenumber','$password');";
    $res = mysqli_query($conn,$query);
?>