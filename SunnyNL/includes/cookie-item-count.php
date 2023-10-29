<?php
function getCartItemCount(){
    $cookie_name = "shopping-cart-content";

    $itemCount = 0;

    if(!empty($_COOKIE[$cookie_name])){
        $cookie_array = json_decode($_COOKIE[$cookie_name],TRUE);
        foreach($cookie_array as $value){
            $itemCount = $itemCount + $value;
        }
    }
    return $itemCount;
}
?>