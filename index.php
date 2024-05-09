<?php
include 'config/app.php';  
include 'layout/partial/header.php';

session_start();
// // membatasi halaman sebelum login
if (!isset($_SESSION["login"])) {
     echo "<script>
            alert('login dulu dong');
            document.location.href = 'login.php';
           </script>";
  exit;
}
// //Hak ases 
$jabatan_diizinkan = ["Kolega,kepala", "Admin"];
if (!in_array($_SESSION["jabatan"], $jabatan_diizinkan)) {
     echo "<script>
             alert('Login dulu ');
             document.location.href = 'login.php';
         </script>";
     exit;
   }
?>

<body class="hold-transition layout-top-nav">
<div class="wrapper">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand-md navbar-light navbar-white">
    <div class="container">
      <img src="layout/img/logo-bmti.png" width="25" heigth="25" alt="Logo Bmti">
      <span> BBPPMVP BMTI</span>
      <!-- Right navbar links -->
      <ul class="order-1 order-md-3 navbar-nav navbar-no-expand ml-auto">
        <li class="nav-item dropdown">
            <a class="nav-link" data-toggle="dropdown" href="#">
            <img src="layout/img/user.jpg" alt="AdminLTE Logo" class="brand-image img-circle" style="opacity: .8">
            <span class="brand-text font-weight-light">User</span>
          <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
             <a href="" class="dropdown-item mb-3">
               <i class="fas fa-envelope mr-5"></i>Log out
              </a>
          </div>
        </li>
      </ul>
    </div>
  </nav>
  <!-- /.navbar -->

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container">
        <div class="row mb-2">
          <div class="col-sm-6">
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header --> 

    <!-- Main content -->
    <div class="content">
      <div class="container">
        <div class="row justif-content-center">
          <div class="col-mt-9">
             <div class="card card-primary card-outline">
              <div class="card-body">
                <div class="card-title">
                  <h2>A.Judul Soal</h2>
                  <div class="card">
                    <div class="card-body">
                      <h2 class="card-title">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Aspernatur debitis nobis neque! Sed quam quisquam ab optio! Ipsam ducimus possimus facilis dicta, aliquid et voluptatum sapiente est iure suscipit nesciunt!</h2>
                      <p class="card-text">
                      </p>
                       <div class="input-group-text">
                         <input type="radio" aria-label="Radio button for following text input">
                         <label for="radio"> YA </label>
                       </div>
            
                       <div class="input-group-text mt-3">
                         <input type="radio" aria-label="Radio button for following text input">
                         <label for="radio"> TIDAK </label>
                       </div>
            
                    </div>
      
                  </div>
                  <div class="card">
                    <div class="card-body">
                      <h2 class="card-title">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Aspernatur debitis nobis neque! Sed quam quisquam ab optio! Ipsam ducimus possimus facilis dicta, aliquid et voluptatum sapiente est iure suscipit nesciunt!</h2>
                      <p class="card-text">
                      </p>
                       <div class="input-group-text">
                         <input type="radio" aria-label="Radio button for following text input">
                         <label for="radio"> YA </label>
                       </div>
            
                       <div class="input-group-text mt-3">
                         <input type="radio" aria-label="Radio button for following text input">
                         <label for="radio"> TIDAK </label>
                       </div>
            
                    </div>
      
                  </div>
                  <div class="card">
                    <div class="card-body">
                      <h2 class="card-title">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Aspernatur debitis nobis neque! Sed quam quisquam ab optio! Ipsam ducimus possimus facilis dicta, aliquid et voluptatum sapiente est iure suscipit nesciunt!</h2>
                      <p class="card-text">
                      </p>
                       <div class="input-group-text">
                         <input type="radio" aria-label="Radio button for following text input">
                         <label for="radio"> YA </label>
                       </div>
            
                       <div class="input-group-text mt-3">
                         <input type="radio" aria-label="Radio button for following text input">
                         <label for="radio"> TIDAK </label>
                       </div>
            
                    </div>
      
                  </div>
              </div>      
            </div>
          </div>    
          <div class="col-mt-9">
             <div class="card card-primary card-outline">
              <div class="card-body">
                <div class="card-title">
                  <h2>B.Judul Soal</h2>
                  <div class="card">
                    <div class="card-body">
                      <h2 class="card-title">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Aspernatur debitis nobis neque! Sed quam quisquam ab optio! Ipsam ducimus possimus facilis dicta, aliquid et voluptatum sapiente est iure suscipit nesciunt!</h2>
                      <p class="card-text">
                      </p>
                       <div class="input-group-text">
                         <input type="radio" aria-label="Radio button for following text input">
                         <label for="radio"> YA </label>
                       </div>
            
                       <div class="input-group-text mt-3">
                         <input type="radio" aria-label="Radio button for following text input">
                         <label for="radio"> TIDAK </label>
                       </div>
            
                    </div>
      
                  </div>
                  <div class="card">
                    <div class="card-body">
                      <h2 class="card-title">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Aspernatur debitis nobis neque! Sed quam quisquam ab optio! Ipsam ducimus possimus facilis dicta, aliquid et voluptatum sapiente est iure suscipit nesciunt!</h2>
                      <p class="card-text">
                      </p>
                       <div class="input-group-text">
                         <input type="radio" aria-label="Radio button for following text input">
                         <label for="radio"> YA </label>
                       </div>
            
                       <div class="input-group-text mt-3">
                         <input type="radio" aria-label="Radio button for following text input">
                         <label for="radio"> TIDAK </label>
                       </div>
            
                    </div>
      
                  </div>
                  <div class="card">
                    <div class="card-body">
                      <h2 class="card-title">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Aspernatur debitis nobis neque! Sed quam quisquam ab optio! Ipsam ducimus possimus facilis dicta, aliquid et voluptatum sapiente est iure suscipit nesciunt!</h2>
                      <p class="card-text">
                      </p>
                       <div class="input-group-text">
                         <input type="radio" aria-label="Radio button for following text input">
                         <label for="radio"> YA </label>
                       </div>
            
                       <div class="input-group-text mt-3">
                         <input type="radio" aria-label="Radio button for following text input">
                         <label for="radio"> TIDAK </label>
                       </div>
            
                    </div>
      
                  </div>
              </div>      
            </div>
          </div>    
          <!-- /.col-md-6 -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->

  <!-- Main Footer -->
  <footer class="main-footer">
    <!-- To the right -->
    <div class="float-right d-none d-sm-inline">
      Anything you want
    </div>
    <!-- Default to the left -->
    <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong> All rights reserved.
  </footer>
</div>
<!-- ./wrapper -->

<?php
include 'layout/partial/footer.php';
?>