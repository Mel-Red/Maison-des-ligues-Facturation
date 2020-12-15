<head>
		<meta charset="utf-8"/>
		<title>Facture</title>
    <type="text/css" media="print"/>
</head>
<body>
  <?php
    require_once('FonctionFC.php');
    $numT = $_POST['NomLi'];
    $d = $_POST['dateFC'];
    $pre1 = $_POST['pre1'];
    $p1 = $_POST['p1'];
    $pre2 = $_POST['pre2'];
    $p2 = $_POST['p2'];
    $pre3 = $_POST['pre3'];
    $p3 = $_POST['p3'];
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
      <?php NomLig($numT);?><br>
      <?php NomTre($numT);?><br>
      Maison Régionale des Sports de Lorraine<br>
      13 rue Jean Moulin<br>
      54510 TOMBLAINE<br>
  </p>
    <p class="InfoFC" align="center">
      <?php DNCE($d,$numT)?><br>
      <?php pres1 ($pre1,$p1)?>
      <?php pres2 ($pre2,$p2)?>
      <?php pres3 ($pre3,$p3)?>
    </p>
    <p>
      <?php pres()?><br>
    </p>
    <p class="Bas">
      Déclaré à la préfecture de Meurthe et Moselle N°3898<br>
      Domiciliation bancaire 10278046500016691104505<br>
      Merci de bien vouloir préciser les références de la facture acquittée<br>
      TVA non applicble<br>
    </p>
  </div>
  <button onclick="window.print()">Imprimer votre facture</button><br>
  <a href="Création.php">Retour</a>
</body>
