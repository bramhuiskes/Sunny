<?php

function generateProductPage()
{
    $productArray = getFilterResult();

    $indexOffset = 0;

    if(isset($_GET['page'])){
        if($_GET['page'] == 2){
            $indexOffset = 6;
        }
    }
    
        foreach (array_slice($productArray, $indexOffset, 6) as $key => $value) {
            echo "<div class=\"product\"><div class=\"blur-overlay\" onclick=\"redirectToProduct(" . $value['ProductID'] . ")\"><img src=" . $value['ProductThumbnail'] . " alt=\"Intel sok\">";
            echo "<p>" . $value['ProductName'] . "</p>";
            echo "<p>" . $value['ProductProperties']['Price'] . "</p>";
            echo "</div><h2 class=\"button-overlay\">Buy!</h2></div>";
        }
}

function getFilterResult()
{
    $json_file = file_get_contents('./assets/json/products.json');
    $products = json_decode($json_file, true);

    if(!isset($_GET['colorFilter']) && !isset($_GET['collection']))
    {
        //returns all socks
        return $products;
    }
    else
    {
        $color = null;
        $collection = null;

        if(isset($_GET['colorFilter']) && $_GET['colorFilter'] != '')
            $color = filter_var($_GET['colorFilter'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);

        if(isset($_GET['collection']) && $_GET['collection'] != '')
            $collection = filter_var($_GET['collection'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);

        $queriedProducts = array();

        if($color != null && $collection != null){
            foreach($products as $value){
                if($value['ProductProperties']['Color'] == $color && $value['ProductProperties']['Collection'] == $collection){
                    array_push($queriedProducts, $value);
                }
            }
        }
        elseif($color != null){
            foreach($products as $value){
                if($value['ProductProperties']['Color'] == $color){
                    array_push($queriedProducts, $value);
                }
            }
        }
        elseif($collection != null){
            foreach($products as $value){
                if($value['ProductProperties']['Collection'] == $collection){
                    array_push($queriedProducts, $value);
                }
            }
        }

        //returns with queried parameters
        return $queriedProducts;
    }
}
?>