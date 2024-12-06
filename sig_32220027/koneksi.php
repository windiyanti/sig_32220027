<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "sig_32220027";

$koneksi = mysqli_connect($servername, $username, $password, $dbname);

if (!$koneksi) {
    die("Koneksi gagal: " . mysqli_connect_error());
}
