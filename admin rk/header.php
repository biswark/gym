<?php 
require 'actionpages/db/check_login.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet"  href="css/stylemain.css" type="text/css">
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.1/css/bootstrap.css">
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/responsive/2.2.3/css/responsive.bootstrap4.min.css">
  <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js|https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.1/js/bootstrap.min.js"></script>
  <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>

  <script src="https://cdn.datatables.net/responsive/2.2.3/js/dataTables.responsive.min.js"></script>
  <script src="https://cdn.datatables.net/responsive/2.2.3/js/responsive.bootstrap4.min.js"></script>
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  
  
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="http://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
 
    
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
<script src="https://cdn.ckeditor.com/ckeditor5/11.0.1/classic/ckeditor.js"></script>
  <title>CMS Admin Area</title>
</head>
<body style="font-size: 18px;">
  <div>

  <nav id="nav2" class="navbar navbar-expand-sm">
  <!-- Brand/logo -->
  <a href="#" id="img"><img src="img/1.png" class="rounded-circle" alt="Cinque Terre" width="30">ARK</a>
  <!-- Links -->
  
       <div class="dropdown dropleft">
     <a href="#" class=" dropdown-toggle" data-toggle="dropdown">
        <i class="ion-ios-people-outline icon icon9"></i></a>
         <div class="dropdown-menu">
      <a class="dropdown-item" href="profile.php">Profile</a>
      <a class="dropdown-item" href="#">Change password</a>
      <div class="dropdown-divider"></div>
      <form method="post" action="actionpages/db/logout.php">
     &nbsp;&nbsp;&nbsp;&nbsp; <input type="submit" name="logout" class="btn btn-danger" value="Log Out">
 
     
    </form>
    </div>
  </div>

</nav></div>
<div id="container">
  <div class="sidebar">
<ul class="line">
<li><a href="dashbored.php" class="dash"><i class="ion-clipboard icon icons1"></i>Dashbored</a></li>
<li><a href="#"><i class="ion-plus-circled icon icons1"></i>Category</a></li>
<li><a href="add_member.php"><i class="ion-ios-body icon icons1"></i>Add Members</a></li>
<li><a href="view_payment.php"><i class="ion-cash icon icons1"></i>View Payment</a></li>
<li><a href="new_instruments.php"><i class="ion-trophy icon icons1"></i>New Instruments</a></li>
<li><a href="add_newvisitor.php"><i class="ion-android-walk icon icons1"></i>New Visitor</a></li>
<!--<li><a href="check_membership.php"><i class="ion-calendar icon icons1"></i>Check Membership</a></li>-->
<li><a href="due_check.php"><i class="ion-ios-list icon icons1"></i>Check Due</a></li>
</ul>
<ul id="line2">
<li title="Profile"><a href="#"><i class="ion-person icon icons"></i></a></li>
<li title="Delate"><a href="#"><i class="ion-trash-a icon icons"></i></a></li>
<li title="Edit"><a href="#"><i class="ion-edit icon icons"></i></a></li>
<li title="Setting"><a href="#"><i class="ion-settings icon icons"></i></a></li>
</ul>
  </div>