<?php
/**
 * User: Niels Julicher
 * Date: 24-03-2020
 * Time: 11:30
 * File: opdracht61.php
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
<?php
include("../includes/header.php");
?>
<div class="uit">
    <aside>
        <h2 class="menu">Menu</h2>
        <a class="menu" href="../index.php">Terug</a>
    </aside>
    <main id="wrapper">
        <h2>Uitwerkingen</h2>
        <form id="gameFrm" method="get" action="opdracht62.php">
            <div class="float"><input type="radio"
                                      onchange="document.getElementById('gameFrm').submit();" name="keuze"
                                      value="steen"><img src="images/steen.jpg"></div>
            <div class="float"><input type="radio"
                                      onchange="document.getElementById('gameFrm').submit();" name="keuze"
                                      value="papier"><img src="images/papier.jpg"></div>
            <div class="float"><input type="radio"
                                      onchange="document.getElementById('gameFrm').submit();" name="keuze"
                                      value="schaar"><img src="images/schaar.jpg"></div>
        </form>
        <?php
            //Wat kiest de computer
            //Random wordt er een getal tussen 0 en 2 gekozen
            $opties = array("steen","papier","schaar");
            $computerkeuzegetal = rand(0,2);
            $computerkeuze = $opties[$computerkeuzegetal];


        ?>
        <?php
        session_start();
        //$_SESSION['stand'] = array(0,0);
        if(!isset($_SESSION['user1']))
        {
            $_SESSION['user1'] = 0;
        }

        if(!isset($_SESSION['user2']))
        {
            $_SESSION['user2'] = 0;
        }

        if(isset($_GET['keuze']))
            {
                $speler = $_GET['keuze'];
                echo ("Jij koos: <img src='images/{$_GET['keuze']}.jpg'>");
                echo ("&nbsp;&nbsp;De computer koos: <img src='images/{$computerkeuze}.jpg'>");

                if($speler == "papier" && $computerkeuze == "steen" or $speler == "steen" && $computerkeuze == "schaar" or $speler == "schaar" && $computerkeuze == "papier")
                {
                    echo("<p>Jij scoort</p>");
                    //$_SESSION['stand'][0] +=1;
                    $_SESSION['user1'] +=1;
                }
                else if($computerkeuze == "papier" && $speler == "steen" or $computerkeuze == "steen" && $speler == "schaar" or $computerkeuze == "schaar" && $speler == "papier")
                {
                    echo("<p>De Computer scoort");
                    //$_SESSION['stand'][1] +=1;
                    $_SESSION['user2'] +=1;
                }
                else
                {
                    echo("gelijk");
                }
                echo("<p>De score is " . $_SESSION['user1'] . " tegen " . $_SESSION['user2']);

                if($_SESSION["user1"] == 5 || $_SESSION["user2"] == 5) {
                    if($_SESSION["user1"] == 5) {
                        echo("<p> Jij wint! </p><p> Het spel start opnieuw als je een nieuwe keuze maakt </p>");
                    } else if($_SESSION["user2"] == 5) {
                        echo("<p> De Computer wint! </p><p> Het spel start opnieuw als je een nieuwe keuze maakt </p>");
                    }
                    session_destroy();
                }
            }
        ?>

    </main>
</div>
<style>
    .float
        {
            float: left;
        }
</style>
<?php
//include("../includes/footer.php");
?>
</body>
</html>