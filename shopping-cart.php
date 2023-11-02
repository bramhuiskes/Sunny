<?php
    $cookie_name = "shopping-cart-content";
    //try catch, if an error occurs, de code within the catch will showed
    try{
        //If cookie is not empty
        if(!empty($_COOKIE[$cookie_name])){
            //Get the cookie as an array
            $cookie_array = json_decode($_COOKIE[$cookie_name],TRUE);
            //If there was a post method in a form
            if($_SERVER["REQUEST_METHOD"] == "POST")
            {
                //Get how much items were changed, it's an array, see form
                $post_val = $_POST['item-count'];
    
                $i_array = 0;

                //Set the amount for all the cookie items
                foreach($cookie_array as $key=>$value)
                {
                    //Sets the cookie array with a int, so 1 instead of '1'
                    $cookie_array[$key] = (int) $post_val[$i_array];
                    $i_array++;
                }
                //Set the cookie for 30 days
                setcookie($cookie_name,json_encode($cookie_array), time() + (86400 * 30), "/");
            } 
        }
    } 
    catch (Exception $e)
    {
        echo "er is een fout opgetreden";
    }
?>

<!DOCTYPE html>
<html lang="en">
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
            //if the shopping cart isn't empty (in the url is no ?empty=true available) and the cookie isn't empty
            if(isset($_COOKIE[$cookie_name]) && !isset($_GET['empty']))
            {

                //get the json file
                $json_file = file_get_contents('./assets/json/products.json');

                //decode the json file so it will be an array inside a array inside an array...
                $products = json_decode($json_file, true);

                $i = 0;

                $price = 0.0;

                //the form item
                echo "<div class=\"shopping-cart filled\"><form method=\"post\" action=\"#\">";

                //loopt through all the sock id's
                foreach($cookie_array as $key=>$value)
                {
                        $i++;
                        
                        //Get items from the JSON file line 73:77
                        $productDetails = $products[$key];
                        
                        $productName =  $productDetails['ProductName'];
                        $productImg = $productDetails['ProductThumbnail'];
                        
                        //get all the amounts of the cookie
                        $amount = $value;
                    
                        //Get the product properties in the jsonfile
                        $productProp = $productDetails['ProductProperties'];

                        //value is not 0
                        if((int) $value != 0)
                        {
                            $price += 
                            ($productProp['Price']*$amount);
                        }
                        
                        //Return html
                        echo "
                        <div class=\"item\" ".(((int) $value == 0)? "style=\"display:none;\"": "").">
                            <div class=\"detail\">
                                <div class=\"count\">
                                    <p>{$i}</p>
                                </div>
                                <img src=\"{$productImg}\" alt=\"intel Sok!\">
                                <h2>{$productName}</h2>
                            </div>  
                            <div class=\"btncontainer\">
                                <p>Amount: </p>
                                <input type=\"number\" class=\"item-count\" max=\"9\" min=\"0\" value=\"{$amount}\" name=\"item-count[]\" id=\"npt{$key}\">
                                <a href=\"#\" class=\"delete\" onclick=\"delete_item({$key});\">
                                    <img src=\"./assets/img/svg/delete.svg\" alt=\"delete\">
                                </a>
                            </div>
                        </div>
                        ";
                    
                }

                echo "<input value=\"&#8634; Save items\" type=\"submit\" class=\"reload-btn\" id=\"reloadBtn\">
                </form>
                <p>Old price: 
                    <b style=\"text-decoration: line-through;\">"."€".  $price . "</b>
                </p>";

                //Calculate prices with discount
                $discount = $price/11.97;
                $discount = floor($discount);
                $discount = ((((int)round($discount)))*1.98);   
                $price -= $discount;
                //if the price is zero, so there are no products anymore, the page will redirect to shopping cart with ?empty=true (get request)
                if($price == 0)
                {
                    echo "<script>window.location = \"?empty=true\"</script>";
                }
                //return html
                echo "<p>New price: <b>&euro;".$price."</b></p>";
                $arr_discount = explode(".",$discount);
                echo "<p>Discount: <b> €". (($discount!=0.00)?$arr_discount[0]:"0").".".(($discount!=0.00)?substr(strval($arr_discount[1]),0,2):"0")."</b></p>";
                echo "<div class=\"btn-div\">
                    <a href=\"product-page.php\" class=\"shop\">Shop more</a>
                    <a href=\"#\" class=\"submit\">Checkout</a>
                </div>";
                echo "</div>";
            } 
            //say that there is no item available in the cookie. So ?empty=true
            else 
            {
                echo "
                <div class=\"shopping-cart empty\">
                    <h1>
                        Your cart is currently empty
                    </h1>
                    <a href=\"index.php\" class=\"btn\">
                        RETURN TO SHOP
                    </a>
                </div>";
            }
            
        ?>
    </div>
    <script>
        //The delete function
        function delete_item(id)
        {
            document.getElementById("npt"+id).value = 0;
            document.getElementById("reloadBtn").click();
        }
    </script>
        <?php include "./includes/cta.php" ?>

    <?php include "./includes/footer.php" ?>

</body>
</html>