<?php session_start();
error_reporting(E_ALL | E_DEPRECATED | E_STRICT);
 require_once('actionpages/db/db.php');

$name=$_POST['name'];
 $email=$_POST['email'];
$address=$_POST['address'];
$password=$_POST['pass'];
$status=1;
if(isset($_POST['submit'])){
if (empty($name) && empty($email) && empty($address) && empty($password)) {
	echo '<script type="text/javascript">'; 
        echo 'alert("Somethings Wrong")'; 
        echo '</script>'; 
}
else 
{
$add=$conn->prepare("INSERT INTO admin(name,email,address,password,status) VALUES (:name
,:email,:address,:password,:status)");
$row=$add->execute(array('name' => $name, 'email' => $email,'address' => $address,'password' => $password,'status' => $status));
header("location:index.php");
}
}
// login action start
if(isset($_POST['submit_login'])){

 $run= $conn->prepare("SELECT * FROM  admin  WHERE email=:email AND password=:password");
          $run->execute(array('email' => $email,'password'=> $password));
         
  $num_rows = $run->rowCount();
  if ($num_rows > 0) {

    //MySqli Select Query
    $ro = $conn->query("SELECT a_id, email FROM admin WHERE email='$email'");
    while ($row = $ro->fetch(PDO:: FETCH_OBJ)) {
    session_regenerate_id();
        $_SESSION['gymapplication'] = time();
      $_SESSION['logintype'] = 'Admin'; // set user type		
      $_SESSION['a_id'] = $row->a_id;
      $_SESSION['email'] = $row->email;
   
      //$_SESSION['ip_name'] = $_SERVER['REMOTE_ADDR'];
      // $ip = $_SERVER['REMOTE_ADDR'];
   
      header("Location:dashbored.php");
    }
  }
else {
	echo "incorrect try again";
}

}


 ?>