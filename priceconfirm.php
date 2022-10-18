<?php
include "connection.php";
$traderprice = $_REQUEST['traderprice'];
$pname  = $_REQUEST['pid1'];
$query="insert into pricedetails values ('$pname','$traderprice')";
 $result=mysqli_query($conn,$query);
?>
    