<?php
#include the helper file, which init the sql connection
include 'tools/helper.php';

//Sending form data to sql db.
$sql = "Update `content` SET `inhalt` = '$inhalt1' WHERE `id` = '1';";
$conn->query($sql);
$conn->close;

echo "Inhalt gesendet!";
?>