<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>image </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>

<body>
    <div class="container">
        <div class="bg-primary p-2">
           <h3>
           Images avec Blob
           </h3> 
        </div>
        <div class="row">


            <?php
            // Database configuration
            $host = 'localhost';
            $dbName = 'bd_commerce';
            $user = 'root';
            $password = '';

            try {
                // Create a new PDO instance
                $pdo = new PDO("mysql:host=$host;dbname=$dbName", $user, $password);

                // Set PDO error mode to exception
                $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

                // Prepare and execute the query
                $stmt = $pdo->prepare("SELECT * FROM produits");
                $stmt->execute();

                // Fetch all the rows as associative arrays
                $products = $stmt->fetchAll(PDO::FETCH_ASSOC);

                // Loop through the products and display their details
                foreach ($products as $product) {
            ?>
                    <div class="col-6 p-5">
                        <div class="card">
                            <div class="card-header">
                                ID:<?= $product['id'] ?>
                            </div>
                            <div class="card-body">
                                <img src="data:image/jpeg;base64,<?= base64_encode($product['image']) ?>" width="100%" alt="Product" title="image" />

                            </div>
                            <div class="card-footer"> <?= $product['libelle'] ?> | <?= $product['prix_unitaire'] ?> FCFA </div>

                        </div>
                    </div>
            <?php


                }
            } catch (PDOException $e) {
                echo 'Connection failed: ' . $e->getMessage();
            }
            ?>
        </div>
        <div class="bg-primary p-2">
           <h3>
           Images avec URL
           </h3> 
        </div>
        <div class="row">
        </div>
    </div>
</body>

</html>