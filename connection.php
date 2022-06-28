<?php
$host = "localhost";
$user = "root";
$password = "";
$db = "stucouns_bot";

$conn = mysqli_connect($host, $user, $password, $db);

if (mysqli_connect_error()) {
    echo "error";
}
// else{
//     echo "connected";
// }