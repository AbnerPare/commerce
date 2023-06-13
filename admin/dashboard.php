<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../CSS/style.css">
    <title>COMMERCE</title>
</head>
<body>
<nav class="navbar navbar-expand-md navbar-light ">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">
            <img src="../lo.webp" class="ron" alt="..." width="150">
          </a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link" href="#">ACCUEIL</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">PRODUITS</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href=#>CONTACT</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
<br>
<hr>
<?php 
try {
    $bdd= new PDO('mysql:host=localhost;dbname=bd_commerce','root','' );
} catch (Exception $e) {
    die( 'Erreur : ' . $e->getMessage());
}


$reponse=$bdd->query("SELECT * FROM produits");

//$donne= $reponse->fetch();

while ($donne= $reponse->fetch()) {
    echo $donne['libelle'] .' : '. $donne['prix_unitaire'] .' FCFA ','<br> <br>';
    
}

$reponse->closeCursor();
?>
      
      <footer>
      <h3>Contactez-nous</h3>
        <ul>
            <li><a href="#">Support</a></li>
            <li><a href="#">Service client</a></li>
            <li><a href="#">FAQ</a></li>
        </ul>
    </footer>
      <script src="bootstrap/js/bootstrap.min.js"></script>
</body>
</html>