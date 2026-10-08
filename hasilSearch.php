<?php

$Nama = $_POST["Nama"];

$conn = mysqli_connect("localhost", "root", "", "faraqu_1");

if (!$conn) {
    die("Koneksi gagal");
}

$sql = "SELECT mahasiswa.NRP, mahasiswa.Nama, mahasiswa.Alamat, jurusan.Nama AS NamaJurusan
        FROM mahasiswa
        JOIN jurusan ON mahasiswa.ID_Jur = jurusan.ID_Jur
        WHERE mahasiswa.Nama LIKE '%$Nama%'";

$result = mysqli_query($conn, $sql);

while ($row = mysqli_fetch_assoc($result)) {
    echo "NRP : " . $row["NRP"] . "<br>";
    echo "Nama : " . $row["Nama"] . "<br>";
    echo "Alamat : " . $row["Alamat"] . "<br>";
    echo "Jurusan : " . $row["NamaJurusan"] . "<br>";
    echo "<hr>";
}

?>