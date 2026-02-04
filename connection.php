<?php
$hostname = "localhost";
$username = "root"; 
$password = "";
$database = "sekolah"; // bebas database yang kalian mau cobain sendiri

$conn = mysqli_connect($hostname, $username, $password, $database); //di usahakan rapi buatnya agar kalian paham

if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}

echo "Koneksi berhasil";
