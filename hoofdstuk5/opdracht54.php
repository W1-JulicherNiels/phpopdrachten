<?php
/**
 * User: Niels Julicher
 * Date: 02-04-2020
 * Time: 10:30
 * File: opdracht54.php
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
        <form action="opdracht54.php" method="post">
           <table>
               <tr>
                   <td>
                       <p>Komt er een ambulance aan?</p>
                   </td>
                   <td>
                       <input type="radio" name="ambulanceComing" value="yes">Ja
                       <input type="radio" name="ambulanceComing" value="no">Nee
                   </td>
               </tr>
               <tr>
                   <td>Stoplicht kleur?</td>
                   <?php
                        // Bestaat $_POST["trafficLightColor"]? zo ja, voer de 2e if statement uit
                        if($_SERVER["REQUEST_METHOD"] == "POST")
                        {
                            if(isset($_POST["trafficLightColor"]) == false)
                            {
                                echo("<p style='color: red'>U heeft een ongeldige invoer gegeven</p>");
                            }
                        }
                   ?>
                   <td>
                       <input type="radio" name="trafficLightColor" value="green">Groen
                       <input type="radio" name="trafficLightColor" value="orange">Oranje
                       <input type="radio" name="trafficLightColor" value="red">Rood
                   </td>
               </tr>
               <tr>
                   <td colspan="2">
                       <input type="submit" value="Versturen die hap!">
                   </td>
               </tr>
           </table>
        </form>

        <?php
            // PHP uitwerking code hieronder
            if(isset($_POST["ambulanceComing"]) == true && isset($_POST["trafficLightColor"]) == true)
            {
                echo("<h1>Wat is de situatie en wat moet ik doen?</h1>");
                echo("<table>");

                if($_POST["trafficLightColor"] == "green")
                {
                    echo("<p>Het stoplicht staat op groen.</p>");
                }
                elseif($_POST["trafficLightColor"] == "orange")
                {
                    echo("<p>Het stoplicht staat op oranje.</p>");
                }
                elseif($_POST["trafficLightColor"] == "red")
                {
                    echo("<p>Het stoplicht staat op rood.</p>");
                }
                // Tonen of er een ambulance aankomt
                echo("<p>En er komt een ambulance aan: " . $_POST["ambulanceComing"] . "</p>");

                // Mag ik verder rijden?
                if($_POST["trafficLightColor"] == "green" && $_POST["ambulanceComing"] == "no")
                {
                    echo("<p style='color: green'>Je mag doorrijden</p>");
                }
                else
                {
                    echo("<p style='color: red'>Je MOET stoppen</p>");
                }
                echo("</table>");
            }


        ?>
    </main>
</div>
<?php
include("../includes/footer.php");
?>
</body>
</html>
