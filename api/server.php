<?php
    require __DIR__ . "/../partials/database.php"; //raccolgo i datii da inviare
    header('Content-Type: application/json'); //setto la risposta attraverso il protocollo json
    echo json_encode($db); //invio la risposta
?>