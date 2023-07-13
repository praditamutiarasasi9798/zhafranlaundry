<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Zhafran Laundry| Jabatan</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{asset('plugins/fontawesome-free/css/all.min.css')}}">
  <!-- DataTables -->
  <link rel="stylesheet" href="{{asset('plugins/datatables-bs4/css/dataTables.bootstrap4.min.css')}}">
  <link rel="stylesheet" href="{{asset('plugins/datatables-responsive/css/responsive.bootstrap4.min.css')}}">
  <link rel="stylesheet" href="{{asset('plugins/datatables-buttons/css/buttons.bootstrap4.min.css')}}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{asset('dist/css/adminlte.min.css')}}">
  <!-- SweetAlert2 -->
<link rel="stylesheet" href="{{asset('plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css')}}">
  <!-- Toastr -->
  <link rel="stylesheet" href="{{asset('plugins/toastr/toastr.min.css')}}">
</head>

@include('layouts/header')
@include('layouts/sidebar')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>FORM CUSTOMER   </h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">DataTables</li>
            </ol>
          </div>
        </div>
      </div>
      <!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-body">
                <div class="card card-info">
                  <div class="card-header">
                    <h3 class="card-title">Horizontal Form</h3>
                  </div>
                  <!-- /.card-header -->
                  <!-- form start -->
                  <form class="form-horizontal" action="{{'/customer/'. $editcustomer->id_customer}}" method="post">
                    @csrf
                    @method('PUT')
                    <div class="card-body">
                      <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Nama customer</label>
                        <div class="col-sm-10 mb-5">
                          <input type="text" name="nama_customer" value="{{$editcustomer->nama_customer}}" class="form-control" placeholder="customer" required>
                        </div>
                        <label class="col-sm-2 col-form-label">Telepon</label>
                        <div class="col-sm-10 mb-5">
                          <input type="text" name="telepon" value="{{$editcustomer->telepon}}" class="form-control" placeholder="customer" required>
                        </div>
                        <label class="col-sm-2 col-form-label">Jenis Kelamin</label>
                        <div class="col-sm-10 mb-5">
                            <select class="form-control select2" style="width: 100%;" name="jk" id="jk" required>
                                @if ($editcustomer->jk=='Laki-Laki')
                                    <option selected="selected" value="Laki-Laki">Laki-Laki</option>
                                    <option value="Perempuan">Perempuan</option>
                                @elseif ($editcustomer->jk=='Perempuan')
                                    <option selected="selected" value="Perempuan">Perempuan</option>
                                    <option value="Laki-Laki">Laki-Laki</option>
                                @endif
                            </select>
                        </div>
                        <label class="col-sm-2 col-form-label">Alamat</label>
                        <div class="col-sm-10">
                            <textarea name="alamat" id="alamat" cols="112" rows="4" required>
                                {{$editcustomer->alamat}}
                            </textarea>
                        </div>
                      </div>

                    </div>
                    <!-- /.card-body -->
                    <div class="card-footer">
                      <button type="submit"  class="btn btn-info">Simpan</button>
                      <a href="/customer">
                      <button type="button" class="btn btn-default float-right" >Cancel</button>
                    </a>
                    </div>
                    <!-- /.card-footer -->
                  </form>
                </div>
                <!-- /.card -->

              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>



  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <div class="float-right d-none d-sm-block">
      <b>Version</b> 3.1.0
    </div>
    <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong> All rights reserved.
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->


<!-- jQuery -->
<script src="{{asset('plugins/jquery/jquery.min.js')}}"></script>
<!-- Bootstrap 4 -->
<script src="{{asset('plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- DataTables  & Plugins -->
<script src="{{asset('plugins/datatables/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('plugins/datatables-bs4/js/dataTables.bootstrap4.min.js')}}"></script>
<script src="{{asset('plugins/datatables-responsive/js/dataTables.responsive.min.js')}}"></script>
<script src="{{asset('plugins/datatables-responsive/js/responsive.bootstrap4.min.js')}}"></script>
<script src="{{asset('plugins/datatables-buttons/js/dataTables.buttons.min.js')}}"></script>
<script src="{{asset('plugins/datatables-buttons/js/buttons.bootstrap4.min.js')}}"></script>
<script src="{{asset('plugins/jszip/jszip.min.js')}}"></script>
<script src="{{asset('plugins/pdfmake/pdfmake.min.js')}}"></script>
<script src="{{asset('plugins/pdfmake/vfs_fonts.js')}}"></script>
<script src="{{asset('plugins/datatables-buttons/js/buttons.html5.min.js')}}"></script>
<script src="{{asset('plugins/datatables-buttons/js/buttons.print.min.js')}}"></script>
<script src="{{asset('plugins/datatables-buttons/js/buttons.colVis.min.js')}}"></script>
<!-- SweetAlert2 -->
<script src="{{asset('plugins/sweetalert2/sweetalert2.min.js')}}"></script>
<!-- Toastr -->
<script src="{{asset('plugins/toastr/toastr.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{asset('dist/js/adminlte.min.js')}}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{asset('dist/js/demo.js')}}"></script>
<!-- Page specific script -->
<script>
$(function () {
$("#example1").DataTable({
"responsive": true, "lengthChange": false, "autoWidth": false,
"buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
}).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
$('#example2').DataTable({
"paging": true,
"lengthChange": false,
"searching": false,
"ordering": true,
"info": true,
"autoWidth": false,
"responsive": true,
});
});
</script>
