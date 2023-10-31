<?php
    $cookie_name = "shopping-cart-content";
    try{
        if(!empty($_COOKIE[$cookie_name])){
            $cookie_array = json_decode($_COOKIE[$cookie_name],TRUE);
            if($_SERVER["REQUEST_METHOD"] == "POST")
            {
                
                $post_val = $_POST['item-count'];
    
                $i_array = 0;
                foreach($cookie_array as $key=>$value)
                {
                    $cookie_array[$key] = (int) $post_val[$i_array];
                    $i_array++;
                }
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
    <title>Sunny | Winkel wagen</title>
    <link rel="stylesheet" href="./assets/css/shopping-cart.css">
    <link rel="stylesheet" href="./assets/css/style.css">
    <link rel="icon" href="./assets/img/favicon/favicon.png" type="image/png">
</head>
<body>
    <?php include "./includes/header.php" ?>
    <div>
        
        <?php
            if(isset($_COOKIE[$cookie_name]) && !isset($_GET['empty']))
            {

                $json_file = file_get_contents('./assets/json/products.json');

                $products = json_decode($json_file, true);

                $i = 0;

                $price = 0.0;

                echo "<div class=\"shopping-cart filled\"><form method=\"post\" action=\"#\">";

                foreach($cookie_array as $key=>$value)
                {
                        $i++;
                        
                        $productDetails = $products[$key];
                        
                        $productName =  $productDetails['ProductName'];
                        $productImg = $productDetails['ProductThumbnail'];
                        
                        $amount = $value;
                    
                        $productProp = $productDetails['ProductProperties'];
                        if((int) $value != 0)
                        {
                            $price += 
                            ($productProp['Price']*$amount);
                        }
                        
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
                                <p>Aantal: </p>
                                <input type=\"number\" class=\"item-count\" max=\"9\" min=\"0\" value=\"{$amount}\" name=\"item-count[]\" id=\"npt{$key}\">
                                <a href=\"#\" class=\"delete\" onclick=\"delete_item({$key});\">
                                    <img src=\"./assets/img/svg/delete.svg\" alt=\"delete\">
                                </a>
                            </div>
                        </div>
                        ";
                    
                }

                echo "<input value=\"&#8634; Bewaar producten\" type=\"submit\" class=\"reload-btn\" id=\"reloadBtn\">
                </form>
                <p>Oude prijs: 
                    <b style=\"text-decoration: line-through;\">"."€".  $price . "</b>
                </p>";

                $discount = $price/11.97;
                if(floor($discount) != $discount)
                {
                    $discount -= 1;
                }
                $discount = ((((int)round($discount)))*1.98);   
                $price -= $discount;
                if($price == 0)
                {
                    echo "<script>window.location = \"?empty=true\"</script>";
                }
                echo "<p>Nieuwe prijs: <b>&euro;".$price."</b></p>";
                $arr_discount = explode(".",$discount);
                echo "<p>Korting: <b> €". (($discount!=0.00)?$arr_discount[0]:"0").".".(($discount!=0.00)?substr(strval($arr_discount[1]),0,2):"0")."</b></p>";
                echo "<div class=\"btn-div\">
                    <a href=\"#\" class=\"shop\">Verder winkelen</a>
                    <a href=\"#\" class=\"submit\">Verder naar bestellen</a>
                </div>";

                echo "</div>";
            } 
            else 
            {
                echo "
                <div class=\"shopping-cart empty\">
                    <h1>
                        Winkel wagen is leeg
                    </h1>
                    <a href=\"index.php\" class=\"btn\">
                        GA TERUG NAAR WINKEL
                    </a>
                </div>";
            }
            
        ?>
    </div>
    <script>
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