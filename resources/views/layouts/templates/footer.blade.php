</div>
<!-- ./Container-fluid -->
</div>
<!-- ./Content -->
</div>
<!-- ./wrapper -->

<a class="scroll-to-top rounded" href="#page-top">
<i class="fas fa-angle-up"></i>
</a>


<!-- Sweet Alert 2 -->
@if(session()->has('message'))
    <div class="flashdata" data-flashdata="{{ session('message') }}"></div>
@endif

@if(session()->has('message-success'))
    <div class="flashdata-success" data-flashdata="{{ session('message-success') }}"></div>
@endif

@if(session()->has('message-failed'))
    <div class="flashdata-failed" data-flashdata="{{ session('message-failed') }}"></div>
@endif

<!-- ./Sweet Alert 2 -->

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="{{ asset('assets/vendor/jquery/jquery-3.4.1.min.js') }}"></script>
<script src="{{ asset('assets/vendor/jquery/jquery.mCustomScrollbar.concat.min.js') }}"></script>
<script src="{{ asset('assets/vendor/jquery/jquery.easing.min.js') }}"></script>
<script src="{{ asset('assets/vendor/jquery/popper.min.js') }}"></script>
<script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('assets/vendor/chartjs/Chart.bundle.min.js') }}"></script>
<script src="{{ asset('assets/vendor/datatables/datatables/js/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('assets/vendor/datatables/datatables/js/dataTables.bootstrap4.min.js') }}"></script>
<script src="{{ asset('assets/vendor/fancybox/jquery.fancybox.min.js') }}"></script>
<script src="{{ asset('assets/vendor/fontawesome/js/all.min.js') }}"></script>
<script src="{{ asset('assets/vendor/sweetalert2/sweetalert2.all.min.js') }}"></script>
<script src="{{ asset('assets/vendor/select2/select2.min.js') }}"></script>

<!-- Config JavaScript -->
<script src="{{ asset('assets/js/config-datatables.js') }}"></script>
<script src="{{ asset('assets/js/config-fancybox.js') }}"></script>
<script src="{{ asset('assets/js/config-sweetalert2.js') }}"></script>
<script src="{{ asset('assets/js/config-sidebar.js') }}"></script>
<script src="{{ asset('assets/js/config-select2.js') }}"></script>

</body>
</html>