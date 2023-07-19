<x-app-layout>  
    <!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Zhafran Laundry Dashboard</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{asset('AdminLTE')}}/plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="{{asset('AdminLTE')}}/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="{{asset('AdminLTE')}}/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="{{asset('AdminLTE')}}/plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{asset('AdminLTE')}}/dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="{{asset('AdminLTE')}}/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="{{asset('AdminLTE')}}/plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="{{asset('AdminLTE')}}/plugins/summernote/summernote-bs4.min.css">
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Preloader -->
  <div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__shake" src="{{asset('img/zhafranremove.png')}}" alt="AdminLTELogo" height="60" width="60">
  </div>

  <!-- Main Sidebar Container -->
 @include('layouts/sidebar')
    <!-- /.sidebar -->
  

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Dashboard</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Dashboard</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <!-- <div class="row">
          <div class="col-lg-3 col-6"> -->
            <!-- small box -->

<div class="row">
    <div class="col-lg-3 mb-3">
        <div class="card">
          <div class="card-body bg-danger text-white text-center">
            <div class="row justify-content-center">
              <div class="col-lg my-2">
                <i class="fas fa-3x fa-sync"></i>
              </div>
              <div class="col-lg my-2">
                <h1>	
                	<?php if (isset($jumlah_status_transaksi_proses['proses'])): ?>
			    		<?= $jumlah_status_transaksi_proses['proses']; ?>
		    		<?php else: ?>
		    			0
		    		<?php endif ?>
			    </h1>
              </div>
            </div>
            <div class="row">
              <div class="col-lg">
                <h5>Proses</h5>
              </div>
            </div>
          </div>
        </div>
    </div>

    <div class="col-lg-3 mb-3">
        <div class="card">
          <div class="card-body bg-warning text-white text-center">
            <div class="row justify-content-center">
              <div class="col-lg my-2">
                <i class="fas fa-3x fa-tshirt"></i>
              </div>
              <div class="col-lg my-2">
                <h1>	
                	<?php if (isset($jumlah_status_transaksi_dicuci['dicuci'])): ?>
			    		<?= $jumlah_status_transaksi_dicuci['dicuci']; ?>
		    		<?php else: ?>
		    			0
		    		<?php endif ?>
			    </h1>
              </div>
            </div>
            <div class="row">
              <div class="col-lg">
                <h5>Dicuci</h5>
              </div>
            </div>
          </div>
        </div>
    </div>

    <div class="col-lg-3 mb-3">
        <div class="card">
          <div class="card-body bg-info text-white text-center">
            <div class="row justify-content-center">
              <div class="col-lg my-2">
                <i class="fas fa-3x fa-people-carry"></i>
              </div>
              <div class="col-lg my-2">
                <h1>	
                	<?php if (isset($jumlah_status_transaksi_siap_diambil['siap diambil'])): ?>
			    		<?= $jumlah_status_transaksi_siap_diambil['siap diambil']; ?>
		    		<?php else: ?>
		    			0
		    		<?php endif ?>
			    </h1>
              </div>
            </div>
            <div class="row">
              <div class="col-lg">
                <h5>Siap Diambil</h5>
              </div>
            </div>
          </div>
        </div>
    </div>

    <div class="col-lg-3 mb-3">
        <div class="card">
          <div class="card-body bg-success text-white text-center">
            <div class="row justify-content-center">
              <div class="col-lg my-2">
                <i class="fas fa-3x fa-check-circle"></i>
              </div>
              <div class="col-lg my-2">
                <h1>	
                	<?php if (isset($jumlah_status_transaksi_sudah_diambil['sudah diambil'])): ?>
			    		<?= $jumlah_status_transaksi_sudah_diambil['sudah diambil']; ?>
		    		<?php else: ?>
		    			0
		    		<?php endif ?>
			    </h1>
              </div>
            </div>
            <div class="row">
              <div class="col-lg">
                <h5>Sudah Diambil</h5>
              </div>
            </div>
          </div>
        </div>
    </div>
</div>

                <div id="calendar" style="width: 100%"></div>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </section>
          <!-- right col -->
        </div>
        <!-- /.row (main row) -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
 @include('layouts/script')
</body>
</html>

</x-app-layout>
