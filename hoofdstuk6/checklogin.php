<?php
$authUsers = Array(
    "Abu" => "bekend",
    "Nordin" => "onbekend",
    "BasZ" => "654321",
    "Rosalie" => "bloemblaadjes"
);
?>

<?php
foreach($authUsers as $index => $value)
    {
        if ($_POST['username'] == $index && $_POST['password'] == $value) {
            session_start();
            $_SESSION['username'] = $_POST['username'];
            header('location: welkom.php');
        } else {
            // $message = "Ongeldige username/wachtwoord
            // {$_POST['username']}, probeer het nog eens.";
            include "opdracht61.php";
        }
    }
?>

