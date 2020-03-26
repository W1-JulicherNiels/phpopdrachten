<?php
/**
 * User: Niels Julicher
 * Date: 24-03-2020
 * Time: 11:30
 * File: form_data.php
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
            <?php
                if(empty($_GET) == false)
                {
                    $userCompanyName = $_GET["companyName"];
                    echo("<tr><td>Bedrijfsnaam: </td><td>" . $userCompanyName . "</td></tr>");

                    $userFirstName = $_GET["surName"];
                    echo("<tr><td>Voornaam: </td><td>" . $userFirstName . "</td></tr>");

                    $userLastName = $_GET["lastName"];
                    echo("<tr><td>Achternaam: </td><td>" . $userLastName . "</td></tr>");

                    $userPhoneNumber = $_GET["phoneNumber"];
                    echo("<tr><td>Telefoon: </td><td>" . $userPhoneNumber . "</td></tr>");

                    $userMailAdress = $_GET["mailAdress"];
                    echo("<tr><td>E-mail: </td><td>" . $userMailAdress . "</td></tr>");

                    $userComplain = $_GET["complains"];
                    echo("<tr><td>Bericht: </td><td>" . $userComplain . "</td></tr>");
                }
            ?>
        </table>
        <style>
            table
            {
                border-collapse: collapse;
                border: 2px solid black;
            }
            td
            {
                border: 2px solid black;
            }
        </style>
    </main>
</div>
<?php
include("../includes/footer.php");
?>
</body>
</html>
