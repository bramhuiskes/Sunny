<?php

include "./includes/set-cookie.php";

if($_SERVER["REQUEST_METHOD"] == "POST")
{
    addShoppingCart($_GET['product-key'], ((int) $_POST['amount']));
    
    $added = "Item added to shoppingcart";
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Single Product | Sunny</title>
    <link rel="stylesheet" href="./assets/css/single-product-page.css">
    <link rel="stylesheet" href="./assets/css/style.css">
    <link rel="icon" href="./assets/img/favicon/favicon.png" type="image/png">
    <script src="./assets/js/script.js"></script>
</head>
<body>
    <?php include "./includes/header.php" ?>
    <?php
    
        if(isset($added)){
            echo "<div class=\"messageShoppingcart active\">
                <p>{$added}</p>
            </div>";
        }
    ?>
    
    <div class="wrapper">
        <div class="container">
            <div class="productenTotaal">
                <?php
                    $json_file = file_get_contents('./assets/json/products.json');
                    $products = json_decode($json_file, true);
                    $imgUrl = "";
                    $img2Url = "";
                    $productName = "";
                    foreach($products as $key=>$value)
                    {
                        if($_GET['product-key'] == $key)
                        {
                            $productName = $products[$key]["ProductName"];
                            $imgUrl = $products[$key]["ProductThumbnail"];
                            $img2Url = "./assets/img/products/Sunny-socks" . (($products[$key]["ProductProperties"]["Collection"] != "Stripes")? "-uni" : "") .  "-" . strtolower($products[$key]["ProductProperties"]["Color"]) .".jpg";
                        }
                    }
                ?>
                <div class="bijproducten">
                    <img src="<?php echo $img2Url;?>" alt="Sock">
                    <img src="<?php echo $imgUrl;?>" alt="Sock">
                </div>
                <div class="hoofdproduct">
                    <img src="<?php echo $img2Url; ?>" alt="Sock">
                </div>
            </div>
            <div class="productdetail">
                <h1><?php echo $productName;?></h1>
                <div class="reviews">
                    <img src="./assets/img/products/vector.png" alt="Ster">
                    <img src="./assets/img/products/vector.png" alt="Ster">
                    <img src="./assets/img/products/vector.png" alt="Ster">
                    <img src="./assets/img/products/vector.png" alt="Ster">
                    <img src="./assets/img/products/vector.png" alt="Ster">
                    <p>(0 Customer Reviews)</p>
                </div>

                <p>€3,99</p>
                <p>Nemo enim ipsam voluptatem quia
                    est voluptas sit aspernatur aut qui
                    odit aut sed fugit, quia consequuntur magni dolores eos
                    ratione voluptatem sequi nesciunt neq ue porro quisquam.
                </p>
                <form method="post" action="?product-key=<?php echo $_GET["product-key"]; ?>">
                    <div class="productdetail__Btn">
                        <select name="SelectSize" class="btn" required>
                            <option value="" disabled selected hidden>Select size</option>
                            <option value="standard">37-40</option>
                        </select>
                        <div class="counterContainer">
                            <div class="counter">
                                <button type="button" onclick="min()">-</button>
                                <div class="getal">
                                    <input class="input-getal" type="text" name="amount" value="1" id="amount">
                                </div>
                                <button type="button" onclick="plus()">+</button>

                            </div>
                            <button type="submit" class="cartBtn">
                                Add to cart
                            </button>
                        </div>
                    </div>
                </form>

            </div>
        </div>
        <div class="dispriction">

            <nav>
                <button class="dispriction__Btn active">DESCRIPTION</button>
                <button class="dispriction__Btn">ADDITIONAL INFORMATION</button>
                <button class="dispriction__Btn">REVIEWS(0)</button>
            </nav>
            <div class="dispriction__Content">
                <span>
                    Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                    Autem, aspernatur itaque! Quaerat animi officiis quos aliquid eos esse alias temporibus,
                    optio, ducimus autem totam voluptatum necessitatibus earum. Consequatur, fugit atque.
                </span>
                <div>
                    <h2>MADE IN</h2>
                    <p>Portugal</p>
                </div>
                <div>
                    <h2>COMPOSITION</h2>
                    <p>100% Organic Cotton</p>
                </div>

            </div>

        </div>
        <div class="relatedproducts">
            <h2>Related products</h2>
            <div class="productwrapper">
                <div class="sokcontainer" onclick="goToProduct(202);">
                    <img src="./assets/img/products/sokken-uni-pink.png" alt="Pink Sock" class="sokcontainer__img">
                    <div class="sokcontainer__info">
                        <p>CLASSIC UNI COLOR PINK</p>
                        <span>€ 3,99</span>
                    </div>

                </div>
                <div class="sokcontainer" onclick="goToProduct(200);">
                    <img src="./assets/img/products/sokken-uni-blue.png" alt="Blue Sock" class="sokcontainer__img">
                    <div class="sokcontainer__info">
                        <p>CLASSIC UNI COLOR BLUE</p>
                        <span>€ 3,99</span>
                    </div>
                </div>
                <div class="sokcontainer" onclick="goToProduct(204);">
                    <img src="./assets/img/products/sokken-uni-yellow.png" alt="Yellow Sock" class="sokcontainer__img">
                    <div class="sokcontainer__info">
                        <p>CLASSIC UNI COLOR YELLOW</p>
                        <span>€ 3,99</span>
                    </div>

                </div>

            </div>
        </div>


    </div>

    <?php include "./includes/footer.php" ?>

</body>

</html>