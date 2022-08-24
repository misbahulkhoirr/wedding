<?php
include "../koneksi.php";

$nama = $_POST["nama"];
$pesan = $_POST["pesan"];

$sql = "INSERT INTO guest_qbotelma (nama,pesan) VALUES('$nama','$pesan')";

$hasil = mysqli_query($kon, $sql);
