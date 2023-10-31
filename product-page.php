<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sunny | Product page</title>
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
                <h2 class="headings-filters">Category</h2>
                <div class="dot-container">
                <?php if(isset($_GET['collection']) && $_GET['collection'] == "Uni Color")
                    echo "&#x2022";
                 ?>
                 <input type="submit" name="collection" value="Uni Color" class="filter-items">
                </div>
                <div class="dot-container">
                <?php if(isset($_GET['collection']) && $_GET['collection'] == "Stripes")
                    echo "&#x2022";
                 ?>
                 <input type="submit" name="collection" value="Stripes" class="filter-items">
                </div>
                <h2 class="headings-filters">Colors</h2>
                <div class="dot-container">
                <?php if(isset($_GET['colorFilter']) && $_GET['colorFilter'] == "Green")
                    echo "&#x2022";
                 ?>
                <input type="submit" name="colorFilter" value="Green" class="filter-items">
                </div>
                <div class="dot-container">
                <?php if(isset($_GET['colorFilter']) && $_GET['colorFilter'] == "Blue")
                    echo "&#x2022";
                 ?>
                <input type="submit" name="colorFilter" value="Blue" class="filter-items">
                </div>
                <div class="dot-container">
                <?php if(isset($_GET['colorFilter']) && $_GET['colorFilter'] == "Pink")
                    echo "&#x2022";
                 ?>
                <input type="submit" name="colorFilter" value="Pink" class="filter-items">
                </div>
                <div class="dot-container">
                <?php if(isset($_GET['colorFilter']) && $_GET['colorFilter'] == "Red")
                    echo "&#x2022";
                 ?>
                <input type="submit" name="colorFilter" value="Red" class="filter-items">
                </div>
                <div class="dot-container">
                <?php if(isset($_GET['colorFilter']) && $_GET['colorFilter'] == "Yellow")
                    echo "&#x2022";
                 ?>
                <input type="submit" name="colorFilter" value="Yellow" class="filter-items">
                </div>
                
            </form>
            <?php if(isset($_GET['colorFilter']) || isset($_GET['collection'])){
                echo "            <form class=\"reset-form\" method=\"get\" action=\"./product-page.php\">
                <input type=\"submit\" value=\"Reset Filter Set\" class=\"reset-filter-items\">
            </form>";
            } ?>
            <img src="assets/img/products/actie.png" alt="Sale ad" class="actie-img">
        </div>
        <div class="flex-container">
            <?php
            include('product-page-filter-handler.php');
            generateProductPage();
            generatePaging();
            ?>
        </div>
    </div>
    <?php
    include "./includes/cta.php";
    include('./includes/footer.php');
    ?>
</body>
</html>