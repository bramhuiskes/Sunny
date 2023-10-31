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
          <div class="menu-shop-all"><a href="./product-page.php">SHOP ALL</a></div>
          <div class="menu-collections"><a href="./collections.php">COLLECTIONS</a></div>
          <div class="menu-contact"><a href=./contact.php>CONTACT US</a></div>
        </div>
        <div class="cart" >
          <a href="./shopping-cart.php">
          <img
            loading="lazy"
            src="assets/img/svg/shopping-cart.svg"
            class="cart-icon"
            id="cart-button"
            onclick="dropdown.style.display = 'block';"
          />
          </a>
          <div class="cart-count"><?php include('cookie-item-count.php'); echo getCartItemCount(); ?></div>

    
        </div>
        </div>
      </div>
    </div>
  </div>