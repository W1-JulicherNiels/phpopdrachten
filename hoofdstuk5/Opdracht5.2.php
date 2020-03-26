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
</head>
<body>
    <h1>Uitschrijfformulier KW1C</h1>
    <hr>
    <form action="uitschrijving.php" method="get">
        <table>
            <tr>
                <td>Voor en achternaam</td>
                <td><input type="text" name="name"></td>
            </tr>
            <tr>
                <td>Studentennummer</td>
                <td><input type="number" name="studentNumber"></td>
            </tr>
            <tr>
                <td>Datum van uitschrijving</td>
                <td><input type="date" name="unsubDate"></td>
            </tr>
            <tr>
                <td>Reden van uitschrijving</td>
                <td>
                    <select name="reasonLeave">
                        <option value="Saaie lessen">Saaie lessen</option>
                        <option value="Verkeerde keuze">Verkeerde keuze</option>
                        <option value="Stage viel tegen">Stage viel tegen</option>
                        <option value="Geen fijne school">Geen fijne school</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Leerjaar</td>
                <td>
                    <input type="radio" name="yearClass" value="1e leerjaar"> 1e leerjaar<br>
                    <input type="radio" name="yearClass" value="2e leerjaar"> 2e leerjaar<br>
                    <input type="radio" name="yearClass" value="3e leerjaar"> 3e leerjaar
                </td>
            </tr>
        </table>
        <input type="checkbox" name="loginClass" value="Ja"> Ik wil me aanmelden bij de succesklas<br>
        <input type="checkbox" name="removeStudent" value="Ja"> Verwijder mijn gegevens uit het systeem
        <p>Geef hieronder de reden van je uitschrijving op</p>
        <textarea name="explanation"></textarea><br><br>
        <input type="submit" value="Versturen">
    </form>
</body>
</html>

