<?php
/**
 * User: Niels Julicher
 * Date: 26-2-2020
 * Time: 14:00
 * File: opdracht3.2.php
 */
?>


<html>
<head>
    <title>This is the title</title>
    <meta name="description" content="...">
    <meta name="keywords" content="...">
    <meta charset="UTF-8">
    <link href="../CSS/style.css" type="text/css" rel="stylesheet">
</head>
<body>
<header>
    <h1 class="titlephp"><?php echo "Uitwerking van PHP-opdrachten"; ?></h1>
</header>
<div class="uit">
    <aside>
        <h2 class="menu">Menu</h2>
        <a class="menu" href="../index.php">Terug</a>
    </aside>
    <main id="wrapper">
        <h2>Uitwerkingen</h2>
        <?php
        // Declareren en initialiseren van de gewenste variabelen
        $trafficLightColor = "oranje";
        $ambulanceComig = true;

        // driveOn declareren in initaliseren
        $driveOn = true;

        // Checken of auto mag doorrijden of moet stoppen
        if($trafficLightColor == "groen" && $ambulanceComig == false)
        {
            $driveOn = true;
        }
        else if($trafficLightColor == "oranje" || $ambulanceComig == false)
        {
            $driveOn = false;
        }
        else if($trafficLightColor == "rood" || $ambulanceComig == true)
        {
            $driveOn = false;
        }
        else
        {
            $driveOn = true;
            echo("<p>Foutje. Het stoplicht heeft een ongeldige kleur!s</p>");
        }

        // Tonen van melding aan de automobilist
        if($driveOn == true)
        {
            echo("<h1 style='color: green;'>U mag doorrijden</h1>");
        }
        else
        {
            echo("<h1 style='color: red;'>U mag NIET doorrijden</h1>");
        }
        ?>
        <?php
        // Deel 2: Alcohol in verschillende landen opdracht
        $countryName = "Nederland";
        $currentAge = 16;

        // Tonen  algemene gegevens
        echo("<p>Je woont in " . $countryName . " en je bent " . $currentAge . " jaar oud.</p>");

        if($countryName == "België" && $currentAge >= 16 && $currentAge < 18)
        {
            echo("<p>Je mag hier zwakke alcohol drinken</p>");
        }
        else if($countryName == "België" && $currentAge >= 18)
        {
            echo("<p>Je mag hier sterke alcohol drinken</p>");
        }
        else if($countryName == "Bulgarije" && $currentAge >= 18)
        {
            echo("<p>Je mag hier sterke alcohol drinken</p>");
        }
        else if($countryName == "Cyprus" && $currentAge >= 17)
        {
            echo("<p>Je mag hier sterke alcohol drinken</p>");
        }
        else if($countryName == "Nederland" && $currentAge >= 18)
        {
            echo("<p>Je mag hier sterke alcohol drinken</p>");
        }
        else if($countryName == "Zweden" && $currentAge >= 18 && $currentAge < 20)
        {
            echo("<p>Je mag hier zwakke alcohol drinken</p>");
        }
        else if($countryName == "Zweden" && $currentAge >= 20)
        {
            echo("<p>Je mag hier sterke alcohol drinken</p>");
        }
        else if($countryName == "Makanda" && $currentAge >= 13)
        {
            echo("<p>Je mag hier alcohol drinken</p>");
        }
        else
        {
            echo("<p>Hier mag je GEEN alcohol drinken</p>");
        }
        ?>
    </main>
</div>
</body>
</html>
