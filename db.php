<?php

$conn = mysqli_connect("localhost", "root", "", "project");

if (!$conn) {
    die("Connection Failed " . mysqli_connect_error());
}
echo "DB Connected successfully";

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

</body>

</html>