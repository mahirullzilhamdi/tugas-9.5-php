<?php

$NRP = $_POST["NRP"];

$conn = mysqli_connect("localhost", "root", "", "faraqu_1");

if (!$conn) {
    die("Koneksi gagal");
}

$sql = "DELETE FROM mahasiswa WHERE NRP = '$NRP'";

mysqli_query($conn, $sql);

echo "Data berhasil dihapus";

?>