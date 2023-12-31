<?php
    if(isset($_GET['status'])){
        if($_GET['status'] != 'correct'){
            echo"<script>alert('Error 400')</script>";
        }
        else{
            echo"<script>alert('Uw mail is verstuurd')</script>";
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/contact.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="icon" href="./assets/img/favicon/favicon.png" type="image/png">
    <title>Sunny | Neem contact</title>
</head>
<body>
    <?php include "./includes/header.php" ?>
    <div class="contact-container">
        <div class="contact-container-left-side">
            <p class="contact-hello">Zeg hallo tegen ons</p>
            <p class="contact-info">Has ut fabulas detraxit, maluisset mel id. Eam ad option albucius cu, exerci scripta, torquatos at mea. Duis veniam tantas vim ut mei unum. <br><br>4976 Oakway Lane <br>Los Angeles <br><br>123-456-7899 <br><br>Of stuur ons een bericht</p> 
            <img src="assets/img/svg/contact-us-arrow.svg" alt="contact-us-arrow.svgs">
        </div>
        <div class="contact-container-right-side">
            <img src="assets/img/products/Sunny-socks-rood.jpg" alt="Sunny-socks-red.jpg" class="sunny-socks-red">
            <img src="assets/img/products/Sunny-socks-uni-green-1.png" alt="Sunny-socks-uni-green-1.png" class="sunny-socks-uni-green-1">
        </div>
    </div>
    <form action="./includes/contact-handler.php" method="post">
        <div class="contact-message-container">
            <p class="send-message">Stuur ons een bericht</p>
            <p class="send-message-text">Justo elitr honestatis his id, et singulis molestiae sit.</p>
            <div class="input-container">
                <div class="contact-name-email">
                    <input type="text" name="name" placeholder="Naam" class="contact-name" required>
                    <input type="text" name="email" placeholder="E-mail" class="contact-email" required>
                </div>
                <textarea name="message" cols="30" rows="10" placeholder="Type je bericht hier" class="contact-message"></textarea>
                <input type="submit" name="message" class="contact-submit" value="Verstuur">
            </div>
        </div>
    </form>
    <?php include "./includes/cta.php" ?>
    <?php include "./includes/footer.php" ?>
</body>
</html>