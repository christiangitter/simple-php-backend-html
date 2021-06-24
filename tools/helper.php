<?php

#SQL-Server-Connection
$user = DBUSER;
$password = DBPASSWORD;
$db = DB;
$host = HOST;
$port = PORT;
$inhalt1 = $_POST[inhalt1];

//Connecting to mysql db. 
$conn = new mysqli($host, $user, $password, $db);
if($conn->connection_error){
    die('Verbindung zum Server fehlgeschlagen');
}

?>