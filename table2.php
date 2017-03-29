<?php include("header.php"); ?>

	<h1>Backup de table de base de donées. </h1>
	<br>
	<br>
	
	<div class="conFTP">
	<form method="post" action="afficheTable.php">
		
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
		<input type="password" id="mdpBDD" name="mdpBDD">
		</div>
		<br>
		<br>
		

		<!-- Boutton Submit : -->
		<div class="megaForm">
		<input id="sub" type="submit" value="Afficher"> 
		</div>
		<br>
		<br>
		
	</form>
	

<?php include("footer.php"); ?>	