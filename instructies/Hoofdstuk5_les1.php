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
    <link href="../CSS/style.css" type="text/css" rel="stylesheet">
</head>
<body>
<?php
include("../includes/header.php");
?>
<div class="uit">
    <aside>
        <h2 class="menu">Menu</h2>
        <ul>
            <li>Hoofdstuk 2
                <ul>
                    <li>
                        <a href="hoofdstuk2/opdracht2.1.php">Opdracht 2.1</a>
                    </li>
                    <li>
                        <a href="hoofdstuk2/opdracht2.2.php">Opdracht 2.2</a>
                    </li>
                </ul>
            </li>
            <br>
            <li>Hoofdstuk 3
                <ul>
                    <li>
                        <a href="hoofdstuk3/opdracht3.1.php">Opdracht 3.1</a>
                    </li>
                    <li>
                        <a href="hoofdstuk3/Opdracht3.2.php">Opdracht 3.2</a>
                    </li>
                    <li>
                        <a href="hoofdstuk3/opdracht3.3.php">Opdracht 3.3</a>
                    </li>
                </ul>
            </li>
            <br>
            <li>Hoofdstuk 4
                <ul>
                    <li>
                        <a href="">Opdracht 4.1</a>
                    </li>
                    <li>
                        <a href="hoofdstuk4/opdracht4.2.php">Opdracht 4.2</a>
                    </li>
                    <li>
                        <a href="hoofdstuk4/Opdracht4.3.php">Opdracht 4.3</a>
                    </li>
                    <li>
                        <a href="hoofdstuk4/Opdracht4.4.php">Opdracht 4.4</a>
                    </li>
                </ul>
            </li>
            <br>
            <li>Hoofdstuk 5
                <ul>
                    <li>
                        <a href="">Opdracht 5.1</a>
                    </li>
                    <li>
                        <a href="">Opdracht 5.2</a>
                    </li>
                    <li>
                        <a href="">Opdracht 5.3</a>
                    </li>
                    <li>
                        <a href="">Opdracht 5.4</a>
                    </li>
                </ul>
            </li>
        </ul>
    </aside>
    <main id="wrapper">
        <h2>Uitwerkingen</h2>

        <h3>Huisarts bezoek formulier</h3>

        <form action="Hoofdstuk5_les1.php" method="get">
            <p>Voornaam</p>
            <input type="text" name="firstName">

            <p>Achternaam</p>
            <input type="text" name="lastName">

            <p>Geboortedatum</p>
            <input type="date" name="birthDate">

            <p>Eventuele klachten</p>
            <textarea name="diseaseComplaints"></textarea>

            <input type="submit" value="Verzenden a.u.b">
        </form>
        <?php
            // bepalen of er een formulier verzonden is!
            if(empty($_GET) == false)
            {
                // Er is een formulier verzonden. doe iets met de invoer van de gebruiker
                $userFirstName = $_GET["firstName"];
                echo ("<h1>Opgegeven naam: " . $userFirstName . "</h1>");

                $userLastName = $_GET["lastName"];
                echo("<h1>Opgegeven achternaam: " . $userLastName . "</h1>");
            }

        ?>
    </main>
</div>
<?php
include("../includes/footer.php");
?>
</body>
</html>