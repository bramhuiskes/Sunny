function plus()
{
    if(document.getElementById("amount").value != "9")
    {
        let amount = parseInt(document.getElementById("amount").value) + 1; 
        document.getElementById("amount").value = (isNaN(amount))?"1":amount;
    }
}
function min(){
    if(document.getElementById("amount").value != "1")
    {
        let amount = parseInt(document.getElementById("amount").value) - 1; 
        document.getElementById("amount").value = (isNaN(amount))?"1":amount;
    }
}
function goToProduct(id){
    window.location = "single-product.php?product-key="+id;
}