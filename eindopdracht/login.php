<?php
/**
 * User: Niels Julicher
 * Date: 09-04-2020
 * Time: 10:00
 * File: login.php
 */
?>

<?php
    include("script.php");
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
        <h2 style="text-align: center">Bergheen</h2>
        <?php
            if($loginSuccess == false)
            {
                echo("<p style='color: red'>" . $message . "</p>");
            }
        ?>
        <p>Login om onze inlogegevens + adresgegevens te zien</p>
        <form action="login.php" method="post">
            <table>
                <tr>
                    <td>username</td>
                    <td><input type="text" name="username"></td>
                </tr>
                <tr>
                    <td>password</td>
                    <td><input type="password" name="password"></td>
                </tr>
                <tr>
                    <td></td>
                    <td><input type="submit" value="Login"></td>
                </tr>
            </table>
        </form>
        <?php
            // tonen van adresgegevens bij correcte login
            if($loginSuccess == true)
            {
                echo("<p>Welkom!</p>");
                echo("<table><tr><td>");
                echo("<fieldset style='width: 200px;'>");
                echo("<legend>Openingstijden</legend>");
                echo("<p>Do: 22:00</p>");
                echo("<p>Vr: All day</p>");
                echo("<p>Za: All day</p>");
                echo("<p>Zo: 12:00</p>");
                echo("</fieldset>");
                echo("</td><td>");
                echo("<fieldset style='width: 200px; height: 170px;'>");
                echo("<legend>Adresgegevens</legend>");
                echo("<p>AM Wriezener Bahnhof</p>");
                echo("<p>10243 Berlin</p>");
                echo("<p>Duitsland</p>");
                echo("</fieldset>");
                echo("</td></tr></table>");
                echo("<p>Deze gegevens dien je ten alle tijden geheim te houden!</p>");
            }
        ?>
    </main>
</div>
<?php
include("../includes/footer.php");
?>
</body>
</html>
