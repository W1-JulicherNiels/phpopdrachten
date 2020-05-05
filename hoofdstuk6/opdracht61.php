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
        <form method="post" action="checklogin.php">
            <input type="text" name="username"><br>
            <input type="password" name="password"><br>
            <input type="submit" value="Verzenden">
        </form>
    </main>
</div>
<?php
include("../includes/footer.php");
?>
</body>
</html>

