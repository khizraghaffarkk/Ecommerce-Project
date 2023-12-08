<?php
// echo $_GET["product_id"]."<br>";
// echo $_GET["product_color"]."<br>";
// echo $_GET['quantity'];
// echo $_POST["product_id"]."<br>";
// echo $_POST["product_color"]."<br>";
// echo $_POST['quantity'];
session_start();

$makeuppid=$_POST["makeup_id"];
$makequantity=$_POST['makequantity'];

if(isset($_SESSION['makeupproductcart'])){
   $mcurrent_No=$_SESSION['makeupcounter']+1;

   $_SESSION['makeupproductcart'][$mcurrent_No]=$makeuppid;
   $_SESSION['makeproductquantity'][$mcurrent_No]=$makequantity;
   $_SESSION['makeupcounter']=$mcurrent_No;
}
else{
   $makeupproductcart=array();
   $makeproductquantity=array();
   $_SESSION['makeupproductcart'][0]=$makeuppid;
   $_SESSION['makeproductquantity'][0]=$makequantity;
   $_SESSION['makeupcounter']=0;
}
header("location:MakeupViewCart.php");
?>