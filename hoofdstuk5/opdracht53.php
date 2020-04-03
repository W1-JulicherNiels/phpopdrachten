<?php
/**
 * User: Niels Julicher
 * Date: 31-03-2020
 * Time: 11:30
 * File: opdracht53.php
 */
?>

<html>
<head>
    <title>This is the title</title>
    <meta name="description" content="...">
    <meta name="keywords" content="...">
    <meta charset="UTF-8">
</head>
<body>
<h1>Corona enquete:</h1><br>
<hr>
    <form action="form_data53.php" method="post">
        <table>
            <tr>
                <td>Wat is je naam:</td>
                <td><input type="text" name="fullName"></td>
            </tr>
            <tr>
                <td>Wat is je leeftijd:</td>
                <td><input type="text" name="age"></td>
            </tr>
            <tr>
                <td>Gemeente:</td>
                <td><select name="townShip">
                        <option value="Den Bosch">Den Bosch</option>
                        <option value="Eindhoven">Eindhoven</option>
                        <option value="Tilburg">Tilburg</option>
                        <option value="Breda">Brede</option>
                        <option value="Nijmegen">Nijmegen</option>
                        <option value="Amsterdam">Amsterdam</option>
                        <option value="Roermond">Roermond</option>
                        <option value="Rotterdam">Rotterdam</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Aantal inwoners gemeente:</td>
                <td><input type="number" name="citizens"></td>
            </tr>
        </table>
        Ken je mensen die besmet zijn in je woonplaats?
        <input type="radio" name="related" value="Ja">Ja
         <input type="radio" name="related" value="Nee">Nee<br><br>
        Aantal mensen besmet in je gemeente?*
        <input type="number" name="infected"><br><br>
        <input type="submit" value="Verzend">
        <p>* Zie aantallen per gemeente per 100.000 bewoners <a>site RIVM</a></p>
    </form>
</body>
</html>