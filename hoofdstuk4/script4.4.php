<?php
/**
 * User: Niels Julicher
 * Date: 12-03-2020
 * Time: 11:00
 * File: script4.4.php
 */
?>

<?php
$dagNamen = array("zondag", "maandag" , "dinsdag", "woensdag", "donderdag", "vrijdag", "zaterdag");

for($c = 0; $c <= 7; $c++) {
    $datumAlsGetal = strtotime("+$c days");
    $dagNummer = date("w", $datumAlsGetal);
    echo("Dag " . $dagNummer . " is " . $dagNamen[$dagNummer] . " " . date("d-m-Y" , $datumAlsGetal));
    echo("<br>");
}
?>
