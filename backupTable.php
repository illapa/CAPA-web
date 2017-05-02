<?php include("header.php"); 

	
	// Information de la connexion à la base : 
	$ipBDD = $_POST['ipBDD'];
	$loginBDD = $_POST['loginBDD'];
	$mdpBDD =  $_POST['mdpBDD'];
	$nomBDD =  $_POST['nomBDD'];
	$table = $_POST['table'];
	
	//Si on choisit un format :
	$format =  $_POST['format'];
	
	// Information de la connexion FTP :
	$loginSer = $_POST['loginSer'];
	$mdpSer =  $_POST['mdpSer'];
	$port = $_POST['port'];
	$ipSer =  $_POST['ipSer'];
	$protocole = $_POST['protocole'];
	
	$repertoire = $_POST['repertoire'];
	
	// Mot de passe du cryptage : 
	$mdpcrypt =  $_POST['mdpcrypt'];
	

	//Ouverture de la connexion à la base de donnée :
	
	// Commande de backup de base : 
	$cmd = './CAPA-backup.sh -b "'. $ipBDD.' '. $loginBDD. ' '. $mdpBDD. ' '.$nomBDD .' '.$table. '"'. ' ';

	
	//On ajoute le format de compression à la commande : -c format_compression
	if ($format != "sql") {
		$cmd = $cmd.'-c '. $format. ' ';
	}
	// On ajoute s'il y a un encryptage : -e password_encrypt 
	if (!empty($mdpcrypt)){
		$cmd = $cmd. '-e '. $mdpcrypt. ' ';
	}
	
	//On ajoute la connexion au serveur FTP : -f "protocole_FTP login_FTP password_FTP ip_FTP port_FTP repertoire_FTP
	if (!empty($protocole) && !empty($loginSer) && !empty($mdpSer) && !empty($port) ){
		$cmd = $cmd. '-f "'. $protocole. ' '. $loginSer. ' '. $mdpSer. ' '. $ipSer. ' '. $port. ' ';
			// Si on veut ajouter le chemin du répertoire à la commande f : 
			if(!empty($repertoire)) {
				$cmd = $cmd. $repertoire. '"'; 
				}
				else {
					$cmd = $cmd.'"';
				}
		}
	
	//echo $cmd;
	try{
	//shell_exec($cmd);
	exec($cmd);
	} catch (PDOException $e)
			{ 
			echo $e->getMessage("Erreur du Select");
			}
			
	
	
	



include("footer.php"); ?>	

