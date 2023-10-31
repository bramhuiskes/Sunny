<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sunny | Producten</title>
    <link rel="stylesheet" href="assets/css/product-page.css">
    <link rel="stylesheet" href="./assets/css/style.css" type="text/css">
    <script src="./assets/js/product-page.js"></script>
</head>
<body>
    <?php
        include "includes/header.php"
    ?>
    <div class="product-page">
        <div class="filter-collumn">
            <form method="get" action="./product-page.php" class="filter-container">
                <h2 class="headings-filters">Categorie</h2>
                <input type="submit" name="collection" value="Uni kleur" class="filter-items">
                <input type="submit" name="collection" value="Gestreept" class="filter-items">
                <h2 class="headings-filters">Kleuren</h2>
                <input type="submit" name="colorFilter" value="Groen" class="filter-items">
                <input type="submit" name="colorFilter" value="Blauw" class="filter-items">
                <input type="submit" name="colorFilter" value="Roze" class="filter-items">
                <input type="submit" name="colorFilter" value="Rood" class="filter-items">
                <input type="submit" name="colorFilter" value="Geel" class="filter-items">
                <img src="assets/img/products/actie.png" alt="Sale ad" class="actie-img">
            </form>
        </div>
        <div class="flex-container">
            <?php
            include('product-page-filter-handler.php');
            generateProductPage();
            ?>
                    <form method="get" class="paging-nav">
            <input type="submit" name="page" value="1" class="page-button">
            <input type="submit" name="page" value="2" class="page-button">
        </form>
        </div>
    </div>
    <?php include "./includes/cta.php" ?>
    <?php include "./includes/footer.php" ?>
</body>
</html>