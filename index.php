<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sunny | Home</title>
  <link href="assets/css/includes/header.css" rel="stylesheet">
  <link rel="stylesheet" href="assets/css/homepage.css">
  <script src="./assets/js/product-page.js"></script>
  <link rel="icon" href="./assets/img/favicon/favicon.png" type="image/png">


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
            <img loading="lazy" src="assets/img/illustrations/orange.png" class="orange-sock" alt="Orange Sock Illustration">
            <img loading="lazy" src="assets/img/illustrations/yellow.png" class="yellow-sock" alt="Yellow Sock Illustration">
          </div>
        </div>
        <section class="buttons-section">
          <h6>&nbsp;</h6>
          <div class="buttons-container">
            <div class="view-all-button"><a href="product-page.php">view all products</a></div>
            <div class="view-all-divider"></div>
            <div class="our-collections-divider"></div>
            <div class="our-collections-button"><a href="collections.php">OUR COLLECTIONS</a></div>
            <div class="our-vision-button">READ OUR VISION FOR A BETTER FUTURE</div>
          </div>
        </section>
      </div>
    </div>
  </div>
  <div class="scroll-section">
    <div class="scroll-inner">
      <div class="scroll-semi-container scroll-container">
        <div class="scroll-item">-</div>
        <div class="scroll-item scroll-text">WORLDWIDE SHIPPING</div>
        <div class="scroll-item">-</div>
        <div class="scroll-item scroll-text">WORLDWIDE SHIPPING</div>
        <div class="scroll-item">-</div>
        <div class="scroll-item scroll-text">WORLDWIDE SHIPPING</div>
        <div class="scroll-item">-</div>
        <div class="scroll-item scroll-text">WORLDWIDE SHIPPING</div>
        <div class="scroll-item">-</div>
        <div class="scroll-item scroll-text">WORLDWIDE SHIPPING</div>
        <div class="scroll-item">-</div>
        <div class="scroll-item scroll-text">WORLDWIDE SHIPPING</div>
        <div class="scroll-item">-</div>
        <div class="scroll-item scroll-text">WORLDWIDE SHIPPING</div>
        <div class="scroll-item">-</div>
        <div class="scroll-item scroll-text">WORLDWIDE SHIPPING</div>
        <div class="scroll-item">-</div>
        <div class="scroll-item scroll-text">WORLDWIDE SHIPPING</div>
        <div class="scroll-item">-</div>

      </div>
    </div>

    <div class="blocks-section">
      <div class="blocks-container">
        <div class="column-9">
          <div class="pink-edition-section">
            <div class="pink-edition-container">
              <div class="pink-edition-images">
                <div class="column-10">
                  <img loading="lazy" src="assets/img/catalogus/pink.jpg" class="red-sock" alt="Red Sock">
                </div>
                <div class="column-11">
                  <div class="pink-edition-text-container">
                    <div class="pink-edition-text">
                      Our New Pink Edition
                    </div>
                    <div class="shop-now-button">
                      <a href="product-page.php?colorFilter=Pink">
                        <div class="shop-now-text">SHOP NOW</div>
                      </a>
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
                  <img loading="lazy" src="assets/img/catalogus/red.jpg" class="red-sock" alt="Red Sock">
                </div>
                <div class="column-11">
                  <div class="sale-text-container">
                    <div class="sale-text">
                      Sale
                      <br>
                      Up to 50% off
                    </div>
                    <div class="shop-now-button">
                      <a href="product-page.php">
                        <div class="shop-now-text">SHOP NOW</div>
                      </a>
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
    include('./includes/product-page-filter-handler.php');
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
                  <img loading="lazy" src="assets/img/svg/arrow.svg" class="arrow" alt="Arrow">
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
                  <div class="value-block-title">Colorful</div>
                  <img loading="lazy" src="assets/img/svg/arrow.svg" class="arrow" alt="Arrow">
                </div>
                <div class="value-description">
                  We like to add some color to one of the the most everyday moments of life: putting on your socks. We add literal color by designing simple basic white socks a pop of color.
                </div>
              </div>
            </div>
          </div>
          <div class="column-12">
            <div class="value-block-container">
              <div class="value-block-title-container">
                <div class="value-block-title-inner">
                  <div class="value-block-title">Beneficial</div>
                  <img loading="lazy" src="assets/img/svg/arrow.svg" class="arrow" alt="Arrow">
                </div>
                <div class="value-description">
                  We like win-win situations. When we produce and sell our socks it is beneficial for everyone involved. The sells person has a nice job. The raw materi- als are gained in such a way it does not harm the earth. The production is done with the enivironment in mind and with an honest waige for the people working in the factories. The shops that sell our sock make a fair provit. And last but not least: the costumer gets high quality socks for a fair price.
                </div>
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