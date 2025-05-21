<?php

$conn = mysqli_connect("localhost", "root", "", "project");

if ($conn) {
    echo "Connected Successfully to Database <br>";
} else {
    die("Connection Error " . mysqli_connect_error());
}
