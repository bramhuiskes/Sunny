<?php
    

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
        catch (e)
        {
            echo "er is een fout opgetreden";
        }
    }

    function addShoppingCart($key, $value)
    {
        $cookie_name = "shopping-cart-content";
        try{
            $cookie_array = array();

            if(!empty($_COOKIE[$cookie_name]))
            {
                $cookie_array = json_decode($_COOKIE[$cookie_name],TRUE);
                
            }
            $cookie_array[$key] = $value;
            setcookie($cookie_name,json_encode($cookie_array), time() + (86400 * 30), "/");
        } 
        catch (e)
        {
            echo "er is een fout opgetreden";
        }
    }
?>