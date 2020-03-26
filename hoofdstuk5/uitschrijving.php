<?php
/**
 * User: Niels Julicher
 * Date: 24-03-2020
 * Time: 12:30
 * File: uitschrijving.php
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
        <table>
            <tr>
                <td>Voor en achternaam</td>
                <td><?php echo($_GET["name"]); ?></td>
            </tr>
            <tr>
                <td>Studentennummer</td>
                <td><?php echo($_GET["studentNumber"]); ?> </td>
            </tr>
            <tr>
                <td>Datum van uitschrijving</td>
                <td><?php echo($_GET["unsubDate"]); ?></td>
            </tr>
            <tr>
                <td>Reden van uitschrijving</td>
                <td><?php echo($_GET["reasonLeave"]); ?></td>
            </tr>
            <tr>
                <td>Leerjaar</td>
                <td><?php echo($_GET["yearClass"]); ?></td>
            </tr>
            <tr>
                <td>Aanmelden bij de succesklas</td>
                <td>
                    <?php
                        if(isset($_GET["loginClass"]) == true && $_GET["loginClass"] == "Ja")
                        {
                            echo("Ja");
                        }
                        else
                        {
                            echo("Nee");
                        }
                    ?>
                </td>
            </tr>
            <tr>
                <td>Verwijderen gegevens</td>
                <td>
                    <?php
                        if(isset($_GET["removeStudent"]) == true && $_GET["removeStudent"] == "Ja")
                        {
                            echo("Ja");
                        }
                        else
                        {
                            echo("Nee");
                        }
                    ?>
                </td>
            </tr>
            <tr>
                <td>Reden van uitschrijving</td>
                <td><?php echo($_GET["explanation"]); ?></td>
            </tr>
        </table>
    </main>
</div>
<?php
include("../includes/footer.php");
?>
</body>
</html>