<?php
$cookie_name = "shopping-cart-content";
$cookie_array = array("101","102","101");

setcookie($cookie_name,json_encode($cookie_array), time() + (86400 * 30), "/");
?>

<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sunny | Shopping Cart</title>
    <link rel="stylesheet" href="./assets/css/shopping-cart.css">
    <link rel="stylesheet" href="./assets/css/style.css">
    <link rel="icon" href="./assets/img/favicon/favicon.png" type="image/png">
</head>
<body>
    <?php include "./includes/header.php" ?>
    <div>
        <!--<div class="shopping-cart empty">
            <h1>
                Your cart is currently empty
            </h1>
            <a href="#" class="btn">
                RETURN TO SHOP
            </a>
        </div>-->
        <div class="shopping-cart filled">
            <div class="item">
                <div class="detail">
                    <div class="count">
                        <p>1</p>
                    </div>
                    <img src="./assets/img/products/sokken-stripes-blue.png" alt="intel Sok!">
                    <h2>Blue Stripe socks</h2>
                </div>  
                <div class="btncontainer">
                    <p>Amount: </p>
                    <input type="number" class="item-count" max="9" min="1" value="1" name="item-count">
                    <a href="" class="delete">
                        <img src="./assets/img/svg/delete.svg" alt="delete">
                    </a>
                </div>
            </div>
        </div>
        <?php
            if(isset($_COOKIE[$cookie_name])){
                $cookie_array = json_decode($_COOKIE[$cookie_name]);

                $json_file = file_get_contents('./assets/json/products.json');

                $products = json_decode($json_file, true);

                var_dump($products);

                foreach($cookie_array as $id){
                    $productDetails = $products[$id];

                    print $productDetails['ProductName'];
                }
            }
            
        ?>
    </div>
</body>
</html>