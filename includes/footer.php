<?php
/**
 * User: Niels Julicher
 * Date: 26-2-2020
 * Time: 14:00
 * File: footer.php
 */
?>
<?php
session_start();
if (isset($_SESSION['username']))
{
    $bezoeker = $_SESSION['username']. "&nbsp;<a
    href='/phpopdrachten/hoofdstuk6/loguit.php'>Loguit</a>";
}
else
{
    $bezoeker = "onbekende bezoeker". "&nbsp;<a
    href='/phpopdrachten/hoofdstuk6/opdracht61.php'>Login</a>";
}

//print vervolgens ook de $bezoeker zodat je de volgende visuele weergave in de pagina ziet

?>
<?php
    include("variabelen.php");
    date_default_timezone_set("Europe/Amsterdam");
    $uur = date("H");
    if($uur <= 5)
    {
        $greetings = ("Goedennacht");
    }
    else if($uur < 12)
    {
        $greetings = ("Goedenochtend");
    }
    else if($uur < 17)
    {
        $greetings = ("Goedenmiddag");
    }
    else
    {
        $greetings = ("Goedenavond");
    }
    // De footer via echo getoond aan de gebruiker
    echo("<footer>");
    echo($greetings . " " . $bezoeker);
    echo(" &copy; " . $year);
    echo("</footer>");
?>


