<?php
  if (!isset($_COOKIE['check']))
  {
      header("location:enterence.php");
  }
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <!-- Jquery -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <!-- Bootsrap-CSS -->
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
        <title>ShopCity</title>
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
    <!-- Start Header Jumbotron --> 
    <header class="jumbotron back-image" style="background-image: url(Images/UniImages/Lime.jpg);">
     <!-- <div class="text-cente" style="margin-top: 30px;">
       <h1 class="text-uppercase text-danger font-weight-bold animated bounceInLeft" style="font-size: 30px;">Welcome to Attraction</h1>
       <p class="font-italic font-weight-bold st">Learn and Enjoy Designs</p>
       <a href="#" class="btn btn-outline-danger mr-4 animated swing">Hire Us</a>
       <a href="#" class="btn btn-outline-danger animated swing">Join Us</a>
      </div> -->
    </header>   
    <!-- End Header Jumbotron -->   
    <!-- Start Unstitched Summer -->
    <div class="border-top">
    <h2 class="text-center mt-3">UNSTITCHED SUMMER</h2>
    </div>
  
    <div class="jumbotron dressclass pt-1 pb-1">
      <div class="container">
         <div class="row mt-3 wow bounceInLeft" data-wow-duration="5s">
           <!-- Start 1st Card -->
           <?php
    require_once("dbconn.php");
    $db=new dbconn();
    $save_res=$db->loaddata();
    foreach($save_res as $row){
      //print_r($save_res);
      ?>
         <!-- Start 1st Card -->
         <div class="col-lg-3 col-sm-6">
            <form action="AddToCart.php" method="post">
             <div class="card mb-3">
               <div class="card-body text-center pt-0 pl-0 pr-0 pb-0">
                  <img class="card-img-top square" src="<?php echo $row['Product_image']  ?>" alt="Card image cap">
                  <p class="blockquote-footer mt-3"><?php echo $row['Product_color'] ?></p>
                  <p class="m">Rs.<?php echo $row['Product_price'] ?></p>
                  <input type="hidden" name="product_id" value="<?php echo $row['Product_ID']  ?>" >             
                  <input type="hidden" name="product_color" value="<?php echo $row['Product_color']  ?>" >             
                  <input type="hidden" name="product_price" value=" <?php echo $row['Product_price']  ?>" >             
                 
                  <input class="text-center form-control" type="number" name="quantity" min="1" max="5" placeholder="Quantity: " >
               </div>
               <div class="card-footer bg-transparent border-success">
               <button style="width: 210px;" type="submit" class="btn btn-dark">
               Add to Cart</button></a>
               </div>
             </div>
             </form>
           </div>
           <!-- End 1st Card -->
   <?php }
   if(isset($_GET['add'])){
     echo "true";
   }
  ?>
           
           
          
          
        
        
         </div>
      </div>
    </div>
    <!-- End Unstitched Summer -->
   
    <!-- End Ready to Wear -->
    
    
    <!-- Start Team -->
    <div class="jumbotron teamclass pt-4 pb-3" id="team">
      <div class="container">
         <h2 class="text-center text-white">Team</h2>
         <div class="row mt-5 wow bounceInLeft" data-wow-duration="5s">
           <!-- Start 1st Card -->
           <div class="col-lg-3 col-sm-6">
             <div class="card shadow-lg mb-3">
               <div class="card-body text-center">
                  <img src="Images/UniImages/Amnaa.png" alt="" class="img-fluid rounded-circle" style="height:200px; width: 200px; object-fit: cover;">
                  <h2 class="card-title">Amna IIyas</h2>
                  <p class="blockquote-footer">by Amna Ilyas</p>
                  <p>Brand Ambassador</p>
                  <p>Cloth Collection</p>
               </div>
             </div>
           </div>
           <!-- End 1st Card -->
           <!-- Start 2nd Card -->
           <div class="col-lg-3 col-sm-6">
            <div class="card shadow-lg mb-3">
              <div class="card-body text-center">
                 <img src="Images/UniImages/Imran.jpg" alt="" class="img-fluid rounded-circle" style="height:200px; width: 200px;object-fit: cover;">
                 <h2 class="card-title">Imran Abbas</h2>
                 <p class="blockquote-footer">by Imran Abbas</p>
                  <p>Commercial Model</p>
                  <p>Promotional Partnership</p>
              </div>
            </div>
          </div>
           <!-- End 2nd Card -->
           <!-- Start 3nd Card -->
           <div class="col-lg-3 col-sm-6">
            <div class="card shadow-lg mb-3">
              <div class="card-body text-center">
                 <img src="Images/Man2.jpg" alt="" class="img-fluid rounded-circle" style="height:200px; width: 200px;object-fit: cover;">
                 <h2 class="card-title">Ali Rehman</h2>
                 <p class="blockquote-footer">by Ali Rehman</p>
                  <p>Brand Ambassador</p>
                  <p>Cloth Collection</p>
              </div>
            </div>
          </div>
           <!-- End 3nd Card -->
           <!-- Start 4nd Card -->
           <div class="col-lg-3 col-sm-6">
            <div class="card shadow-lg mb-3">
              <div class="card-body text-center">
                 <img src="Images/UniImages/Sairaa.jpg" alt="" class="img-fluid rounded-circle" style="height:200px; width: 200px;object-fit: cover;">
                 <h2 class="card-title">Saira Shahroz</h2>
                 <p class="blockquote-footer">by Amna Ilyas</p>
                  <p>Runway Model</p>
                  <p>Company Spomser</p>
              </div>
            </div>
          </div>
           <!-- End 4nd Card -->
         </div>
      </div>
    </div>
    <!-- End Team -->
    <!-- Start Contact Us -->
    <div class="container" id="contact">
      <h2 class="text-center">Contact Us</h2>
      <div class="row">
         <div class="col-md-8">
          <form>
            <input placeholder="Name" type="text" class="form-control" id="inputEmail4"><br>
            <input placeholder="Phone" type="text" class="form-control" id="inputEmail4"><br>
            <input placeholder="Address" type="text" class="form-control" id="inputEmail4"><br>
            <textarea rows="6" placeholder="Place" type="text" class="form-control" id="inputEmail4"></textarea><br>
            <button type="submit" class="btn btn-primary">Sign in</button>
          </form>
         </div>
         <div class="col-md-4 text-center">
            <strong>Offical Website</strong>
            <br> ACCESSORIES <br>
            Amp up your look with the <br>
            hottest trend this Season-SILVER <br>
            <a class="nav-link hvr-wobble-horizontal" href="#">Shop Now</a>
            <br><br><br>
            <strong>Offical Homeset</strong>
            <br> ACCESSORIES <br>
            Amp up your look with the <br>
            hottest trend this Season-SILVER <br>
            <a class="nav-link hvr-wobble-horizontal" href="#">Shop Now</a>
         </div>
      </div>
    </div>
    <!-- End Contact Us -->
    <!-- 2nd Last Start Footer -->
    <footer class="container-fluid mt-5 pt-5 pb-5" style="background-color:rgb(242, 242, 248)">
      <div class="container">
        <div class="row">
           <div class="col-md-4 col-sm-6 mb-3">
             <h5 style="color: rgb(97, 93, 93);">Customer Care</h5>
             <a class="blockquote-footer nav-link hvr-forward" id="pulseclass" href="#" style="line-height: 2px; color: black;">Shipping & Handling</a><br>
             <a class="blockquote-footer nav-link hvr-forward" id="pulseclass" href="#" style="line-height: 2px; color: black;">Exchange Policy</a><br>
             <a class="blockquote-footer nav-link hvr-forward" id="pulseclass" href="#" style="line-height: 2px; color: black;">Privacy Policy</a><br>
             <a class="blockquote-footer nav-link hvr-forward" id="pulseclass" href="#" style="line-height: 2px; color: black;">customercare@Attract.com</a>
           </div>
           <div class="col-md-4 col-sm-6 mb-3">
            <h5 style="color: rgb(97, 93, 93);">Company Information</h5>
             <a class="blockquote-footer nav-link hvr-forward" id="pulseclass" href="#" style="line-height: 2px; color: black;">About Us</a><br>
             <a class="blockquote-footer nav-link hvr-forward" id="pulseclass" href="#" style="line-height: 2px; color: black;">Contact Us</a><br>
             <a class="blockquote-footer nav-link hvr-forward" id="pulseclass" href="#" style="line-height: 2px; color: black;">Gallery</a><br>
             <a class="blockquote-footer nav-link hvr-forward" id="pulseclass" href="#" style="line-height: 2px; color: black;">Career at Attraction</a>
           </div>
           <div class="col-md-4 col-sm-6">
            <h5 style="color: rgb(97, 93, 93);">Customer Care</h5>
            <a class="blockquote-footer nav-link hvr-forward" id="pulseclass" href="#" style="line-height: 2px; color: black;">Track Your Order</a><br>
            <a class="blockquote-footer nav-link hvr-forward" id="pulseclass" href="#" style="line-height: 2px; color: black;">Terms & Conditions</a><br>
            <a class="blockquote-footer nav-link hvr-forward" id="pulseclass" href="#" style="line-height: 2px; color: black;">Terms of Use</a><br>
            <a class="blockquote-footer nav-link hvr-forward" id="pulseclass" href="#" style="line-height: 2px; color: black;">Company Location</a>
           </div>
        </div>
      </div>
   </footer>
   <!-- 2nd Last End Footer -->
    <!-- Start Footer -->
    <footer class="container-fluid bg-dark text-white">
       <div class="container">
         <div class="row py-3">
            <div class="col-md-6">
              <span style="font-size: 16px; font-family: sans-serif;">Follow Us: </span>
              <a href="#" class="hvr-icon-pulse" style="font-size: 16px; color: whitesmoke;"><i class="fab fa-facebook-f px-3 hvr-icon"></i></a>
              <a href="#" class="hvr-icon-pulse" style="font-size: 16px; color: whitesmoke;"><i class="fab fa-twitter pr-3 hvr-icon"></i></a>
              <a href="#" class="hvr-icon-pulse" style="font-size: 16px; color: whitesmoke;"><i class="fab fa-youtube pr-3 hvr-icon"></i></a>
              <a href="#" class="hvr-icon-pulse" style="font-size: 16px; color: whitesmoke;"><i class="fab fa-google-plus-g pr-3 hvr-icon"></i></a>
              <a href="#" class="hvr-icon-pulse" style="font-size: 16px; color: whitesmoke;"><i class="fas fa-rss pr-3 hvr-icon"></i></a>
            </div>
            <div class="col-md-6 text-right">
              <small>Designed by<a class="nav-link hvr-pulse-grow" href="#">Attraction</a>&copy;2020 </small>
            </div>
         </div>
       </div>
    </footer>
    <!-- End Footer -->


        <!-- Start Wow Script --> 
        <script src="Wow File/wow.min.js"></script>
        <script>
          new WOW().init();
        </script> 
        <!-- End Wow Script -->
        <!--JQuery-->
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    </body>
    </html>