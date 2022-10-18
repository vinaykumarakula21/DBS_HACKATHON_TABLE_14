<?php
    include "connection.php";
    $pname = $_POST['pname'];
    $ptype = $_POST['ptype'];
    $price = $_POST['price'];
    $query = "insert into products values('$pname','$ptype','$price');";
    $res = mysqli_query($conn,$query);
?>