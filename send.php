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

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/send.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,400;0,500;1,100&display=swap" rel="stylesheet">
    <title>Status</title>
</head>
<body>
<br>
    <section>
    <div class="wrapper">
    <div class="container">
    <h1 class="status">Content gesendet</h1>
    <a href="backend.php">zurück zum Backend</a>
    <a href="index.php">zurück zur Startseite</a>
    </div>
    </div>
    </section>
</body>
</html>