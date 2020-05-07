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

        // Open de database connectie en ODBC driver
        try
        {
            $pdo = new PDO("odbc:odbc2sqlserver");
        }
        catch (PDOException $e)
        {
            echo "<h1>Database error:</h1>";
            echo $e->getMessage();
            die();
        }

        echo "database connectie gelukt";

        ?>
        <br>
        <?php
        // Uitvoeren van een SQl query
        try
        {
        // Query schrijven
            $sql = 'SELECT * FROM joke';
        // Query uitvoeren
            $result = $pdo->query($sql);
        }
        catch (PDOException $e)
        {
            echo 'Er is een probleem met ophalen van jokes: ' . $e->getMessage();
            exit();
        }
        // Lege Array aanmaken voor de results
        $aJokes = array();
        // Door de results heen loopen via een while
        while ($row = $result->fetch(PDO::FETCH_ASSOC))
        {
        // Result wegschrijven in de $aJokes array
            $aJokes[] = $row;
        }
        // Tonen van de inhoud van aJokes
        var_dump($aJokes);
        ?>
    </main>
</div>
<?php
include("../includes/footer.php");
?>
</body>
</html>
