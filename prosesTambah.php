<?php

$NRP = $_POST["NRP"];
$Nama = $_POST["Nama"];
$Alamat = $_POST["Alamat"];
$ID_Jur = $_POST["ID_Jur"];

$conn = mysqli_connect("localhost", "root", "", "faraqu_1");

if (!$conn) {
    die("Koneksi gagal");
}

$sql = "INSERT INTO mahasiswa (NRP, Nama, Alamat, ID_Jur)
        VALUES ('$NRP', '$Nama', '$Alamat', '$ID_Jur')";

mysqli_query($conn, $sql);

echo "Data berhasil ditambahkan";

?>