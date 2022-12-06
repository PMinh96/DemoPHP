<?php
session_start();
$prd_id = $_GET["prd_id"];
if(isset($_SESSION["cart"][$prd_id])){
    $_SESSION["cart"][$prd_id]++;
}
else{
    $_SESSION["cart"][$prd_id] = 1;
}
header("location: cart.php");  
// location phải sát dấu ngoặc để chuyển hướng
// session_start();
// $prd_id = $_GET["prd_id"];
// if(isset($_SESSION["cart"][$prd_id])){
//     $_SESSION["cart"][$prd_id]++;
// }
// else{
//     $_SESSION["cart"][$prd_id] = 1;
// }
// header("location: cart.php");
?>
