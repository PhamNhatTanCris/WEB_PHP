<?php
$severname = "localhost";
$username = "root";
$password = "Lehung@181";
$database = "bandongho";

$connect = mysqli_connect($severname, $username, "", $database);
// if ($connect->connect_error) {
//     die("Connection failed: " . $connect->connect_error);
// }
// echo "Connected successfully";
if (mysqli_connect_error()) {
    echo "loi ket noi" . mysqli_connect_error();
    exit();
}