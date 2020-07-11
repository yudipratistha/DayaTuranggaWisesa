@extends('layouts.app-admin')
@section('content')
<link href="../assets/libs/datatables.net-bs4/css/dataTables.bootstrap4.css" rel="stylesheet">
<link rel="stylesheet" href="{{asset('css/plugins/leaflet.css')}}">
<!-- ============================================================== -->
    <!-- Page wrapper  -->
    <!-- ============================================================== -->
    <div class="page-wrapper">
        <!-- ============================================================== -->
        <!-- Bread crumb and right sidebar toggle -->
        <!-- ============================================================== -->
        <div class="row page-titles">
            <div class="col-md-5 col-12 align-self-center">
                <h3 class="text-themecolor mb-0">Contact</h3>
                <ol class="breadcrumb mb-0">
                    <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                    <li class="breadcrumb-item active">Contact</li>
                </ol>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- End Bread crumb and right sidebar toggle -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Container fluid  -->
        <!-- ============================================================== -->
        <div class="container-fluid">
            <!-- Row -->
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Contact</h4>
                            <div class="form-group">
                                <label class="form-label">Email</label>
                                <input type="text" class="form-control" id="service_title" name="service_title" placeholder="Ex. Slider 1" >
                            </div>
                            <div class="form-group">
                                <label class="form-label">Telephone</label>
                                <input type="text" class="form-control" id="service_title" name="service_title" placeholder="Ex. Slider 1" >
                            </div>
                            <div class="form-group">
                                <label class="form-label">Fax</label>
                                <input type="text" class="form-control" id="service_title" name="service_title" placeholder="Ex. Slider 1" >
                            </div>
                            <div class="form-group">
                                <label class="form-label">Address</label>
                                <input type="text" class="form-control" id="service_title" name="service_title" placeholder="Ex. Slider 1" >
                            </div>
                            <div id="mapid"></div>
                            <input type="hidden" id="pt-name" value="PT. Daya Turangga Wisesa">
                        <input type="hidden" id="pt-telephone" value="+62361499093">
                        <input type="hidden" id="pt-fax" value="+62361483586">
                        <input type="hidden" id="pt-address" value="Jl. Gunung Soputan No.28. Kel. Pemecutan Kelod Kecamatan Denpasar Barat Denpasar Bali.">
                        <input type="hidden" id="pt-lat" value="-8.688396">
                        <input type="hidden" id="pt-lng" value="115.189303">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- End Container fluid  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- footer -->
        <!-- ============================================================== -->
        <footer class="footer">
            © 2020 Material Pro Admin by wrappixel.com
        </footer>
        <!-- ============================================================== -->
        <!-- End footer -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Page wrapper  -->
    <!-- ============================================================== -->
    @section('jquery-page')
        <!--This page plugins -->
        <script src="../assets/libs/datatables/media/js/jquery.dataTables.min.js"></script>
        <script src="../../dist/js/pages/datatable/custom-datatable.js"></script>
        <script src="../../dist/js/pages/datatable/datatable-basic.init.js"></script>
        <script src="{{asset('js/leaflet.js')}}"></script>
        <script src="{{asset('js/map.js')}}"></script>

        <script>
            $(document).ready(function() {
                $('#portfolio_table').dataTable( {
                    "columns": [
                        { "width": "5%" },
                        null,
                        { "orderable": false, "width": "8%" }
                    ]
                } );
            });
        </script>
    @endsection
    
@endsection