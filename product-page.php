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
            <h2 class="headings-filters">Category</h2>
            <a href="#" class="filters">STRIPE</a>
            <a href="#" class="filters">UNI</a>
            <h2 class="headings-filters">Colors</h2>
            <a href="#" class="filters">YELLOW</a>
            <a href="#" class="filters">RED</a>
            <a href="#" class="filters">BLUE</a>
            <a href="#" class="filters">GREEN</a>
            <a href="#" class="filters">PINK</a>
                <div class="search-button">
                    <form action="#">
                        <input type="text" placeholder="Search..." class="input" >
                        <button type= "submit">.</button>
                    </form>
                </div>
            <img src="assets/img/products/actie.png" alt="foto" class="actie-img">
        </div>
        <div class="flex-container">
            <?php
            include('product-page-filter-handler.php');
            generateProductPage();
            ?>
        </div>
</body>
</html>