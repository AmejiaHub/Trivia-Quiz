<?php
// Verbinde mit mySQL, mit Hilfe eines PHP PDO Objekts. 
    $dbHost = getenv('DB_HOST');
    $dbName = getenv('DB_NAME');
    $dbUser = getenv('DB_USER');
    $dbPassword = getenv('DB_PASSWORD');

    $dbConnection = new PDO("mysql:host=$dbHost;dbname=$dbName;charset=utf8", $dbUser, $dbPassword);

// Setze den Fehlermodus für Web Devs
    $dbConnection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

// QUERY FUNCTIONS -------------------------------------------------

function fetchQuestionById($id, $dbConnection){
    echo "$id";
    $sqlStatement = $dbConnection->query("SELECT * FROM `questions` WHERE `id` = $id");
    $row = $sqlStatement->fetch(PDO::FETCH_ASSOC);

    // Gibt Zeilendaten als assoziativer Array zu genau einer Frage zurück
    // Beispiel: $row
    return $row;
}

?>