// Get the dropdown
var dropdown = document.getElementById("cart-dropdown");

// Get the button that opens the dropdown
var btn = document.getElementById("cart-button");

// When the user clicks on the button, open the dropdown
btn.onclick = function () {
  dropdown.style.display = "block";
};

// When the user clicks anywhere outside of the dropdown, close it
window.onclick = function (event) {
  if (!event.target.matches("#cart-button")) {
    dropdown.style.display = "none";
  }
};

// Initialize the cart total to 0
var cartTotal = document.getElementById("cart-total");
cartTotal.innerText = "$0.00";

// Add this function to add items to the cart
function addToCart(item, price) {
  var cartItems = document.getElementById("cart-items");
  var li = document.createElement("li");
  li.appendChild(document.createTextNode(item + " - $" + price));
  cartItems.appendChild(li);

  // Update cart total
  var currentTotal = parseFloat(cartTotal.innerText.replace("$", ""));
  cartTotal.innerText = "$" + (currentTotal + parseFloat(price)).toFixed(2);
}

// Add a new item to the cart
addToCart("Sock 1", "9.99");
addToCart("Sock 1", "9.99");

var viewCartButton = document.getElementById("view-cart-button");

// When the user clicks on the view cart button, go to the cart page
viewCartButton.onclick = function () {
  window.location.href = "cart.php";
};
