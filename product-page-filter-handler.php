<?php



function generateProductPage()
{
    $productArray = getFilterResult();

    foreach($productArray as $key=>$value)
    {
        echo"<div class=\"temp-product\"><img src=" . $value['ProductThumbnail'] . " alt=\"Intel sok\">";
        echo"<p>" . $value['ProductName'] . "</p>";
        echo"<p>" . $value['ProductProperties']['Price'] . "</p></div>";
    }

    return $productArray;
}

function getFilterResult()
{
    $json_file = file_get_contents('./assets/json/products.json');
    $products = json_decode($json_file, true);

    if(!isset($_GET['sock']))
    {
        //returns all socks
        return $products;
    }
    elseif(isset($_GET['sock']))
    {
        //returns with queried paramaters
        return;
    }
}



?>