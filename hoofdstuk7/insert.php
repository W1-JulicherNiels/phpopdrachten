<?php
/**
 * User: Niels Julicher
 * Date: 07-05-2020
 * Time: 11:30
 * File: opdracht7.1.php
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
        <h2>Nieuwe grap toevoegen</h2><br>
        <form method="post">
            <table>
                <tr>
                    <td>Joketext</td>
                    <td><input type="text" name="joketext" placeholder="Joketext komt hier in"></td>
                </tr>
                <tr>
                    <td>Jokeclou</td>
                    <td><input type="text" name="jokeclou" placeholder="Jokeclou komt hier in"></td>
                </tr>
                <tr>
                    <td><button name="verstuur">Verstuur</button></td>
                </tr>
            </table>
        </form>
        <?php

        // Inladen functies bestand
        include("functions.php");

        startConnection();

        if(isset($_POST["verstuur"]) == true )
        {
            // Er is (via het formulier) een zoekterm opgegeven. Verander nu dus de $query
            $query = "INSERT INTO joke VALUES	('" . $_POST["joketext"] . "','" . $_POST["jokeclou"] . "',GETDATE());";
            executeQuery($query);


            echo('<h1>Grap toegevoegd!</h1>');
            echo('<p>Bedankt voor het toevoegen van je grap. Hieronder zie je een overzicht van je grap:<br><br>');
            echo('<em>joketext: </em>' . $_POST['joketext']);
            echo('<br>');
            echo('<em>jokeclou: </em>' . $_POST['jokeclou']);
            echo('<br><br>');
            echo('<a href="index.php">Bekijk grappen (opdracht 7.3)</a>');
        }
        ?>
    </main>
</div>
<?php
include("../includes/footer.php");
?>
</body>
</html>
