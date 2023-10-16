<?php

function generateProductPage()
{
    $productArray = getFilterResult();

    foreach($productArray as $key=>$value)
    {
        echo"<div class=\"product\"><img src=" . $value['ProductThumbnail'] . " alt=\"Intel sok\">";
        echo"<p>" . $value['ProductName'] . "</p>";
        echo"<p>" . $value['ProductProperties']['Price'] . "</p>";
        echo"<input type=\"hidden\" value=" . $key ."></div>";
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