<?php
/**
 * User: Niels Julicher
 * Date: 10-03-2020
 * Time: 10:00
 * File: Opdracht4.3.php
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
            include("script4.3.php");
        ?>
        <?php
            echo("<p>" . $task2 . $counter . "</p>");
            echo("<p>" . $task3 . $c . "</p>");
            echo($task4);
            echo($task5);
            echo($task6);
            echo($task7);
        ?>
    </main>
</div>
<?php
include("../includes/footer.php");
?>
</body>
</html>
