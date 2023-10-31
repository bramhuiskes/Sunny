<link rel="stylesheet" href="./assets/css/includes/header.css">

<div class="header">
  <div class="logo-container">
    <a href="./index.php">
    <img
      loading="lazy"
      src="assets/img/logo/logo.png"
      class="logo"
    /></a>
    <div class="menu-justify-end">
      <div class="menu-align-stretch">
        <div class="menu-align-flex-start">
          <div class="menu-container">
            <div class="menu-border"></div>
            <div class="menu-home"><a href="./index.php">Home</a></div>
          </div>
          <div class="menu-shop-all"><a href="./product-page.php">Winkelen</a></div>
          <div class="menu-collections"><a href="./collections.php">COLLECTIES</a></div>
          <div class="menu-contact"><a href=./contact.php>CONTACT OPNEMEN</a></div>
        </div>
        <div class="cart" >
          <img
            loading="lazy"
            src="assets/img/svg/shopping-cart.svg"
            class="cart-icon"
            id="cart-button"
            onclick="dropdown.style.display = 'block';"
          />
          <div class="cart-count"><?php include('cookie-item-count.php'); echo getCartItemCount(); ?></div>

    
        </div>
        </div>
      </div>
    </div>
  </div>