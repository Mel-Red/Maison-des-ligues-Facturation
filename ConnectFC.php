<?php
function doConnect()
{
	$user = 'root'; 
	$pass = '';
	$dsn = 'mysql:host=localhost;dbname=mdl2'; 
	try{
    	$dbh= new PDO($dsn, $user, $pass);
    	return $dbh;
	} catch (PDOException $e){ 
    	print "Erreur ! :" . $e->getMessage() . "<br/>"; 
    die();
} 
 return null;
}
?>