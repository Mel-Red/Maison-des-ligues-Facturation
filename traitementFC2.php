<head>
		<meta charset="utf-8"/>
		<title>Facture</title>
    <type="text/css"media="print"/>
</head>
<body>
  <?php
    require_once('FonctionFC.php');
    $numfac = $_POST['NomFC'];
    
  ?>
  <div class="print">
    <p class="CROSL">
      <strong>CROSL</strong><br>
      Maison Régionale des Sports de Lorraine <br>
      13 rue Jean Moulin <br>
      BP 70001<br>
      54510 TOMBLAINE <br>
      Siret 31740105700029<br>
      Tel 03.83.18.87.02<br>
      Fax 03.83.18.87.02<br>
    </p>
    <p class="Dest" align="right">
      <?php NomLig2($numfac);?><br>
      <?php NomTre2($numfac);?><br>
      Maison Régionale des Sports de Lorraine<br>
      13 rue Jean Moulin<br>
      54510 TOMBLAINE<br>
  </p>
  <p>
    
  </p>
    <p class="InfoFC" align="center">
      <?php DNCE2($numfac)?><br>
    </p>
    <p>
      <?php pres21($numfac)?><br>
    </p>
    <p class="Bas">
      Déclaré à la préfecture de Meurthe et Moselle N°3898<br>
      Domiciliation bancaire 10278046500016691104505<br>
      Merci de bien vouloir préciser les références de la facture acquittée<br>
      TVA non applicble<br>
    </p>
  </div>
  <button onclick="window.print()">Imprimer votre facture</button><br>
  <a href="Archive.php">Retour</a>
</body>
