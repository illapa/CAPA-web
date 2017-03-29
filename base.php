<?php include("header.php"); ?>

	<h1>Backup de base de donées. </h1>
	<br>
	<br>
	
	<div class="conFTP">
	<form method="post" action="backupBDD.php">
		
		<h2> Connexion à la base de donnée : </h2>
		
		<!--Ip du serveur : OBLIGATOIRE -->
		<div class="megaForm">
		<label for="ipBDD"> IP de la base de donnée : </label>
		<input type="text" id="ipBDD" name="ipBDD" class="ipBDD" required>
		</div>
		<br>
		<br>
		
		<!-- Nom base : OBLIGATOIRE -->
		<div class="megaForm">
		<label for="nomBSS"> Nom de la base : </label>
		<input type="text" id="nomBDD" name="nomBDD" required>
		</div>
		<br>
		<br> 
		
		<!-- login base : OBLIGATOIRE -->
		<div class="megaForm">
		<label for="loginBDD"> Login de la base : </label>
		<input type="text" id="loginBDD" name="loginBDD" required>
		</div>
		<br>
		<br>
		
		<!-- Mot de passe base : OBLIGATOIRE -->
		<div class="megaForm">
		<label for="mdpBDD"> Mot de passe : </label>
		<input type="password" id="mdpBDD" name="mdpBDD" required>
		</div>
		<br>
		<br>
		
		
		<!-- Format backup : OBLIGATOIRE -->
		<div class="megaForm">
		<label for="format"> Choisissez le format : </label>
		<select id= "format" name="format">
			<option value = "sql">.sql</option>
			<option value = "gz">.tar.gz</option>
			<option value = "bz2">.tar.bz2</option>
			<option value = "zip">.zip</option>
		</select> 
		</div>
		<br>
		<br>
		
		<h2>Connexion serveur : </h2>
		
		<!--Ip du serveur : OBLIGATOIRE -->
		<p>Remplissez les champs suivants si vous souhaitez envoyer le backup sur un serveur : </p>
		
		<div class="megaForm">
		<label for="protocole"> Choisissez le protocole : </label>
		<select id= "protocole" name="protocole">
			<option value = "false"> - </option>
			<option value = "ftp">ftp</option>
			<option value = "sftp">sftp</option>
			<option value = "scp">scp</option>
		</select> 
		</div>
		<br>
		<br>
		
		<div class="megaForm">
		<label for="ipSer"> IP / Nom de domaine du serveur : </label>
		<input type="text" id="ipServeur" name="ipSer" class="ipSer">
		</div>
		<br>
		<br>
		
		<!-- Login au serveur : OBLIGATOIRE -->
		<div class="megaForm">
		<label for="loginSer"> Login : </label>
		<input type="text" id="loginSer" name="loginSer" >
		</div>
		<br>
		<br>
		
		<!-- Mot de passe du serveur : OBLIGATOIRE -->
		<div class="megaForm">
		<label for="mdpSer"> Mot de passe : </label>
		<input type="password" id="mdpSer" name="mdpSer" >
		</div>
		<br>
		<br>
		
		<!--N°Port : OBLIGATOIRE -->
		<div class="megaForm">
		<label for="port"> N° de port : </label>
		<input type="number" id="port" name="port">
		</div>
		<br>
		<br>		
		
		<!--N°Port : OBLIGATOIRE -->
		<div class="megaForm">
		<label for="repertoire"> Chemin complet du répertoire : </label>
		<input type="text" id="repertoire" name="repertoire">
		</div>
		<br>
		<br>		
		
		<!--Cryptage : MDP OBLIGATOIRES SI OUI-->
		<h2>Cryptage ? </h2>
		<p>Si vous souhaitez crypter le backup, entrez un mot de passe. <br>
		Sinon, laissez le champ vide.</p>
		
		<div class="megaForm">
		<label for="mdpcrypt"> Mot de passe : </label>
		<input type="password" id="mdpcrypt" name="mdpcrypt" >
		</div>
		<br>
		<br>
		
		<!-- Boutton Submit : -->
		<div class="megaForm">
		<input id="sub" type="submit" value="Soumettre"> 
		</div>
		<br>
		<br>
		
	</form>


<?php include("footer.php"); ?>	