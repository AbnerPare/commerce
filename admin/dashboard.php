<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href=".../style.css">
    <title>COMMERCE</title>
    <style>
      a{text-decoration: none;
      color: white;
    }
    .navbar-toggler{background-color: white;}
    </style>
</head>
<body>
<nav class="navbar navbar-expand-md " style="background-color: black ;">
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
            <a class="nav-link active text-white fw-bold" href="http://localhost/exophp/COMMERCE/index.php">ACCUEIL</a>
              </li>
              <li class="nav-item">
                <a class="nav-link"  style="color:white " href="#">PRODUITS</a>
              </li>
              <li class="nav-item">
                <a class="nav-link"  style="color:white " href=#>CONTACT</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
<br>
<hr>


<div class="container">

<div class="row">
    
    <?php
        
    if (!isset($_POST['libelle'])) {
    ?>
    <div class="col-1">

</div>
        <div class="col-8">
            <h1>
Ajout De produit
            </h1>

            <form method="post" action="" >
                <div class="form-group">
                    <label for="exampleInputEmail1">Libelle du produit</label>
                    <input type="text" name="libelle" class="form-control" id="exampleInputEmail1" aria-describedby="Libelle" placeholder="Entre le libelle du produit" required>
                </div>
                <br>
                <div class="form-group">
                    <label for="exampleInputPassword1">Prix</label>
                    <input type="number" name="prix_unitaire" class="form-control" id="exampleInputPassword1" placeholder="Entrer le prix du produit" required>
                </div>

                <div class="form-group">
                    <label for="exampleInputPassword1">Image</label>
                    <input type="file" name="image" class="form-control" id="exampleInputPassword1" placeholder="Charger une image" required>
                </div>

                <div class="col text-center">
                    <br>
                    <button type="submit" class="btn btn-success">Submit</button>

                </div>
            </form>
        </div>
    <?php
    } else { ?>

<?php
    // Database configuration
    $host = 'localhost';
    $dbName = 'bd_commerce';
    $user = 'root';
    $password = '';

    $libelle =$_POST['libelle']; 
    $prix =$_POST['prix_unitaire']; 
    $image =""; 
    $image_url ="-"; 



    try {
        // Create a new PDO instance
        $pdo = new PDO("mysql:host=$host;dbname=$dbName", $user, $password);

        // Set PDO error mode to exception
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        // Prepare and execute the query
        $stmt = $pdo->prepare("INSERT INTO produits (`libelle`, `prix_unitaire`, `image`, `image_url`)
         VALUES ('".$libelle."',".$prix.", '".$image."','".$image_url."');");
        $stmt->execute();

        // Fetch all the rows as associative arrays
        echo 'Produit ajouté !  ';
    } catch (PDOException $e) {
        echo 'Connection failed: ' . $e->getMessage();
    }

    
    } ?>






</div>
</div>


<br>
<footer style="background-color: black; color:white">
        <div class="container">
          <div class="row">
            <div class="col-sm"><h3>Nos Produits</h3>
      <ul>
        <li><a href="#">Fruits</a></li><br>
        <li><a href="#">Légumes</a></li><br>
        <li><a href="#">Produits laitiers</a></li>
      </ul></div>
            <div class="col-sm"><h3>Contactez-nous</h3>
      <ul>
        <li><a href="mailto:abnerpare902@gmail.com">Service client</a></li>
        <li><a href="#">Support technique</a></li>
        <li><a href="#">Partenariats</a></li>
      </ul></div>
            <div class="col-sm"> <h3>Informations</h3>
        <ul>
          <li><a href="#">À propos de nous</a></li><br>
          <li><a href="#">Livraison</a></li><br>
          <li><a href="#">Politique de confidentialité</a></li>
          <li><a href="#">Conditions d'utilisation</a></li>
        </ul></div>
            <div class="col-sm"><br><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d249418.71666265876!2d-1.6844809011733781!3d12.371713490358722!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xe2ebe2748204959%3A0x826cd7f95e6a1f57!2sZoungrana%20Hamado!5e0!3m2!1sfr!2sbf!4v1686069896678!5m2!1sfr!2sbf" width="200" height="100" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe></div>
            <div class="col">  <ul class="social-media">
            <li><a href="#"><i class="fab fa-facebook"></i>aaa</a></li><br>
            <li><a href="#"><i class="fab fa-twitter"></i>bbb</a></li><br>
            <li><a href="#"><i class="fab fa-instagram"></i>ccc</a></li>
          </ul>
       </div>
          </div>
        </div>
      <div class="row">
        <div class="col"><div class="footer-bottom">
    <p style="text-align: center;">&copy; 2023 Site Alimentaire. Tous droits réservés.</p>
  </div></div>
      </div>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>
</html>