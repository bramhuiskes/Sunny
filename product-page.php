<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sunny | Product page</title>
    <link rel="stylesheet" href="assets/css/product-page.css">
    <!-- <link rel="stylesheet" href="./assets/css/test-product-page.css" type="text/css"> -->
</head>
<body>
    
    <div class="product-page">
        <div class="filter-collumn">
            <form method="get" action="./product-page.php" class="filter-container">
                <h2 class="headings-filters">Category</h2>
                <input type="submit" name="collection" value="Classic">
                <input type="submit" name="collection" value="Stripes">
                <h2 class="headings-filters">Colors</h2>
                <input type="submit" name="colorFilter" value="Green">
                <input type="submit" name="colorFilter" value="Blue">
                <input type="submit" name="colorFilter" value="Pink">
                <input type="submit" name="colorFilter" value="Red">
                <input type="submit" name="colorFilter" value="Yellow">
                <img src="assets/img/products/actie.png" alt="Sale ad" class="actie-img">
            </form>
        </div>
        <div class="flex-container">
            <?php
            include('product-page-filter-handler.php');
            generateProductPage();
            ?>
        </div>
        <form method="get">
                <input type="submit" name="page" value="1">
                <input type="submit" name="page" value="2">
            </form>
</body>
</html>