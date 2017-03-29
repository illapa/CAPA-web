<?php include("header.php"); 

	$loginFTP = POST_['loginFTP'];
	$mdpFTP = POST_['mdpFTP'];
	$port = POST['port'];
	$ipFTP = POST_['ipFTP'];
	
	$timeout = 90;
	
	ftp_connect($ipFTP, $port, $timeout);
	ftp_login($ipFTP, $loginFTP, $mdpFTP);
	
	
	/*Fermer la connexion :
	ftp_close($ftp); */


include("footer.php"); ?>	