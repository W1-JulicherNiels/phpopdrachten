<?php
/**
 * User: Niels Julicher
 * Date: Date
 * Time: Time
 * File: index.php
 */
?>
<?php
    $text1 = "Hallo";
    $text2 = "een makkelijke taal";
    $text3 = "toch zo'n makkelijke taal";
    $text4 = "wat is";
    $text5 = "PHP";
    $text6 = "Nooit gedacht dat";
    $text7 = "De installatie is best ingewikkeld";
    $text8 = "Fijn";
    $text9 = "?";
    $text10 = ".";
    $text11 = ",";
    $text12 = "<br>";
    $text13 = "is";
    $text14 = "Vind je niet";
    $text15 = "toch";
?>
<!DOCTYPE html>
<html>
<head>
    <title>This is the title</title>
    <meta name="description" content="...">
    <meta name="keywords" content="...">
    <meta charset="UTF-8">
    <link href="../CSS/style.css" type="text/css" rel="stylesheet">
</head>
<body>
<header>
    <h1 class="titlephp"><?php echo "Uitwerking van PHP-opdrachten"; ?></h1>
</header>
<div class="uit">
    <aside>
        <h2 class="menu">Menu</h2>
        <a class="menu" href="../index.php">Terug</a>
    </aside>
    <main id="wrapper">
        <h2>Uitwerkingen</h2>
        <h2>Taak 2</h2>
        <?php
            echo("<p>" . $text1 . $text11 . " " . $text4 . " " . $text5 . " " . $text15 . $text10 . $text12 . $text7 . $text10 . " " . $text8 . " " . $text15 . $text12 . $text6 . " " . $text5 . " " . $text3 . $text10 . "</p>");
        ?>
        <h2>Taak 3</h2>
        <?php
        echo("<p>" . $text1 . $text11 . $text12 . $text8 . " dat " . $text5 . " zo'n makkelijke taal is" . $text10 . $text12 . $text7 . $text10 . " " . $text14 . $text9 . "</p>");
        ?>
    </main>
</div>
</body>
</html>