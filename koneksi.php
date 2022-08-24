<?php
$host = "localhost";
$user = "u1705195_qbotsista";
$password = "Slankers190690";
$db = "u1705195_undangan";

// $host = "localhost";
// $user = "root";
// $password = "";
// $db = "undangan";

$kon = mysqli_connect($host, $user, $password, $db);
if (!$kon) {
    die("Koneksi gagal:" . mysqli_connect_error());
}
