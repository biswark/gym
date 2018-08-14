
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet"  href="css/style.css" type="text/css">
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
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

      

  <title>CMS Admin Area</title>
 
</head>
<body onload="myFunction3()" style="background-image: url('img/4.jpg');">

  <div class="content">
   <div class="success" style="display: none;"> You are now a registered user!</div> 
    <div class="flex-container">
    <div> <i class="ion-android-person-add icon i9 active" id="icontab2"onclick="myFunction()"></i></div>&nbsp;&nbsp;&nbsp;&nbsp;
  <div ><i class="ion-log-in icon i9 active"id="icontab1" onclick="myFunction2()"></i>
   </div></div>
   
 
   
   
<form  method="post" id="form1">
   
    <div id="myDIV2" class="signup-form">
        
  
    <input type="text" name="name" id="name" class="name"  placeholder="Enter Name" >
       <input type="text" name="email" id="email" class="name" placeholder="Enter Email">
         
             <input type="text" name="address" id="address" class="name"  placeholder="Enter Address">
             <input type="text" name="pass" id="pass" class="name" placeholder="Enter Password">
    
       <button type="submit" class="btn btn-primary ok" name="submit" formaction="action_signup.php">signup</button>

  </div>
</form>
   <div   id="myDIV" class="login-form">
        
  
    <input type="text"  name="email" id="email" class="name" placeholder="Enter Email" form="form1">
       
             <input type="password" name="pass" id="pass" class="name"  placeholder="Enter Password"form="form1">
             <br><br> <br><br>
         <button type="submit" class="btn btn-warning ok" name="submit_login"form="form1"formaction="action_signup.php">login</button>
  </div>

</div>



<script>
function myFunction3() {
  document.getElementById("icontab1").classList.remove("active");
    document.getElementById("myDIV").style.display="none";
 
}

function myFunction() {
    document.getElementById("myDIV").style.display="none";
  
  document.getElementById("icontab2").classList.add("active");
   document.getElementById("icontab1").classList.remove("active");
     document.getElementById("myDIV2").style.display="block";
}
function myFunction2() {
    document.getElementById("myDIV2").style.display="none";
    document.getElementById("icontab2").classList.remove("active");
     document.getElementById("icontab1").classList.add("active");
    document.getElementById("myDIV").style.display="block";
}
</script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
 
</body>
</html>
