<?php

$server = "localhost";
$username = "root";
$password = "";
$database = "project_bs";

$connect = mysqli_connect ($server, $username, $password, $database);
if (!$connect) {
    die ("Koneksi Gagal : ".mysqli_connect_error());
}
?>