<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./assets/css/faq.css">

    <link rel="stylesheet" href="./assets/css/style.css" type="text/css">
    <link rel="icon" href="./assets/img/favicon/favicon.png" type="image/png">

</head>
<body>
<?php include "./includes/header.php" ?>

    <div class="accordion">
        <div class="heading-div">
            <h2 class="heading">FAQ's</h2>
        </div>
        <div class="box">
            <div class="label">How long does the shipping takes?</div>
            <div class="content">
                <p>Most of the times the shipping takes about 2-4 workdays</p>
            </div>
        </div>
        <div class="box">
            <div class="label">How can I return the items?</div>
            <div class="content">
                <p>You can return your items by sending us an E-mail with the information why you want to return the items,
                    and with your personal information and order number. After you did that we will try to contact you as soon as possible
                    to complete the return.
                </p>
            </div>
        </div>
        <div class="box">
            <div class="label">Will sold out items get restocked?</div>
            <div class="content">
                <p>Yes, our team is working as hard as they can to restock the items as soon as possible</p>
            </div>
        </div>
        <div class="box">
            <div class="label">How can I get in contact with the customer service?</div>
            <div class="content">
                <p>The fastest way to contact us is by going to the contact page, there you need to
                    fill in your E-mail and type the message you want to send. Another way is to go to our socials 
                    and send your message there.
                </p>
            </div>
        </div>
        <div class="box">
            <div class="label">What are the shipping cost?</div>
            <div class="content">
                <p>The shipping costs for all our products are €4,99.</p>
            </div>
        </div>
        <div class="box">
            <div class="label">What are the socks made of?</div>
            <div class="content">
                <p>Our socks are made out of 100% organic cotton.</p>
            </div>
        </div>
    </div>
    <div class="cant-find">
        <div class="cant-find-container"> 
            <div>
                <h1 class="heading-cant-find">Can't find your question here?</h1>
            </div>
            <div class="contact-button-container">
                <button class="contact-button" onclick="location.href = 'contact.php';">Contact us</button>
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