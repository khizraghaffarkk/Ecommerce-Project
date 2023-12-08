<?php

$con = mysqli_connect('localhost','root','','webproject');

extract($_POST);


// insert data
if(isset($_POST['Cname']) && isset($_POST['address']) && isset($_POST['phoneNo']) && isset($_POST['postalCode']))
{
    $query = "insert into customer_t(Customer_name,Address,Phone_no,Postal_Code) values('$Cname','$address','$phoneNo','$postalCode')";
    
    mysqli_query($con,$query);
}



?>