<?php 
include("header.php");
	 
	$ipBDD = $_POST['ipBDD'];
	$loginBDD = $_POST['loginBDD'];
	$mdpBDD =  $_POST['mdpBDD'];
	$nomBDD =  $_POST['nomBDD'];
	 
	 
	// Connexion à la base pour récupérer les tables :

	$dns = 'mysql:dbname='.$nomBDD.';host='.$ipBDD;
	
	try{
	$db = new PDO($dns, $loginBDD, $mdpBDD);
	} catch(PDOException $e){
		echo 'Connexion échouée : '. $e->getMessage();	
	}
	
	
	$sql = 'SHOW TABLES FROM'. $nomBDD;

	foreach ($db->query($sql) as $row) {
		print $row;
	}
	
	echo 'toto';
	echo $ipBDD.' '. $loginBDD.' '. $mdpBDD.' '. $nomBDD;
include("footer.php");
?>
