<?php
if(isset($_COOKIE['check']))
{
  header("location:UniProject.php");
}
else{
  if(!isset($_POST['user-email']))
  {
    echo "<script>alert('Please Enter Email')</script>";
  }
  else
  {
    $user_email=$_POST['user-email'];
    require_once("dbconn.php");
    $db=new dbconn();
    $save1=$db->insertemail($user_email);
    setcookie("check",$user_email,time()+3600);
    header("location:UniProject.php");
  }
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
    
        <title>ShopCity</title>
    </head>
    <body>
        <div class="jumbotron teamclass pt-4 pb-3" style="width: 1500px; height: 750px;">
            <a class="nav-link hvr-wobble-horizontal" href="UniProject.html"><h1 class="text-white">ShopCity</h1></a>
            <a href="UniProject.html" class="hvr-icon-pulse" style="font-size: 80px; color: white;"><i class="fa fa-shopping-cart px-3 hvr-icon" aria-hidden="true"></i></a>
                  
            <div class="container">
                <div class="row">
                   <div class="col-md-11 col-sm-3 col-4">
                    <form method="post" style="float: right;">
                      <input style="width: 260px;" placeholder="Enter Email" type="email" name="user-email" class="form-control"><br>
                      <button style="width: 80px;" type="submit" class="btn btn-warning">Enter</button>
                    </form>
                   </div>
                </div>
            </div>
        </div>
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    </body>
    </html>
