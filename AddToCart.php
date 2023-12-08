<?php
// echo $_GET["product_id"]."<br>";
// echo $_GET["product_color"]."<br>";
// echo $_GET['quantity'];
// echo $_POST["product_id"]."<br>";
// echo $_POST["product_color"]."<br>";
// echo $_POST['quantity'];
session_start();

$pid=$_POST["product_id"];
$p_color=$_POST["product_color"];
$p_quantity=$_POST['quantity'];

if(isset($_SESSION['productcart'])){
   $current_No=$_SESSION['counter']+1;

   $_SESSION['productcart'][$current_No]=$pid;
   $_SESSION['productquantity'][$current_No]=$p_quantity;
   $_SESSION['counter']=$current_No;
}
else{
   $productcart=array();
   $productquantity=array();
   $_SESSION['productcart'][0]=$pid;
   $_SESSION['productquantity'][0]=$p_quantity;
   $_SESSION['counter']=0;
}
header("location:ViewCart.php");
?>