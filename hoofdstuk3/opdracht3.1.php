<?php
/**
 * User: Niels Julicher
 * Date: 26-2-2020
 * Time: 14:00
 * File: opdracht3.1.php
 */
?>
<?php
    $evenement = "Elfstedentocht";
    $fries = "Alvestêdetocht";
    $afstand = 200;
    $tocht = "schaatstocht";
    $ijs = "natuurijs";
    $organisator = "Koninklijke Vereniging De Friesche Elf Steden";
    $hoofdstad = "Leeuwarden";
    $provincie = "Friesland";
    $aantal = 15;
    $jaartal = 1909;
    $maximaal = 1;
    $verhaal = "De $evenement (Fries: $fries) is een $afstand kilometer lange $tocht over $ijs die wordt georganiseerd door de $organisator. $hoofdstad, de hoofdstad van $provincie, is start- en aankomstplaats. De $evenement is inmiddels $aantal maal verreden en werd voor het eerst in $jaartal gereden en wordt maximaal $maximaal keer per winter gehouden.";
    $verhaal2 = "De " . $evenement . " (fries: " . $fries . ") is een " . $afstand . " kilometer lange " . $tocht . " over " . $ijs . " die wordt georganiseerd door de " . $organisator . ". " . $hoofdstad . ", de hoofdstad van " . $provincie . ", is start- en aankomstplaats. De " . $evenement . " is inmiddels " . $aantal . " maal verreden en werd voor het eerst in " . $jaartal . " gereden en wordt maximaal " . $maximaal . " keer per winter gehouden.";
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
        <?php
            echo("<p>" . $verhaal . "</p>");
            echo("<p> " . $verhaal2 . "</p>");
        ?>
    </main>
</div>
</body>
</html>
