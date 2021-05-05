    <link rel="stylesheet" href="../CSS/styleheader.css" />
    <?php
    if(!isset($_SESSION["numero"])){
    ?>
    <header class="inactive">
    <a>Validation des missions</a>
    <a>Paiement des frais</a>
    <a>Paramétrage</a>
    </header>
    <?php } else if ($_SESSION['valider'] !=1 && $_SESSION['rembourser'] !=1) {?>
    <header>
    <a id="active" href="../Controleur/logout.php">Déconnexion</a>
    <a id="inactive">Validation des missions</a>
    <a id="inactive">Paiement des frais</a>
    <a id="inactive">Paramétrage</a>
    </header>
    <?php } else if ($_SESSION['valider'] ==1 && $_SESSION['rembourser'] !=1) {?>
    <header>
    <a id="active" href="../Controleur/logout.php">Déconnexion</a>
    <a id="active" href="valider.php">Validation des missions</a>
    <a id="inactive">Paiement des frais</a>
    <a id="inactive">Paramétrage</a>
    </header>
    <?php } else if ($_SESSION['valider'] !=1 && $_SESSION['rembourser'] ==1) {?>
    <header>
    <a id="active" href="../Controleur/logout.php">Déconnexion</a>
    <a id="inactive">Validation des missions</a>
    <a id="active" href="payer.php">Paiement des frais</a>
    <a id="active" href="parametres.php">Paramétrage</a>
    </header>
    <?php } else {?>
    <header class="active">
    <a href="../Controleur/logout.php">Déconnexion</a>
    <a href="valider.php">Validation des missions</a>
    <a href="payer.php">Paiement des frais</a>
    <a href="parametres.php">Paramétrage</a>
    </header>
    <?php }
    //echo("numero : ".$_SESSION["numero"]." valider : ".$_SESSION['valider']." paiement : ".$_SESSION['rembourser']);
    ?>