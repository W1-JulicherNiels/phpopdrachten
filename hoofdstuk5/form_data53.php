<?php
/**
 * User: Niels Julicher
 * Date: 31-03-2020
 * Time: 11:30
 * File: form_data53.php
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
        include("../includes/functions.php");
        ?>
        <table>
            <tr>
                <th>Vraag</th>
                <th>Antwoord</th>
            </tr>
            <tr>
                <td>Naam</td>
                <td><?php echo($_POST["fullName"]); ?></td>
            </tr>
            <tr>
                <td>Leeftijd</td>
                <td><?php echo($_POST["age"]) ?></td>
            </tr>
            <tr>
                <td>Gemeente</td>
                <td><?php echo($_POST["townShip"]); ?></td>
            </tr>
            <tr>
                <td>Inwoners</td>
                <td><?php echo($_POST["citizens"]); ?></td>
            </tr>
            <tr>
                <td>Aantal besmet</td>
                <td><?php echo($_POST["infected"]); ?></td>
            </tr>
            <tr>
                <td>Kennissen besmet</td>
                <td><?php echo($_POST["related"]); ?></td>
            </tr>
            <tr>
                <td>
                    <?php
                        if(isset($_POST["related"]) && $_POST["related"] == "Ja")
                        {
                            echo("De kans is in realiteit groter omdat je via je eigen netwerk besmet kan raken.");
                        }
                        else
                        {
                            echo("De kans is minder groot omdat je niet via je eigen netwerk besmet kan raken.");
                        }
                    ?>
                </td>
                <td></td>
            </tr>
            <tr>
                <td>Kans per ontmoeting op besmetting</td>
                <td>
                    <?php
                        echo(echoKans() . "%");
                    ?>
                </td>
            </tr>
            <tr>
                <td>Kans is 1 op</td>
                <td>
                    <?php
                        echo(getKans1Op());
                    ?>
                </td>
            </tr>
            <tr>
                <td>
                    <?php
                        $kans1op = getKans1op();
                        $vergelijking = vergelijkOorzaken($kans1op);
                        //Je kunt nu $vergelijking printen zodat het eruit ziet als het voorbeeld
                        echo($vergelijking);
                    ?>
                </td>
                <td></td>
            </tr>
        </table>
    </main>
</div>
<?php
include("../includes/footer.php");
?>
</body>
</html>
