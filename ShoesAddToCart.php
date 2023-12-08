<?php
// echo $_GET["product_id"]."<br>";
// echo $_GET["product_color"]."<br>";
// echo $_GET['quantity'];
// echo $_POST["product_id"]."<br>";
// echo $_POST["product_color"]."<br>";
// echo $_POST['quantity'];
session_start();

$shoes_pid=$_POST["shoes_id"];
$p_color=$_POST["shoes_des"];
$shoes_quantity=$_POST['shoesquantity'];

if(isset($_SESSION['shoesproductcart'])){
   $shoescurrent_No=$_SESSION['shoescount']+1;

   $_SESSION['shoesproductcart'][$shoescurrent_No]=$shoes_pid;
   $_SESSION['shoesproductquantity'][$shoescurrent_No]=$shoes_quantity;
   $_SESSION['shoescount']=$shoescurrent_No;
}
else{
   $shoesproductcart=array();
   $shoesproductquantity=array();
   $_SESSION['shoesproductcart'][0]=$shoes_pid;
   $_SESSION['shoesproductquantity'][0]=$shoes_quantity;
   $_SESSION['shoescount']=0;
}
// echo "<pre>";
// print_r($_SESSION);
header("location:ShoesViewCart.php");
?>