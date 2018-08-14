<?php
session_start();
require_once 'db/db.php';
$action=$_REQUEST['submit'];
switch($action){
 
 case 'addinstrument':
 $name=$_REQUEST['ename'];
 $bname=$_REQUEST['bname'];
 $tquantity=$_REQUEST['tquantity'];
 $pquantity=$_REQUEST['pquantity'];
 $pdate=$_REQUEST['pdate'];
  $main=$_REQUEST['main'];


$insert=$conn->prepare("INSERT INTO instruments (ins_name,brand_name,total_quantity,p_quantity,purchasedt,m_period) VALUES (:ins_name
,:brand_name,:total_quantity,:p_quantity,:purchasedt,:m_period)");
$row=$insert->execute(array('ins_name' => $name, 'brand_name' => $bname, 'total_quantity' => $tquantity,'p_quantity' => $pquantity,
'purchasedt' => $pdate,'m_period' => $main));
if($row == 'true'){
  $add=$conn->lastInsertId(); 

$file=$_FILES['file'];
$fileName=$_FILES['file']['name'];
$fileTmp=$_FILES['file']['tmp_name'];
$fileSize=$_FILES['file']['size'];
$fileError=$_FILES['file']['error'];
$fileType=$_FILES['file']['type'];
$filetex=explode('.', $fileName);
$fileactualtxt= strtolower(end($filetex));
$allowed= array('jpg','jpeg','png');
if (in_array($fileactualtxt, $allowed)) {
  if ($fileError === 0) {
    if ($fileSize < 1000000) {
    $filenew= uniqid('',true).".".$fileactualtxt;
    $filedestination= 'upload/'.$filenew;
    move_uploaded_file($fileTmp, $filedestination);
   $insert= $conn->prepare("UPDATE instruments SET images='$filenew' WHERE ins_id=:ids");
   $insert->execute(array('ids' => $add ));
   $_SESSION['msgs']="Insert data successfully";
    header("location:../view_instrument.php");
    }
    else{echo "very big";}
  }
  else{echo "something error";}
}else{echo "you cant upload";}

}
 echo '<script type="text/javascript">'; 
        echo 'alert("Somethings Wrong")'; 
        echo '</script>'; 
		//echo "<script>window.location = '../new_instruments.php'</script>";
	 break;	

 
 case 'update':
  $idd=$_REQUEST['ins_id'];
  $name=$_REQUEST['ename'];
 $bname=$_REQUEST['bname'];
 $tquantity=$_REQUEST['tquantity'];
 $pquantity=$_REQUEST['pquantity'];
 $pdate=$_REQUEST['pdate'];
  $main=$_REQUEST['main'];

$int=$conn->prepare("UPDATE instruments SET ins_name='$name',brand_name='$bname',total_quantity='$tquantity',p_quantity='$pquantity',purchasedt='$pdate',m_period='$main' WHERE ins_id=:mok");
 $row=$int->execute(array('mok' => $idd));
if(isset($_POST['submit'])){

$file=$_FILES['file'];
$fileName=$_FILES['file']['name'];
$fileTmp=$_FILES['file']['tmp_name'];
$fileSize=$_FILES['file']['size'];
$fileError=$_FILES['file']['error'];
$fileType=$_FILES['file']['type'];
$filetex=explode('.', $fileName);
$fileactualtxt= strtolower(end($filetex));
$allowed= array('jpg','jpeg','png');
if (in_array($fileactualtxt, $allowed)) {
  if ($fileError === 0) {
    if ($fileSize < 1000000) {
    $filenew= uniqid('',true).".".$fileactualtxt;
    $filedestination= 'upload/'.$filenew;
    move_uploaded_file($fileTmp, $filedestination);
     $runn= $conn->prepare("SELECT * FROM  instruments WHERE ins_id=:m_id");
          $runn->execute(array('m_id' => $idd));
          $rows = $runn->fetch(PDO::FETCH_OBJ);
          unlink('upload/' . $rows->images); // remove files 
   $upda= $conn->prepare("UPDATE instruments SET images='$filenew' WHERE ins_id=:ids");
   $upda->execute(array('ids' => $idd ));
   $_SESSION['msgs']="Insert data successfully";
    header("location:../view_instrument.php");
    }
    else{echo "very big";}
  }
  else{echo "something error";}
}else{echo "you cant upload";}

}
 echo "failed";
  break;

  case delete:
  $delid=$_REQUEST['del'];
  $dela= $conn->prepare("SELECT * FROM  instruments WHERE ins_id=:m_id");
          $dela->execute(array('m_id' => $delid));
          $d = $dela->fetch(PDO::FETCH_OBJ);
          unlink('upload/' . $d->images); // remove file
  $int=$conn->prepare("DELETE FROM instruments WHERE ins_id=:de");
  $row=$int->execute(array('de' => $delid));
  $_SESSION['msg']="Insert data successfully";

 header("location:../view_instrument.php");
  break;
 default:
 header("Location:google.phpf");




}

?>