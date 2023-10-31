<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sunny | Home</title>
  <link href="assets/css/includes/header.css" rel="stylesheet" />
  <link rel="stylesheet" href="assets/css/homepage.css">
  <script src="./assets/js/product-page.js"></script>

</head>

<body>
  <?php include "./includes/header.php" ?>
  <div class="slogan-container">
    <div class="feel-good-text">FEEL GOOD</div>
    <div class="sunny-container">
      <div class="sunny-inner">
        <div class="column">
          <div class="sunny-text">SUNNY</div>
        </div>
        <div class="column-2">
          <div class="socks-container">
            <img loading="lazy" src="assets/img/illustrations/orange.png" class="orange-sock" />
            <img loading="lazy" src="assets/img/illustrations/yellow.png" class="yellow-sock" />
          </div>
        </div>
        <section class="buttons-section">
          <div class="buttons-container">
            <div class="view-all-button"><a href="product-page.php">view all products</a></div>
            <div class="view-all-divider"></div>
            <div class="our-collections-divider"></div>
            <div class="our-collections-button"><a href="collections.php">OUR COLLECTIONS</a></div>
            <div class="our-vision-button">READ OUR VISION FOR A BETTER FUTURE</div>
          </div>
      </div>
    </div>
  </div>
  </section>
  </div>
  <div class="scroll-section">
    <div class="scroll-inner">
      <div class="scroll-semi-container scroll-container">
        <div class="scroll-item"></div>
        <div class="scroll-item">WORLDWIDE SHIPPING</div>
        <div class=" scroll-item"></div>
        <div class="scroll-item">WORLDWIDE SHIPPING</div>
        <div class=" scroll-item"></div>
        <div class=" scroll-item">WORLDWIDE SHIPPING</div>
        <div class=" scroll-item"></div>
        <div class=" scroll-item">WORLDWIDE SHIPPING</div>
        <div class=" scroll-item"></div>
        <div class=" scroll-item">WORLDWIDE SHIPPING</div>
        <div class=" scroll-item"></div>
        <div class=" scroll-item">WORLDWIDE SHIPPING</div>
        <div class=" scroll-item"></div>
        <div class=" scroll-item">WORLDWIDE SHIPPING</div>
        <div class=" scroll-item"></div>
        <div class=" scroll-item">WORLDWIDE SHIPPING</div>
        <div class=" scroll-item"></div>
        <div class=" scroll-item">WORLDWIDE SHIPPING</div>
        <div class=" scroll-item"></div>
        <div class=" scroll-item">WORLDWIDE SHIPPING</div>
        <div class=" scroll-item"></div>
        <div class=" scroll-item">WORLDWIDE SHIPPING</div>
      </div>
    </div>
    <div class="blocks-section">
      <div class="blocks-container">
        <div class="column-9">
          <div class="sale-section">
            <div class="sale-container">
              <div class="sale-images">
                <div class="column-10">
                  <img loading="lazy" src="assets/img/catalogus/red.jpg" class="red-sock" />
                </div>
                <div class="column-11">
                  <div class="sale-text-container">
                    <div class="sale-text">
                      Sale
                      <br />
                      Up to 50% off
                    </div>
                    <div class="shop-now-button">
                      <div class="shop-now-text">SHOP NOW</div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="column-9">
          <div class="sale-section">
            <div class="sale-container">
              <div class="sale-images">
                <div class="column-10">
                  <img loading="lazy" src="assets/img/catalogus/red.jpg" class="red-sock" />
                </div>
                <div class="column-11">
                  <div class="sale-text-container">
                    <div class="sale-text">
                      Sale
                      <br />
                      Up to 50% off
                    </div>
                    <div class="shop-now-button">
                      <div class="shop-now-text">SHOP NOW</div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <h1>Products</h1>
  <div class="product-container">
    <?php
      include("product-page-filter-handler.php");
      generateRandomProducts();
    ?>
  </div>
  <div class="values-section">
    <div class="values-title-container">
      <div class="values-title">Our Values</div>
      <div class="values-container">
        <div class="value-columns-container">
          <div class="column-12">
            <div class="value-block-container">
              <div class="value-block-title-container">
                <div class="value-block-title-inner">
                  <div class="value-block-title">Positive</div>
                  <img loading="lazy" src="assets/img/svg/arrow.svg" class="arrow" />
                </div>
                <div class="value-description">
                  Positivity is part of our DNA. Sunny likes to look on the
                  bright side. Every problem is an oppurtunity to come up with a
                  solution.
                </div>
              </div>
            </div>
          </div>
          <div class="column-12">
            <div class="value-block-container">
              <div class="value-block-title-container">
                <div class="value-block-title-inner">
                  <div class="value-block-title">Positive</div>
                  <img loading="lazy" src="assets/img/svg/arrow.svg" class="arrow" />
                </div>
                <div class="value-description">
                  Positivity is part of our DNA. Sunny likes to look on the
                  bright side. Every problem is an oppurtunity to come up with a
                  solution.
                </div>
              </div>
            </div>
          </div>
          <div class="column-12">
            <div class="value-block-container">
              <div class="value-block-title-container">
                <div class="value-block-title-inner">
                  <div class="value-block-title">Positive</div>
                  <img loading="lazy" src="assets/img/svg/arrow.svg" class="arrow" />
                </div>
                <div class="value-description">
                  Positivity is part of our DNA. Sunny likes to look on the
                  bright side. Every problem is an oppurtunity to come up with a
                  solution.
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <?php include "./includes/footer.php" ?>
</body>

</html>