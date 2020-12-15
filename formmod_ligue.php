<!DOCTYPE html>
<html>
       <head>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="css/style1.css">
        <link rel="stylesheet" href="css/style.css">
        <title>CROSL, application web</title>
    </head>
    <body>
        <header class="Haut">
            <img src="Maison des Ligues.png" alt="Logo du site" id="Logo" height="150" width="200"/>
        </header>
        <h1>Modification d'une ligue</h1>
       <div class="navbar">
            <a href="Accueil.html">Accueil</a>
            <div class="dropdown">
                <button class="dropbtn">Ligue</button>
                <div class="dropdown-content">
                  <a href="forminsert_ligue.php">Ajouter</a>  
                  <a href="choix_ligue.php">Modifier / Supprimer</a>  
                </div>
            </div>
            <div class="dropdown">
                <button class="dropbtn">Prestation</button>
                <div class="dropdown-content">
                  <a href="formprestation.html">Ajouter</a>  
                  <a href="choix_prestation.php">Modifier / Supprimer</a>
                </div>
            </div>
            <div class="dropdown">
                <button class="dropbtn">Trésorier</button>
                <div class="dropdown-content">
                  <a href="forminsert_tresorier.php">Ajouter</a>  
                </div>
            </div>
            <div class="dropdown">
                <button class="dropbtn">Factures</button>
                <div class="dropdown-content">
                  <a href="Création.php">Création</a>
                  <a href="Modifier.php">Modifier</a>  
                  <a href="Archive.php">Archives</a>
                </div>
            </div>
        </div>
        <br>
	<body>
		<h3 align="center">Entrer pour modifier une Ligue</h3>
        <br>
		<form align="center" method="post" action="resultmod_ligue.php">
            <p>
				Numéro de compte:
				<br/>
				<?php
					$nbCompte = $_GET['numcompte'];
					echo '<input required type="text" name="numcompte" id="numcompte" value="'.$nbCompte.'" required readonly />';
				?>
			</p>
            <br>
			<p>
				Intitulé:
				<br/>
				<input type="text" name="intitule_modifie" id="intitule_modifie" required />
			</p>
            <br>
			<p>
				Numéro de trésorier:
				<br/>
				<input type="text" name="numtreso_modifie" id="numtreso_modifie" required />
			</p>
            <br>
			<p>
				<label for="envoitreso_choix">Envoyer à trésorier ?</label>
				<select id="envoitreso_choix" name="envoitreso_choix">
				<option value="oui">Oui</option>
				<option value="non">Non</option>
				</select>
			</p>
            <br>
			<input type=submit value="Valider"/>
			<input type=reset value="Réinitialiser"/>
		</form>
        <footer class="Bas">
            <p>
                BTS SIO1<br>
                Melvin REDUREAU<br>
                Mai Thi TRAN DIEP<br>
                Inès MAGANGA<br>
            </p>
        </footer>
	</body>
</html>