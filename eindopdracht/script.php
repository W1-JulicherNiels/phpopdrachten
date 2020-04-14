<?php
/**
 * User: Niels Julicher
 * Date: 09-04-2020
 * Time: 10:00
 * File: script.php
 */
?>

<?php

    // Username en wahtwoord combinaties
    $userArrayList = [
        "Sjul" => "1kk3N13tW3t3n",
        "Koos" => "Bed4nktVoorDeEer",
        "Jim" => "Carl_wheezer",
        "Niels" => "h1ghSchoolDxD",
        "Jordan" => "G4rfield",
        "Dion" => "versl4apen",
        "Mark" => "Firedze4z",
        "Jarno" => "Runesc4pe",
        "XxPussyDestroyer69xX" => "DestroySomePussy69",
        "legend27" => "raidSh4dowlegends"
    ];

    // Eventuele foutmeldingen komen in deze string
    $message = "";
    // Is de persoon succesvol ingelogd
    $loginSuccess = false;

    // checken of gegeven username en wachtwoord bestaat in de array $userArrayList
    if(isset($_POST["username"]) == true && isset($_POST["password"]) == true)
    {
        // foreach gebruiken we om door $userArrayList heen te loopen
        foreach($userArrayList as $index => $value)
        {
            // Bepalen of opgegeven $_POST waardes in de array aanwezig zijn
            if($_POST["username"] == $index && $_POST["password"] == $value)
            {
                // Username en password zijn gevonden!
                $loginSuccess = true;
            }
            else
            {
                $message = "Foutieve username en / of wachtwoord";
            }
        }
    }
?>
