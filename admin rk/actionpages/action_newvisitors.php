<?php
session_start();
require_once 'db/db.php';
$action=$_REQUEST['submit'];
switch($action){
 
 case 'addvisitor':
 $name=$_REQUEST['name'];
 $email=$_REQUEST['email'];
 $mobno=$_REQUEST['mobno'];
 
 $enquiry=$_REQUEST['enquiry'];

$reason=$_REQUEST['reason'];

$address=$_REQUEST['address'];
$int=$conn->prepare("INSERT INTO visitors(v_name,v_email,v_mobno,enquirydt,reason,address) VALUES (:v_name
,:v_email,:v_mobno,:enquirydt,:reason,:address)");
$row=$int->execute(array('v_name' => $name, 'v_email' => $email, 'v_mobno' => $mobno,'enquirydt' => $enquiry,
'reason' => $reason,'address' => $address));
$_SESSION['msg']="Insert data successfully";

 header("location:../add_newvisitor.php");
 break;
 case 'update':
  $id=$_REQUEST['v_id'];
  $name=$_REQUEST['name'];
 $email=$_REQUEST['email'];
 $mobno=$_REQUEST['mobno'];
 
 $enquiry=$_REQUEST['enquiry'];

$reason=$_REQUEST['reason'];

$address=$_REQUEST['address'];
$int=$conn->prepare("UPDATE visitors SET v_name='$name',v_email='$email',v_mobno='$mobno',enquirydt='$enquiry',reason='$reason',address='$address' WHERE v_id=:vmo");
 $row=$int->execute(array('vmo' => $id));
if($row == 'true'){
$_SESSION['msg']="Insert data successfully";

 header("location:../add_newvisitor.php");}
echo "failed";

  break;
  case delete:
  $delid=$_REQUEST['del'];
  $int=$conn->prepare("DELETE FROM visitors WHERE v_id=:mon");
  $row=$int->execute(array('mon' => $delid));
  
  $_SESSION['msg']="Insert data successfully";

 header("location:../add_newvisitor.php");
  break;
 default:
 header("Location:google.phpf");




}

?>