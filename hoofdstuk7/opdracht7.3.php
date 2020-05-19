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
        <?php


        // Inladen functies bestand
        include("functions.php");

        // Starten van een database connectie
        startConnection();

        // Executeren van een SQL query
        $query = "SELECT * FROM joke";
        if(isset($_GET["zoekterm"]) == true)
        {
            // Er is (via het formulier) een zoekterm opgegeven. Verander nu dus $query
            $query = "SELECT * FROM joke WHERE joketext LIKE '%" . $_GET["zoekterm"] . "%'";
        }
        $jokes = executeQuery($query);

        echo "<p> $query </p>";

        echo ("<form action='index.php' method='GET'>");
        echo("<input type='text' name='zoekterm'>");
        echo("<input type='submit' value='zoeken'>");
        echo("</form>");
        echo("<hr>");

        echo("<table>");
        echo("<tr>");
            echo("<th>Jokeid</th>");
            echo("<th>Joketext</th>");
            echo("<th>Jokeclou</th>");
            echo("<th>Jokedate</th>");
        echo("</tr>");
        // Resultaten rij voor rij ophalen
        while($row = $jokes->fetch(PDO::FETCH_ASSOC) )
        {
            //echo $row["jokedate"] .  $row["joketext"] . $row["jokeclou"] . "<br>";
            echo("<tr>");
            echo("    <td>");
            echo($row["id"]);
            echo("    </td>");
            echo("    <td>");
            echo($row["joketext"]);
            echo("    </td>");
            echo("    <td>");
            echo($row["jokeclou"]);
            echo("    </td>");
            echo("    <td>");
            echo($row["jokedate"]);
            echo("    </td>");
            echo("</tr>");
        }

        echo("</table>");
        ?>
        <style>
            table, th, td
            {
                border: 1px solid black;
            }
        </style>
    </main>
</div>
<?php
include("../includes/footer.php");
?>
</body>
</html>
