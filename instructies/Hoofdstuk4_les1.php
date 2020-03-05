<?php
/**
 * User: Niels Julicher
 * Date: Date
 * Time: Time
 * File: index.php
 */
?>

<html>
<head>
    <title>This is the title</title>
    <meta name="description" content="...">
    <meta name="keywords" content="...">
    <meta charset="UTF-8">
    <link href="CSS/style.css" type="text/css" rel="stylesheet">
</head>
<body>

<?php
    // Instructie 1 Hoofdstuk 4

    // Vertellen dat ons script de tijdzones van Hong Kong moet aanhouden.
    date_default_timezone_set("Asia/Hong_Kong");

    // Toon de tijd in HH:MM formaat
    $currentTime = date("D Y-m-d H:i:s");
    echo ("<p> Huidige tijd: " . $currentTime . "</p>");

    // Oefening 2: switch
    $currentHour = date("D");

    switch($currentHour)
    {
        case "Mon":
            echo("Garfield houdt van Lasagna op maandag");
            break;
        case "Tue":
            echo("Het is dinsdag");
            break;
        case "Wed":
            echo("De week is doormidden");
            break;
        case "Thu":
            echo("DONDERDAG jeey");
            break;
        case "Fri":
            // code komt hier, zoveel als je wilt.
            echo("Vrijdag = pizzadag");
            break;
        default:
            // code voor "else" komt hier.
            echo("Yo, deze dag ken ik niet.");
    }
?>

</body>
</html>
