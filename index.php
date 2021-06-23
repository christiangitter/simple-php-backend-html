<?php
#include the helper file, which init the sql connection
include 'tools/helper.php';

#fetch inhalt1 from SQL
$sql = "SELECT * FROM content where `id` = '1';";
$result = $conn->query($sql);
$row = $result->fetch_assoc();
$inhalt1 = $row[inhalt];
$conn->close;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homepage</title>
</head>
<body>
<div class="wrapper">
<div class="content">
<h1>Time for some Content!</h1>
<p><?php echo $inhalt1; ?></p>
</div>
</div>
    
</body>
</html>