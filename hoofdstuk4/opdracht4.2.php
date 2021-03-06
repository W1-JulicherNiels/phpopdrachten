<?php
/**
 * User: Niels Julicher
 * Date: 03-03-2020
 * Time: 10:00
 * File: Opdracht4.2.php
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
        include("script.php");
        echo("<p>Voor het vak <span class='dik'>" . $coursName . "</span> heb je <span class='dik'>" . $teacherName . "</span> als docent.</p>");
        ?>
    </main>
</div>
<?php
include("../includes/footer.php");
?>
</body>
</html>