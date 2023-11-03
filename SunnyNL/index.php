<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sunny | Home</title>
  <link href="assets/css/includes/header.css" rel="stylesheet">
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
            <img loading="lazy" src="assets/img/illustrations/orange.png" class="orange-sock" alt="Orange Sock Illustration">
            <img loading="lazy" src="assets/img/illustrations/yellow.png" class="yellow-sock" alt="Yellow Sock Illustration">
          </div>
        </div>
        <section class="buttons-section">
          <h6>&nbsp;</h6>
          <div class="buttons-container">
            <div class="view-all-button"><a href="product-page.php">Bekijk alle producten</a></div>
            <div class="view-all-divider"></div>
            <div class="our-collections-divider"></div>
            <div class="our-collections-button"><a href="collections.php">Onze collecties</a></div>
            <div class="our-vision-button">Lees onze visie voor een betere toekomst</div>
          </div>
        </section>
      </div>
    </div>
  </div>
  <div class="scroll-section">
    <div class="scroll-inner">
      <div class="scroll-semi-container scroll-container">
        <div class="scroll-item">-</div>
        <div class="scroll-item scroll-text">INTERNATIONALE VERZENDING</div>
        <div class="scroll-item">-</div>
        <div class="scroll-item scroll-text">INTERNATIONALE VERZENDING</div>
        <div class="scroll-item">-</div>
        <div class="scroll-item scroll-text">INTERNATIONALE VERZENDING</div>
        <div class="scroll-item">-</div>
        <div class="scroll-item scroll-text">INTERNATIONALE VERZENDING</div>
        <div class="scroll-item">-</div>
        <div class="scroll-item scroll-text">INTERNATIONALE VERZENDING</div>
        <div class="scroll-item">-</div>
        <div class="scroll-item scroll-text">INTERNATIONALE VERZENDING</div>
        <div class="scroll-item">-</div>
        <div class="scroll-item scroll-text">INTERNATIONALE VERZENDING</div>
        <div class="scroll-item">-</div>
        <div class="scroll-item scroll-text">INTERNATIONALE VERZENDING</div>
        <div class="scroll-item">-</div>
        <div class="scroll-item scroll-text">INTERNATIONALE VERZENDING</div>
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
                      Onze nieuwe roze editie
                    </div>
                    <div class="shop-now-button">
                      <a href="product-page.php?colorFilter=Pink">
                        <div class="shop-now-text">Winkelen</div>
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
                      Aanbieding
                      <br>
                      Tot 50% korting
                    </div>
                    <div class="shop-now-button">
                      <a href="product-page.php">
                        <div class="shop-now-text">Winkelen</div>
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
  <h1>Producten</h1>
  <div class="product-container">
    <?php
    include("./includes/product-page-filter-handler.php");
    generateRandomProducts();
    ?>
  </div>
  <div class="values-section">
    <div class="values-title-container">
      <div class="values-title">Onze Waarden</div>
      <div class="values-container">
        <div class="value-columns-container">
          <div class="column-12">
            <div class="value-block-container">
              <div class="value-block-title-container">
                <div class="value-block-title-inner">
                  <div class="value-block-title">Positiviteit</div>
                  <img loading="lazy" src="assets/img/svg/arrow.svg" class="arrow" alt="Arrow">
                </div>
                <div class="value-description">
                Positiviteit maakt deel uit van ons DNA. Sunny bekijkt het graag van de positieve kant. Elk probleem is een kans om tot een nieuwe oplossing te komen.
                </div>
              </div>
            </div>
          </div>
          <div class="column-12">
            <div class="value-block-container">
              <div class="value-block-title-container">
                <div class="value-block-title-inner">
                  <div class="value-block-title">Kleurrijk</div>
                  <img loading="lazy" src="assets/img/svg/arrow.svg" class="arrow" alt="Arrow">
                </div>
                <div class="value-description">
                Wij voegen graag wat kleur toe aan een van de meest alledaagse momenten van het leven: het aantrekken van je sokken. We voegen kleur toe door eenvoudige witte sokken te ontwerpen met een vleugje kleur.
                </div>
              </div>
            </div>
          </div>
          <div class="column-12">
            <div class="value-block-container">
              <div class="value-block-title-container">
                <div class="value-block-title-inner">
                  <div class="value-block-title">Gunstig</div>
                  <img loading="lazy" src="assets/img/svg/arrow.svg" class="arrow" alt="Arrow">
                </div>
                <div class="value-description">
                Wij houden van win-winsituaties. Wanneer wij onze sokken produceren en verkopen, is dat gunstig voor alle betrokkenen. De verkoper heeft een leuke baan. De grondstoffen worden zo gewonnen dat ze de aarde niet schaden. Bij de productie wordt rekening gehouden met het milieu en met een eerlijk loon voor de mensen die in de fabrieken werken. De winkels die onze sokken verkopen, verdienen een eerlijke winst. En natuurlijk krijgt de klant sokken van hoge kwaliteit voor een eerlijke prijs.
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