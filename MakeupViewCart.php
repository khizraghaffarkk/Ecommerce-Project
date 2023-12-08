<?php
session_start();

// echo "<pre>";
// print_r($_SESSION);

if(isset($_GET['id'])){
    $id=$_GET['id'];
    unset($_SESSION['makeupproductcart'][$id]);
    unset($_SESSION['makeproductquantity'][$id]);
}
if(isset($_SESSION['makeupproductcart']) && !empty($_SESSION['makeupproductcart'])){
    $grandtotal=array();?>
       
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <!-- Bootsrap-CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <!-- Font-Awesome -->
        <script src="https://kit.fontawesome.com/5ef59452a5.js" crossorigin="anonymous"></script>
        <!-- Google Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Ubuntu:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&display=swap" rel="stylesheet">
        <!-- Custom CSS -->
        <link rel="stylesheet" href="CSS Files/UniPstyle.css">
        <!-- Animation CSS -->
        <link rel="stylesheet" href="animate.css-master/animate.min.css">
        <!-- LightBox CSS -->
        <link rel="stylesheet" href="CSS Files/lightbox.min.css">
        <!-- LightBox JQuery -->
        <script src="JQuery LightBox/lightbox-plus-jquery.min.js"></script>
        <!-- Bootsnav CSS -->
        <link rel="stylesheet" href="CSS Files/bootsnav.css">
        <!-- Bootsnav JS -->
        <script src="Wow File/bootsnav.js"></script>
        <!-- Hover CSS -->
        <link rel="stylesheet" href="CSS Files/hover-min.css">
        <title>Attraction</title>
    </head>
    <body>
      <!-- Start Navbar -->
      <nav class="navbar navbar-expand-sm navbar-dark fixed-top pl-5 pt-4 pb-4">
         <a href="UniProject.html" class="navbar-brand">ShopCity</a>
         <span class="navbar-text">Go and Enjoy Life</span>
         <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#myMenu">
           <span class="navbar-toggler-icon"></span>
         </button>
         <div class="collapse navbar-collapse" id="myMenu">
            <ul class="navbar-nav pl-5 custom-nav custom-carets">
               <li class="nav-item pr-3"><a href="UniProject.html" class="nav-link">Home</a></li>
              <!-- Start Gents Dropdown -->   
               <li class="nav-item pr-3 dropdown">
                 <a href="#" class="nav-link dropdown-toggle"  data-toggle="dropdown">Gents</a>
                 <div class="dropdown-menu animated flipInX">
                 <a class="dropdown-item hvr-hang" href="clothes/clothes.html">Shirts</a>
                 <a class="dropdown-item hvr-hang" href="#">Kurta</a>
                 <a class="dropdown-item hvr-hang" href="#">Sweater</a>
                 <a class="dropdown-item hvr-hang" href="#">Men's Suit</a>
                 </div>
               </li>
              <!-- End Gents Dropdown -->
              <!-- Start Women Dropdown -->
               <li class="nav-item pr-3 dropdown">
                 <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Women</a>
                 <div class="dropdown-menu animated flipInX">
                   <a href="clothes/clothes.html" class="dropdown-item hvr-hang">Suits</a>
                   <a href="#" class="dropdown-item hvr-hang">Shwals</a>
                   <a href="#" class="dropdown-item hvr-hang">Sweters</a>
                   <a href="#" class="dropdown-item hvr-hang">Bridal Dresses</a>
                 </div>
               </li>
              <!-- End Women Dropdown --> 
               <li class="nav-item pr-3 dropdown">
                 <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">MakeUp</a>
                 <div class="dropdown-menu animated flipInX">
                  <a href="Makeup.php" class="dropdown-item hvr-hang">MakeUp items</a>
                  <a href="#" class="dropdown-item hvr-hang">Eye Lashes</a>
                  <a href="#" class="dropdown-item hvr-hang">Brushes</a>
                  <a href="#" class="dropdown-item hvr-hang">Stick</a>
                 </div>
               </li>
               <li class="nav-item pr-3 dropdown">
                 <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Shoes</a>
                 <div class="dropdown-menu animated flipInX">
                  <a href="Shoes.php" class="dropdown-item hvr-hang">Sneakers</a>
                  <a href="#" class="dropdown-item hvr-hang">Heels</a>
                  <a href="#" class="dropdown-item hvr-hang">Canvas</a>
                  <a href="#" class="dropdown-item hvr-hang">Trainers</a>
                 </div>
               </li>
               <li class="nav-item pr-3"><a href="#team" class="nav-link">Team</a></li>
               <li class="nav-item pr-3"><a href="#contact" class="nav-link">Contact</a></li>
               
               <!--<li class="pr-3"><a href="#" class="hvr-icon-pulse ml-5 mb-5" style="font-size: 20px; color: whitesmoke;"><i class="fas fa-search px-3 hvr-icon"></i></a></li>
               <a href="#" class="hvr-icon-pulse ml-5 mb-5" style="font-size: 20px; color: whitesmoke;"><i class="fab fa-facebook-f px-3 hvr-icon"></i></a>
               <a href="#" class="hvr-icon-pulse ml-5 mb-5" style="font-size: 20px; color: whitesmoke;"><i class="fas fa-sign-in-alt px-3 hvr-icon"></i></a>
               -->   
            </ul>
            <!-- Start try -->
            <div class="container">
              <div class="row py-1 ml-3 pl-5 pb-4">
                 <div class="col-md-12">
                   <a href="#" class="hvr-icon-pulse" style="font-size: 19px; color: whitesmoke;"><i class="fas fa-search px-3 hvr-icon"></i></a>
                   <a href="#" class="hvr-icon-pulse" style="font-size: 19px; color: whitesmoke;"><i class="far fa-user pr-3 hvr-icon"></i></a>
                   <a href="#" class="hvr-icon-pulse" style="font-size: 19px; color: whitesmoke;"><i class="far fa-sun pr-3 hvr-icon"></i></a>
                   <a href="#" class="hvr-icon-pulse" style="font-size: 19px; color: whitesmoke;"><i class="fas fa-gift pr-3 hvr-icon"></i></a>
                   <a href="#" class="hvr-icon-pulse" style="font-size: 19px; color: whitesmoke;"><i class="fas fa-sign-in-alt pr-3 hvr-icon"></i></a>
                 </div>
                 <div class="col-md-6 text-right">
                 </div>
              </div>
            </div>
             <!-- End Try -->
         </div>
      </nav>   
      <!-- End Navbar -->
      <div class="border-top mt-5 pt-5">
      <hr></hr>
    <h2 class="text-center mt-3">Selected Products</h2>
    <hr></hr>
    </div>
    <div class="jumbotron dressclass pt-1 pb-1">
      <div class="container">
         <div class="row mt-3">
 <?php
foreach($_SESSION['makeupproductcart'] as $key => $value){

    $qty=$_SESSION['makeproductquantity'][$key];
    require_once("dbconn.php");
    $db1=new dbconn();
    $cart_detail=$db1->MakeupforView_cartData($value);
    $subtotal=$cart_detail['Makeup_price'] * $qty;
 ?>
         <!-- Start 1st Card -->
         <div class="col-lg-3 col-sm-6">
            <form action="AddToCart.php" method="post">
             <div class="card">
               <div class="card-body text-center pt-0 pl-0 pr-0 pb-0">
                  <img class="card-img-top square" style="width: 250px; height: 250px;" src="<?php echo $cart_detail['Makeup_image']  ?>" alt="Card image cap">
                  <p class="blockquote-footer mt-3"><?php echo $cart_detail['Makeup_name'] ?></p>
                  <p class="m">Rs.<?php echo $cart_detail['Makeup_price'] ?></p>
                  <p class="m">Product Quantity: <?php echo $qty ?></p>
                  <p class="m">Total: <?php echo $subtotal ?></p>
                
                 </div>
               <div class="card-footer bg-transparent border-success">
               <?php echo "<a href='?id=$key' style='width: 103px;' class='btn btn-danger'>Remove</a>"; ?>
               <?php echo "<a href='Makeup.php' style='width: 103px;' class='btn btn-dark'>Back</a>"; ?>
               </div>
             </div>
             </form>
           </div>
           <!-- End 1st Card -->
          
    <?php
    $grandtotal[]=$subtotal;
    if(!isset($_GET['id'])){
      require_once("dbconn.php");
      $db3=new dbconn();
      $check=$db3->MakeupinsertOrder($value,$qty,$subtotal);
      }
   
   
}
  
   echo "</div>
     </div>
     </div>"; //jumbotron-container-row divs End
    $finalresult=array_sum($grandtotal);
    echo "<div class='container'>"; 
     echo "<div class='row'>"; 
     echo "<div class='col-lg-3 col-sm-6'>"; 
        echo "<button type='button' style='width: 210px;' class='ml-4 mb-5 btn btn-success' data-toggle='tooltip' data-placement='top' title='Rs. $finalresult'>
                 See Your Total Bill
              </button>";
     echo "</div>";
    echo "</div>";
}
else
{
    echo "<script>alert('Cart is Empty')</script>";
    header("location: Makeup.php");
}
?>




<!-- Start Form Code -->
<div class="container">  
        <div class="row">
            <div class="col-md-12">
                <button type="button" class="btn btn-dark float-right mb-5" data-toggle="modal" data-target="#myModal">PROCEED TO CHECKOUT</button>
            
            <!-- The Insert Modal -->
<div class="modal" id="myModal">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">CUSTOMER INFORMATION</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
        
        <div class="form-group">
            <input type="text" class="form-control" name="" id="Cname" placeholder="Enter Name">
        </div>
        
        <div class="form-group">
            <input type="text" class="form-control" name="" id="address" placeholder="Enter Address">
        </div>
        <div class="form-group">
            <input type="text" class="form-control" name="" id="phoneNo" placeholder="Enter Phone No">
        </div>
        <div class="form-group">
            <input type="text" class="form-control" name="" id="postalCode" placeholder="Enter Postal Code">
        </div>  
      </div>
      <!-- Modal footer -->
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" onclick="add()">Save</button>
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
      </div>

    </div>
  </div>
</div>       
            </div> 
        </div>
    </div>
  
    
    <script type="text/javascript">
    
        function add()
          {
              var Cname = $('#Cname').val();
              var address = $('#address').val();
              var phoneNo = $('#phoneNo').val();
              var postalCode = $('#postalCode').val();
          
              if(Cname == "" || address == "" || phoneNo == "" || postalCode == "")
                 {
                    alert('All fields are required..');
                 }
              else
                  {
              $.ajax({
                  url:'data.php',
                  type:'post',
                  data:{Cname:Cname,
                       address:address,
                       phoneNo:phoneNo,
                       postalCode:postalCode},
                  success:function(data,status)
                  {
                      //readRecords();
                      alert('INFORMATION SAVED');
                      $("#myModal input").val("");
                      $("#myModal").modal("hide");
                  }
              });
                  }
          }
        
        
    </script>
<!-- End Form Code -->
<script>
    $(function () {
  $('[data-toggle="tooltip"]').tooltip()
})
</script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>

 </body>
    </html>


