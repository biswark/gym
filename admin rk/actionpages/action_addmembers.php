<?php
session_start();
require_once 'db/db.php';
$action=$_REQUEST['submit'];
switch($action){
 
 case 'addmemeber':
 $name=$_REQUEST['name'];
 $email=$_REQUEST['email'];
 $mobno=$_REQUEST['mobno'];
 $birth=$_REQUEST['birth'];
 $joindt=$_REQUEST['join'];
 $shift=$_REQUEST['shift'];
$occupation=$_REQUEST['occupation'];
$plan=$_REQUEST['plan'];
$sex=$_REQUEST['optradio'];
$blood=$_REQUEST['blood'];
$address=$_REQUEST['address'];
$int=$conn->prepare("INSERT INTO addmember(name,email,mobno,birth,joindt,shift,occupation,plan,sex,bloodgp,address) VALUES (:name
,:email,:mobno,:birth,:joindt,:shift,:occupation,:plan,:sex,:bloodgp,:address)");
$row=$int->execute(array('name' => $name, 'email' => $email, 'mobno' => $mobno,'birth' => $birth,
'joindt' => $joindt,'shift' => $shift,'occupation' => $occupation,'plan' => $plan,'sex' => $sex,'bloodgp' => $blood,'address' => $address));
$_SESSION['msg']="Insert data successfully";

 header("location:../add_member.php");
 break;
 case 'update':
  $id=$_REQUEST['m_id'];
  $name=$_REQUEST['name'];
 $email=$_REQUEST['email'];
 $mobno=$_REQUEST['mobno'];
 $birth=$_REQUEST['birth'];
 $joindt=$_REQUEST['join'];
 $shift=$_REQUEST['shift'];
$occupation=$_REQUEST['occupation'];
$plan=$_REQUEST['plan'];
$sex=$_REQUEST['optradio'];
$blood=$_REQUEST['blood'];
$address=$_REQUEST['address'];
$run= $conn->prepare("SELECT * FROM  addmember WHERE m_id=:m_id");
          $run->execute(array('m_id' => $id));
         $ro= $run->fetch(PDO::FETCH_OBJ);
	$nam=$ro->name; 
	$intt=$conn->prepare("UPDATE payment SET m_name='$name'  WHERE m_name=:mname");
 $rows=$intt->execute(array('mname' => $nam));

$int=$conn->prepare("UPDATE addmember SET name='$name',email='$email',mobno='$mobno',birth='$birth',joindt='$joindt',
shift='$shift',occupation='$occupation',plan='$plan',sex='$sex',bloodgp='$blood',address='$address' WHERE m_id=:mo");
 $row=$int->execute(array('mo' => $id));
if($row == 'true'){
$_SESSION['msg']="Insert data successfully";

 header("location:../add_member.php");}
echo "failed";

  break;
  case delete:
  $d_id=$_REQUEST['del'];
   $run= $conn->prepare("SELECT * FROM  addmember WHERE m_id=:m_id");
          $run->execute(array('m_id' => $d_id));
         $ro= $run->fetch(PDO::FETCH_OBJ);
	$pay=$ro->name; 
  $ints=$conn->prepare("DELETE FROM payment WHERE m_name=:mname");
  $rows=$ints->execute(array('mname' => $pay));
  $int=$conn->prepare("DELETE FROM addmember WHERE m_id=:mon");
  $row=$int->execute(array('mon' => $d_id));
  $_SESSION['msg']="Insert data successfully";

header("location:../add_member.php");
  break;
 default:
 header("Location:google.phpf");




}

?>