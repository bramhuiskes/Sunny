<?php

function generateProductPage()
{
    $productArray = getFilterResult();

    var_dump($productArray);
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