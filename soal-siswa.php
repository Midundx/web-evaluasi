<?php
// Memanggil Sebuah Koneksi dari database
include 'config/app.php';
// Sesi untuk hak ases
session_start();
$jabatan_diizinkan = ["siswa", "Admin"];
if (!in_array($_SESSION["jabatan"], $jabatan_diizinkan)) {
    echo "<script>
            alert('Login dulu ');
            document.location.href = 'login.php';
        </script>";
    exit;
  }
// Menampilkan data dari databse untuk menampilkan sebuah nama dengan jabatan tertenntu
  $data_tampil = select("SELECT nama,jabatan FROM user");
?>
<!-- Menampilkan nama dari database dengan Sisi User  -->
<?php foreach( $data_tampil as $data ):?>
    <?php if($data['jabatan'] == 'siswa'): ?>
        <h1><?php echo $data['nama'];?></h1>
    <?php endif;?>
<?php endforeach; ?>