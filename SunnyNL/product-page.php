<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sunny | Product page</title>
    <link rel="stylesheet" href="assets/css/product-page.css">
    <link rel="stylesheet" href="./assets/css/style.css" type="text/css">
    <script src="./assets/js/product-page.js"></script>
    <link rel="icon" href="./assets/img/favicon/favicon.png" type="image/png">

</head>
<body>
    <?php
        include "includes/header.php"
    ?>
    <div class="product-page">
        <div class="filter-collumn">
            <form method="get" action="./product-page.php" class="filter-container">
                <h2 class="headings-filters">Categorie</h2>
                <div class="dot-container">
                <?php if(isset($_GET['collection']) && $_GET['collection'] == "Uni kleur")
                    echo "&#x2022";
                 ?>
                 <input type="submit" name="collection" value="Uni kleur" class="filter-items">
                </div>
                <div class="dot-container">
                <?php if(isset($_GET['collection']) && $_GET['collection'] == "Gestreept")
                    echo "&#x2022";
                 ?>
                 <input type="submit" name="collection" value="Gestreept" class="filter-items">
                </div>
                <h2 class="headings-filters">Kleuren</h2>
                <div class="dot-container">
                <?php if(isset($_GET['colorFilter']) && $_GET['colorFilter'] == "Groen")
                    echo "&#x2022";
                 ?>
                <input type="submit" name="colorFilter" value="Groen" class="filter-items">
                </div>
                <div class="dot-container">
                <?php if(isset($_GET['colorFilter']) && $_GET['colorFilter'] == "Blauw")
                    echo "&#x2022";
                 ?>
                <input type="submit" name="colorFilter" value="Blauw" class="filter-items">
                </div>
                <div class="dot-container">
                <?php if(isset($_GET['colorFilter']) && $_GET['colorFilter'] == "Roze")
                    echo "&#x2022";
                 ?>
                <input type="submit" name="colorFilter" value="Roze" class="filter-items">
                </div>
                <div class="dot-container">
                <?php if(isset($_GET['colorFilter']) && $_GET['colorFilter'] == "Rood")
                    echo "&#x2022";
                 ?>
                <input type="submit" name="colorFilter" value="Rood" class="filter-items">
                </div>
                <div class="dot-container">
                <?php if(isset($_GET['colorFilter']) && $_GET['colorFilter'] == "Geel")
                    echo "&#x2022";
                 ?>
                <input type="submit" name="colorFilter" value="Geel" class="filter-items">
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
            include('./includes/product-page-filter-handler.php');
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