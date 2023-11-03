<?php
    //If the shopping cart has been changed. I don't use this anymore.
    function shoppingCartChanged()
    {
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
                    echo "werkt";
                } 
            }
        } 
        catch (Exception)
        {
            echo "er is een fout opgetreden";
        }
    }

    //add items to shopping cart (cookie), so the sock ID with the amount
    function addShoppingCart($key, $value)
    {
        //the cookie name
        $cookie_name = "shopping-cart-content";
        try{
            //create an empty array
            $cookie_array = array();

            //if cookie is not empty, so there is no cookie available to add items
            if(!empty($_COOKIE[$cookie_name]))
            {
                //get the cookie as an array (the as an array has been given with the TRUE)
                $cookie_array = json_decode($_COOKIE[$cookie_name],TRUE);
                
            }

            //add the array
            $cookie_array[$key] = $value;
            //set the cookie
            setcookie($cookie_name,json_encode($cookie_array), time() + (86400 * 30), "/");
        } 
        catch (Exception)
        {
            echo "er is een fout opgetreden";
        }
    }
?>