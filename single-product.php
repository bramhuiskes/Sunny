<?php
//include the set-cookie file 
include "./includes/set-cookie.php";

//Check if productkey is not available in the head. If not available, then return to product-page.php
if(!isset($_GET['product-key'])){
    header("location: product-page.php");
}
//Check if server is a requestmethod.
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    //Returns in the set-cookie.php file
    addShoppingCart($_GET['product-key'], ((int) $_POST['amount']));

    //Message (doesn't work anymore)
    $added = "Item added to shoppingcart";

    //Load the page again without a post request so the shopping cart counter in the header will count your recently added items.
    header("location: single-product.php?product-key=".$_GET['product-key']."&timeadded=".date("h:i:sa"));
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
    <?php include "./includes/header.php";

    //The message (Doesn't work anymore)
    if (isset($added)) {
        echo "<div class=\"messageShoppingcart active\">
                <p>{$added}</p>
            </div>";
    }
    ?>
    <div class="wrapper">
        <div class="container">
            <div class="product-total">
                <?php
                
                //Get the json file and decode it
                $json_file = file_get_contents('./assets/json/products.json');
                $products = json_decode($json_file, true);
                $imgUrl = "";
                $img2Url = "";
                $productName = "";

                //Get all products available and loop through it
                foreach ($products as $key => $value) {
                    //if the productkey is the key what is in the URL
                    if ($_GET['product-key'] == $key) {
                        //Get items from the json file with the correct ID
                        $productName = $products[$key]["ProductName"];
                        $imgUrl = $products[$key]["ProductThumbnail"];
                        //Generate img url
                        $img2Url = "./assets/img/products/Sunny-socks" . (($products[$key]["ProductProperties"]["Collection"] != "Stripes") ? "-uni" : "") .  "-" . strtolower($products[$key]["ProductProperties"]["Color"]) . ".jpg";
                    }
                }
                ?>
                <div class="extra-products">
                    <img src="<?php echo $img2Url; ?>" alt="Sock">
                    <img src="<?php echo $imgUrl; ?>" alt="Sock">
                </div>
                <div class="main-product">
                    <img src="<?php echo $img2Url; ?>" alt="Sock">
                </div>
            </div>
            <div class="product-detail">
                <h1><?php echo $productName; ?></h1>
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
                    <div class="product-detail-btn">
                        <select name="SelectSize" class="btn" required>
                            <option value="" disabled selected hidden>Select size</option>
                            <option value="standard">37-40</option>
                        </select>
                        <div class="counter-container">
                            <div class="counter">
                                <button type="button" onclick="min()">-</button>
                                <div class="number">
                                    <input class="input-number" type="text" name="amount" value="1" id="amount" min='0' max='9'>
                                </div>
                                <button type="button" onclick="plus()">+</button>
                            </div>
                            <button type="submit" class="cart-btn">
                                Add to cart
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="dispriction">
            <nav>
                <button class="dispriction-btn active">DESCRIPTION</button>
                <button class="dispriction-btn">ADDITIONAL INFORMATION</button>
                <button class="dispriction-btn">REVIEWS(0)</button>
            </nav>
            <div class="dispriction-content">
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
        <div class="related-products">
            <h2>Related products</h2>
            <div class="product-wrapper">
                <div class="sock-container" onclick="goToProduct(202);">
                    <img src="./assets/img/products/sokken-uni-pink.png" alt="Pink Sock" class="sock-container-img">
                    <div class="sock-container-info">
                        <p>CLASSIC UNI COLOR PINK</p>
                        <span>€ 3,99</span>
                    </div>
                </div>
                <div class="sock-container" onclick="goToProduct(200);">
                    <img src="./assets/img/products/sokken-uni-blue.png" alt="Blue Sock" class="sock-container-img">
                    <div class="sock-container-info">
                        <p>CLASSIC UNI COLOR BLUE</p>
                        <span>€ 3,99</span>
                    </div>
                </div>
                <div class="sock-container" onclick="goToProduct(204);">
                    <img src="./assets/img/products/sokken-uni-yellow.png" alt="Yellow Sock" class="sock-container-img">
                    <div class="sock-container-info">
                        <p>CLASSIC UNI COLOR YELLOW</p>
                        <span>€ 3,99</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php include "./includes/cta.php" ?>

    <?php include "./includes/footer.php" ?>
</body>
</html>