<?php
session_start();
session_reset();
include 'config/app.php';


// Maksimum percobaan login yang diperbolehkan
$max_login_attempts = 3;

// Cek apakah pengguna telah mencoba login sebelumnya
if (!isset($_SESSION['login_attempts'])) {
    $_SESSION['login_attempts'] = 0;
}

if (isset($_POST['login'])) {
  // ambil input username dan password
  $username = mysqli_real_escape_string($conn, $_POST['username']);
  $password = mysqli_real_escape_string($conn, $_POST['password']);

  $result = mysqli_query($conn, "SELECT * FROM user WHERE username = '$username'");

if (mysqli_num_rows($result) == 1) {
  // check passwordnya
  $hasil = mysqli_fetch_assoc($result);
  // Session Input Untuk Di kirim Ke Database
  if (password_verify($password, $hasil['password'])) {
      // set session  
      $_SESSION['login']     = true;
      $_SESSION['username']  = $hasil['username'];
      $_SESSION['nama']      = $hasil['nama'];
      $_SESSION['jabatan']   = $hasil['jabatan'];
      $_SESSION['institusi'] = $hasil['institusi'];
      $_SESSION['kota']      = $hasil['kota'];
      $_SESSION['wa']        = $hasil['wa'];
      $_SESSION['email']     = $hasil['email'];
      // jika login benar arahkan ke file user Sesuai Jabatan
      switch ($hasil['jabatan']) {
          case "admin":
              header("Location:dashboard.php");
              break;
          case "kepala":
          case "Kolega":
              header("Location:index.php");
              break;
          case "tamatan diklat":
          case "siswa":
            header("Location:soal-siswa.php");
              break;
        }
      exit;
          }
      } else {
   // Login gagal, tambahkan satu percobaan login
   $_SESSION['login_attempts']++;

   // Periksa apakah melebihi maksimum percobaan login yang diperbolehkan
   if ($_SESSION['login_attempts'] >= $max_login_attempts) {
  // Jika melebihi, lakukan tindakan tertentu, seperti memblokir akses atau mengaktifkan perlindungan lebih lanjut
       $_SESSION['error_message'] = "Anda telah mencapai batas maksimum percobaan login. Silakan coba lagi nanti.";
       header("Location: login.php"); // Redirect kembali ke halaman login
       exit();
   } else {
       // Jika masih dalam batas, simpan pesan kesalahan di sesi
       $_SESSION['error_message'] = "Username atau password salah. Percobaan login tersisa: " . ($max_login_attempts - $_SESSION['login_attempts']);
       header("Location: login.php"); // Redirect kembali ke halaman login
       exit();
       $error = true;
   }
  }
}

if(isset($_SESSION['error_message'])) {
  $pesan_alert = $_SESSION['error_message'];
  $jenis_alert = "danger";
  unset($_SESSION['error_message']); // Hapus pesan kesalahan setelah ditampilkan
}
//Tampilkan File pada Folder layout
include 'layout/partial/header.php';
?>

<body class="hold-transition login-page">
<div class="login-box">
  <!-- /.login-logo -->
  <div class="card card-outline card-primary">
    <div class="card-header text-center">
    <img src="layout/img/tutwuri.png" hight="150" width="150" alt="Tut Wuri Handayani Png Logo - Logo Paud Sehat Cerdas Ceria, Transparent "  alt="Circle Image">
      <a href="#" class="h1"><b>Form</b>login</a>
    </div>
    <div class="card-body">
      <p class="login-box-msg">Sign in to start your session</p>
      <!-- Alert -->
      <!-- Pemberitahuan Pesan Pada Login Terjadi Eror -->
      <?php if(!empty($pesan_alert)): ?>
        <div class="alert alert-<?php echo $jenis_alert; ?> alert-dismissible fade show" role="alert">
            <?php echo $pesan_alert; ?>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <?php endif; ?>
        <!-- Akhir Alert -->
      <form action="" method="post">
        <!-- Section Group Input -->
        <div class="input-group mb-3">
          <input type="text" name="username" class="form-control" placeholder="username">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" name="password" class="form-control" placeholder="Password">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
          <!-- /.col -->
          <div class="md-col-6">
            <button type="submit" name="login" class="btn btn-primary btn-block">Sign In</button>
          </div>
          <!-- /.col -->
          <!-- End Section Group Input -->
      </form>
      <!-- /.social-auth-links -->

      <!-- Jika user Belum Memiliki Akun Maka Alihkan ke dalam File Register -->
      <p class="mt-3 text-center">
        <span>You have acount </span><a href="register.php">Register</a>
      </p>
    </div>
    <!-- /.card-body -->
  </div>
  <!-- /.card -->
</div>
<!-- /.login-box -->

<?php include 'layout/partial/footer.php'; ?>