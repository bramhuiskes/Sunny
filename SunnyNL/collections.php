<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sunny | Collecties</title>
    <link rel="stylesheet" href="./assets/css/collections.css">

    <link rel="stylesheet" href="./assets/css/style.css" type="text/css">
</head>
<body>
    <?php
        include "includes/header.php"
    ?>
    
    <div class="card-container">
        <div class="card-1">
            <p class="text">Uni kleur</p>
            <a href="product-page.php?collection=Uni+Color">
            <button class="explore-button">Ontdek</button>
            </a>       
         </div>
        <div class="card-2">
            <p class="text">Gestreept</p>
            <a href="product-page.php?collection=Stripes">
            <button class="explore-button">Ontdek</button>
            </a>
        </div>
    </div>
    <?php include "./includes/cta.php" ?>
    <?php include "./includes/footer.php" ?>
</body>
</html>