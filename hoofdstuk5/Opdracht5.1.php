<?php
/**
 * User: Niels Julicher
 * Date: 24-03-2020
 * Time: 11:30
 * File: Opdracht5.1.php
 */
?>
<html>
<head>
    <title>This is the title</title>
    <meta name="description" content="...">
    <meta name="keywords" content="...">
    <meta charset="UTF-8">
</head>
    <body>
        <h1>Restaria Kees Kroket</h1>
        <p>
            Visstraat 12<br>
            5211 DN 's-Hertogenbosch<br>
            073 613 6720<br>
            info@restariakeeskroket.nl
        </p>
        <form action="form_data.php" method="get">
            <p>Bedrijfsnaam</p>
            <input type="text" name="companyName">
            <p>Voornaam</p>
            <input type="text" name="surName">
            <p>Achternaam</p>
            <input type="text" name="lastName">
            <p>Telefoon</p>
            <input type="tel" name="phoneNumber">
            <p>E-mail</p>
            <input type="email" name="mailAdress">
            <p>Bericht</p>
            <textarea name="complains"></textarea><br>
            <input type="submit" value="Versturen">
        </form>
    </body>
</html>
