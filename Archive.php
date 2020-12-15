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
    	<h1>Archive des factures</h1>
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
        <?php
        require_once('ConnectFC.php');
        $dbh = doConnect();
        ?>
        <form method="post" action="traitementFC2.php">
        <fieldset>
            <legend>Choisissez la facture</legend>
                <select name="NomFC" id="NomFC">
                <?php 
                $sql = "SELECT * FROM facture";
                $sth = $dbh->query($sql);
                while ($donnees=$sth->fetch()) 
                {
                ?>
                    <option value="<?php echo $donnees['Numfacture']; ?>"> <?php echo $donnees['Numfacture']; ?></option> 
                <?php  
                }
                ?>  
                </select>
        </fieldset>
        	<input type="submit" name="Valider">
        	<input type="reset" name="Annuler">
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