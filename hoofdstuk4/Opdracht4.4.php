<?php
/**
 * User: Niels Julicher
 * Date: 12-03-2020
 * Time: 11:00
 * File: Opdracht4.4.php
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
        <h3>Weekkalender komende week:</h3>
        <?php
        include("script4.4.php");
        ?>
    </main>
</div>
<?php
include("../includes/footer.php");
?>
</body>
</html>

