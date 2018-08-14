<?php
$custom_second = 900;
session_start();
if (!isset($_SESSION['gymapplication']) ) {
	
    // Redirect if not logged in
    header('Location:index.php');
    exit;
} 
 elseif ($_SESSION['gymapplication'] + $custom_second < time()) {
    $expired = true;
    require 'logout.php';
} else {
    $_SESSION['gymapplication'] = time();
}
?>