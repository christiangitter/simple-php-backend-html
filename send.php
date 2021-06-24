<?php
#include the helper file, which init the sql connection
include 'tools/helper.php';

$headline = $_POST['headline'];
$content = $_POST['content'];

//Sending form data to sql db.
if ($headline != ""){
    $sql = "Update `content` SET `inhalt` = '$headline' WHERE `id` = '1';";
    $conn->query($sql);
    $conn->close;  
}

if ($content != ""){
    $sql = "Update `content` SET `inhalt` = '$content' WHERE `id` = '2';";
    $conn->query($sql);
    $conn->close;
}
echo "Inhalt gesendet!";
?>