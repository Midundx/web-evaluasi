<?php
 

include 'config/app.php';
if(isset($_POST['register'])){
  if (create_user($_POST) > 0 ){
    echo 
    "<script>
    alert('Anda Berhasil Register');
    document.location.href = 'login.php';
    </script>";

    echo 
    "<script>
    alert('data eror');
    </script>";
  }
}


include 'layout/partial/header.php';
?>


<body class="hold-transition register-page">
<div class="register-box">
  <div class="card card-outline card-primary">
    <div class="card-header text-center">
      <a href="../../index2.html" class="h1"><b>Form</b>Register</a>
    </div>
    <div class="card-body">
      <p class="login-box-msg">Register a new membership</p>

      <form action="" method="post">
        <div class="input-group mb-3">
          <input type="text" class="form-control" name="username" placeholder="Username" required>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-users"></span>
            </div>
          </div>
          <div id="invalidCheck3Feedback" class="invalid-feedback">
             You must agree before submitting.
          </div>
        </div>

        <div class="input-group mb-3">
          <input type="text" class="form-control" name="nama" placeholder="Full name" required>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user"></span>
            </div>
          </div>
        </div>

        <div class="input-group mb-3">
        <select class="custom-select" name="jabatan" id="inputGroupSelect01">
            <option selected>Anda Sebagai</option>
            <option value="kepala">kepala Sekolah</option>
            <option value="kolega">Kolega/Teman sejawat</option>
            <option value="tamatan diklat">Tamatan Pelatihan</option>
            <option value="siswa">Siswa</option>
            <option value="admin" disabled>Admin</option>
        </select>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-address-book"></span>
            </div>
          </div>
        </div>

        <div class="input-group mb-3">
          <input type="text" class="form-control" name="institusi"   placeholder="Nama Insitusi/Sekolah" required>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-bank"></span>
            </div>
          </div>
        </div>

        <div class="input-group mb-3">
        <select class="custom-select" name="kota" id="inputGroupSelect01">
            <option selected>Pilih Kota/Kabupaten</option>
            <option value="Bandung">BANDUNG</option>
            <option value="Jakarta">JAKARTA</option>
            <option value="Bogor">BOGOR</option>
            <option value="Cianjur">CIANJUR</option>
            <option value="Bekasi">BEKASI</option>
            <option value="Depok">DEPOK</option>
            <option value="Karawang">KARAWANG</option>
        </select>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-map"></span>
            </div>
          </div>
        </div>

        <div class="input-group mb-3">
          <input type="number" class="form-control" name="wa" placeholder="No Handphone/Whatsapp" required>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-phone"></span>
            </div>
          </div>
        </div>

        <div class="input-group mb-3">
          <input type="email" class="form-control" name="email" placeholder="Email" required>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>

        <div class="input-group mb-3">
          <input type="password" class="form-control" name="password" placeholder="Password" required>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>

          <!-- /.col -->
          <div class="md-col-6">
            <button type="submit" name="register" class="btn btn-primary btn-block">Register</button>
          </div>
          <!-- /.col -->
        </div>
      </form>
      <p class="mt-2 text-center">
        <span>you already have an account </span><a href="login.php">Login</a>
      </p>
    </div>
    <div>
    </div>
    <!-- /.form-box -->
  </div><!-- /.card -->
</div>
<!-- /.register-box -->

<!-- APi daerah -->
<script>
</script>

<?php

include 'layout/partial/footer.php';
?>