<div class="header">
  <div class="logo-container">
    <img
      loading="lazy"
      src="assets/img/logo/logo.png"
      class="logo"
    />
    <div class="menu-justify-end">
      <div class="menu-align-stretch">
        <div class="menu-align-flex-start">
          <div class="menu-container">
            <div class="menu-border"></div>
            <div class="menu-home">Home</div>
          </div>
          <div class="menu-new-in">NEW IN</div>
          <div class="menu-shop-all">SHOP ALL</div>
          <div class="menu-collections">COLLECTIONS</div>
          <div class="menu-contact">CONTACT US</div>
        </div>
        <div class="cart" >
          <img
            loading="lazy"
            src="assets/img/svg/shopping-cart.svg"
            class="cart-icon"
            id="cart-button"
            onclick="dropdown.style.display = 'block';"
          />
          <div class="cart-count">0</div>

        <div class="cart-container">
            <div id="cart-dropdown" class="cart-dropdown">
                <ul id="cart-items"></ul>
                <div class="cart-total">
                    <span>Total:</span>
                    <span id="cart-total"></span>
                </div>
                <button id="view-cart-button">View Cart</button>
            </div>
        </div>
        </div>
      </div>
    </div>
  </div>