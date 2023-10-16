<?php
$cookie_name = "shopping-cart-content";
$cookie_array = array("101" => 4,"102" => 5,"201" => 6);

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
        
        <?php
            if(isset($_COOKIE[$cookie_name])){
                $cookie_array = json_decode($_COOKIE[$cookie_name]);

                $json_file = file_get_contents('./assets/json/products.json');

                $products = json_decode($json_file, true);

                $i = 0;

                $price = 0.0;

                echo "<div class=\"shopping-cart filled\">";

                foreach($cookie_array as $key=>$value){
                    $i++;

                    $productDetails = $products[$key];

                    $productName =  $productDetails['ProductName'];
                    $productImg = $productDetails['ProductThumbnail'];

                    $amount = $value;

                    $productProp = $productDetails['ProductProperties'];

                    $price += 
                    ($productProp['Price']*$amount);

                    echo "
                    <div class=\"item\">
                        <div class=\"detail\">
                            <div class=\"count\">
                                <p>{$i}</p>
                            </div>
                            <img src=\"{$productImg}\" alt=\"intel Sok!\">
                            <h2>{$productName}</h2>
                        </div>  
                        <div class=\"btncontainer\">
                            <p>Amount: </p>
                            <input type=\"number\" class=\"item-count\" max=\"9\" min=\"1\" value=\"{$amount}\" name=\"item-count\">
                            <a href=\"\" class=\"delete\">
                                <img src=\"./assets/img/svg/delete.svg\" alt=\"delete\">
                            </a>
                        </div>
                    </div>
                    ";
                }
                echo "</div>";

                echo "<p style=\"text-decoration: line-through;\">"."€".  $price . "</p>";

                $discount = $price/11.97;

                $discount = ((((int)round($discount))+1)*1.98);

                $price -= $discount;
                echo "€".$price;
                $arr_discount = explode(".",$discount);
                echo "<br>Discount: €". $arr_discount[0].".".substr(strval($arr_discount[1]),0,2);
            } else {
                echo "
                <div class=\"shopping-cart empty\">
                    <h1>
                        Your cart is currently empty
                    </h1>
                    <a href=\"#\" class=\"btn\">
                        RETURN TO SHOP
                    </a>
                </div>";
            }
            
        ?>
    </div>
</body>
</html>