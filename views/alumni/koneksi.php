<?php

$host = "localhost";
$username = "root";
$password = "";
$database = "tracer_study";

$koneksi = mysqli_connect($host, $username, $password, $database);

// Periksa koneksi
if (mysqli_connect_errno()) {
    die("Gagal terhubung ke database: " . mysqli_connect_error());
}
?>