<?php
session_start();
require_once 'db/db.php';
$action=$_REQUEST['submit'];
switch($action){
 
 case 'add':
 $name=$_REQUEST['name'];
 $fee=$_REQUEST['fee'];
$m1=$_REQUEST['m1'];
$m2=$_REQUEST['m2'];
$m3=$_REQUEST['m3'];
$m4=$_REQUEST['m4'];
$m5=$_REQUEST['m5'];
$m6=$_REQUEST['m6'];
$m7=$_REQUEST['m7'];
$m8=$_REQUEST['m8'];
$int=$conn->prepare("INSERT INTO payment(m_name,p_price,p_month1,p_month2,p_month3,p_month4,p_month5,p_month6,p_month7,p_month8) VALUES (:m_name
,:p_price,:p_month1,:p_month2,:p_month3,:p_month4,:p_month5,:p_month6,:p_month7,:p_month8)");
$row=$int->execute(array('m_name' => $name, 'p_price' => $fee,'p_month1' => $m1,
'p_month2' => $m2,'p_month3' => $m3,'p_month4' => $m4,'p_month5' => $m5,'p_month6' => $m6,'p_month7' => $m7,'p_month8' => $m8));
if($row == 'true'){
$_SESSION['msg']="Insert data successfully";


 header("location:../view_payment.php");}
 echo "failed";
 break;
 case 'update':
  $id=$_REQUEST['p_id'];
  $fee=$_REQUEST['fee'];
$m1=$_REQUEST['m1'];
$m2=$_REQUEST['m2'];
$m3=$_REQUEST['m3'];
$m4=$_REQUEST['m4'];
$m5=$_REQUEST['m5'];
$m6=$_REQUEST['m6'];
$m7=$_REQUEST['m7'];
$m8=$_REQUEST['m8'];
$int=$conn->prepare("UPDATE payment SET p_price='$fee',p_month1='$m1',p_month2='$m2',p_month3='$m3',
p_month4='$m4',p_month5='$m5',p_month6='$m6',p_month7='$m7',p_month8='$m8' WHERE p_id=:po");
 $row=$int->execute(array('po' => $id));
if($row == 'true'){
$_SESSION['msg']="Insert data successfully";

 header("location:../view_payment.php");}
echo "failed";

  break;
 default:
 header("Location:google.phpf");




}

?>