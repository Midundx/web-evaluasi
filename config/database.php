<?php

// Informasi koneksi database
$servername = "localhost"; // Nama server
$username = "root"; // Nama pengguna database
$password = ""; // Kata sandi database
$dbname = "web-evaluasi"; // Nama database

//Membuat koneksi
$conn = new mysqli($servername, $username, $password, $dbname);

// // Memeriksa koneksi
// if ($conn->connect_error) {
//     die("Koneksi gagal: " . $conn->connect_error);
// } 
// echo "Koneksi berhasil";


?>


