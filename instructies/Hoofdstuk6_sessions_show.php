<?php
    // session starten
    session_start();

    echo("<p>Goedendag" . $_SESSION["username"] . "<p>");
?>