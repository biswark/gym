<?php 
   define ( 'DB_HOST', "localhost" );
   define ( 'DB_USER', "root" );
   define ( 'DB_PASSWORD', "" );
   define ( 'DB_NAME', "gym" );
  define('DB_DRIVER', "mysql"); 

try{
	// $conn = new PDO(DB_DRIVER . ":dbname=" . DB_NAME . ";host=" . DB_HOST, DB_USER, DB_PASSWORD);
	//$dbh = new PDO("mysql:host=DB_HOST;dbname=DB_NAME" ,"DB_USER", "DB_PASSWORD");
		$conn=new PDO(DB_DRIVER . ":dbname=" . DB_NAME . ";host=" . DB_HOST,DB_USER, DB_PASSWORD);
	
}
catch(PDOException $e){
	echo $e->getMessage();
	
}





?>