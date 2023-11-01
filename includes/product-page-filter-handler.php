<?php

//function just generates a random int and generates a product field of 4
function generateRandomProducts(){
    $productArray = getFilterResult();
    $rndInt = rand(0,6);

    foreach (array_slice($productArray, $rndInt, 4) as $value) {
        echo "<div class=\"product\"><div class=\"blur-overlay\" onclick=\"redirectToProduct(" . $value['ProductID'] . ")\"><img src=" . $value['ProductThumbnail'] . " alt=\"Intel sok\">";
        echo "<p>" . $value['ProductName'] . "</p>";
        echo "<p>" . $value['ProductProperties']['Price'] . "</p>";
        echo "</div><button class=\"button-overlay\">Go to Product</button></div>";
    }
}

//function just adds buttons when more than 6 products are generated
function generatePaging(){
    if(count(getFilterResult()) > 6){
        echo "        <form method=\"get\" class=\"paging-nav\">
        <input type=\"submit\" name=\"page\" value=\"1\" class=\"page-button\">
        <input type=\"submit\" name=\"page\" value=\"2\" class=\"page-button\">
    </form>";
    }
}

function generateProductPage()
{
    //fetch the data from function bellow
    $productArray = getFilterResult();

    $indexOffset = 0;

    //checks whether the page is equal to ' ' or 1
    //supplies offset depending on page
    if(isset($_GET['page'])){
        if($_GET['page'] == 2){
            $indexOffset = 6;
        }
    }
    
    //generate html code based on the offset
    foreach (array_slice($productArray, $indexOffset, 6) as $value) {
        echo "<div class=\"product\"><div class=\"blur-overlay\" onclick=\"redirectToProduct(" . $value['ProductID'] . ")\"><img src=" . $value['ProductThumbnail'] . " alt=\"Intel sok\">";
        echo "<p>" . $value['ProductName'] . "</p>";
        echo "<p>" . $value['ProductProperties']['Price'] . "</p>";
        echo "</div><button class=\"button-overlay\">Go to Product</button></div>";
    }
}

function getFilterResult()
{
    $json_file = file_get_contents('./assets/json/products.json');
    $products = json_decode($json_file, true);

    //on page load or when user doesnt supply correct data
    if(!isset($_GET['colorFilter']) && !isset($_GET['collection']))
    {
        //returns all socks
        return $products;
    }
    else
    {
        $color = null;
        $collection = null;

        // Check whether colorFilter is empty or not
        if(isset($_GET['colorFilter']) && $_GET['colorFilter'] != '')
            $color = filter_var($_GET['colorFilter'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);

        // Check whether collection is empty or not
        if(isset($_GET['collection']) && $_GET['collection'] != '')
            $collection = filter_var($_GET['collection'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);

        $queriedProducts = array();

        //Determine what products will be given back
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
