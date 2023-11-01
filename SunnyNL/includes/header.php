<link rel="stylesheet" href="./assets/css/includes/header.css">

<div class="header">
  <div class="logo-container">
    <a href="./index.php">
    <img
      loading="lazy"
      src="assets/img/logo/logo.png"
      class="logo"
      alt="logo"></a>
    <div class="menu-justify-end">
      <div class="menu-align-stretch">
        <div class="menu-align-flex-start">
          <div class="menu-container">
            <?php
              if(basename($_SERVER['PHP_SELF']) == "index.php")
                echo "<div class=\"menu-border\"></div>";
            ?>
            <div class="menu-home"><a href="./index.php">Home</a></div>
          </div>
          <div class="menu-container">
          <?php
              if(basename($_SERVER['PHP_SELF']) == "product-page.php")
                echo "<div class=\"menu-border\"></div>";
            ?>
          <div class="menu-shop-all"><a href="./product-page.php">Winkelen</a></div>
          </div>
          <div class="menu-container">
          <?php
              if(basename($_SERVER['PHP_SELF']) == "collections.php")
                echo "<div class=\"menu-border\"></div>";
            ?>
          <div class="menu-collections"><a href="./collections.php">Collecties</a></div>
          </div>
          <div class="menu-container">
          <?php
              if(basename($_SERVER['PHP_SELF']) == "contact.php")
                echo "<div class=\"menu-border\"></div>";
            ?>
          <div class="menu-contact"><a href=./contact.php>Contact</a></div>
          </div>
        </div>
        <div class="lang-change">
          <a href="../Sunny/SunnyNL/">NL|EN</a>
        </div>
        <div class="cart" >
          <a href="./shopping-cart.php">
          <img
            loading="lazy"
            src="assets/img/svg/shopping-cart.svg"
            class="cart-icon"
            id="cart-button"
            onclick="dropdown.style.display = 'block';"
            alt="logo">
          </a>
          <div class="cart-count"><?php include('cookie-item-count.php'); echo getCartItemCount(); ?></div>

    
        </div>
        </div>
      </div>
    </div>
  </div>