<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="assets/css/faq.css">

    <link rel="stylesheet" href="./assets/css/style.css" type="text/css">

</head>
<body>
    <div>
        
        <?php
        include "includes/header.php"
        ?>
    </div>
        
    <div class="accordion">
        <div class="header-div">
            <h2 class="header">FAQ's</h2>
        </div>
        <div class="box">
            <div class="label">Hoe lang duurt de verzending?</div>
            <div class="content">
                <p>Meestal duurt de verzending 2 tot 4 werkdagen.</p>
            </div>
        </div>
        <div class="box">
            <div class="label">Hoe kan ik de artikelen retourneren?</div>
            <div class="content">
                <p>U kunt uw artikelen retourneren door ons een e-mail te sturen met daarin de reden waarom u de artikelen wilt retourneren, uw persoonlijke gegevens en ordernummer. Nadat u dat heeft gedaan proberen wij zo snel mogelijk contact met u op te nemen om de retourzending af te ronden.
                </p>
            </div>
        </div>
        <div class="box">
            <div class="label">Worden uitverkochte artikelen aangevuld?</div>
            <div class="content">
                <p>Ja, ons team werkt er zo hard mogelijk aan om de artikelen zo snel mogelijk aan te vullen.</p>
            </div>
        </div>
        <div class="box">
            <div class="label">Hoe kan ik in contact komen met de klantenservice?</div>
            <div class="content">
                <p>De snelste manier om contact met ons op te nemen is door naar de contactpagina te gaan, daar vult u uw e-mailadres in en typt u het bericht dat u wilt verzenden. Een andere manier is om naar onze social media te gaan en daar je bericht te sturen.
                </p>
            </div>
        </div>
        <div class="box">
            <div class="label">Wat zijn de verzendkosten?</div>
            <div class="content">
                <p>De verzendkosten zijn voor al onze producten €4,99.</p>
            </div>
        </div>
        <div class="box">
            <div class="label">Waar zijn de sokken van gemaakt?</div>
            <div class="content">
                <p>Onze sokken zijn van 100% organisch katoen gemaakt.</p>
            </div>
        </div>
    </div>

    <?php
        include "includes/cta.php"
    ?>
    <?php
        include "includes/footer.php"
    ?>
    <script>
        const accordion = document.getElementsByClassName('box');

        for (i = 0; i<accordion.length; i++){
            accordion[i].addEventListener('click', function(){
                this.classList.toggle('active')
            })
        }
    </script>
</body>
</html>