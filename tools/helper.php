<?php

#SQL-Server-Connection
$user = 'root';
$password = 'root';
$db = 'zegi';
$host = 'localhost';
$port = 8889;
$inhalt1 = $_POST[inhalt1];

//Connecting to sql db.
$conn = new mysqli($host, $user, $password, $db);
if($conn->connection_error){
    die('Verbindung zum Server fehlgeschlagen');
}

?>