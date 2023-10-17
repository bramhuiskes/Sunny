function redirectToProduct(productID){
    if(productID != null){
        window.location = "single-product.php?product-key=" + productID;
    }
}