<?php
// Koneksi ke database
$servername = "127.0.0.1";  // jika PHP dan MySQL satu server
$username = "rafii";
$password = "Ja#io2dF38rP";
$database = "mydb";

$conn = new mysqli($servername, $username, $password, $database);

if ($conn->connect_error) {
  die("Koneksi gagal: " . $conn->connect_error);
}

// Masukkan data tanggal hari ini ke tabel pengunjung
$tanggal = date("Y-m-d");
$waktu   = date("H:i:s");

$sql = "INSERT INTO pengunjung (tanggal, waktu) VALUES ('$tanggal', '$waktu')";
$conn->query($sql);

$conn->close();
?>
