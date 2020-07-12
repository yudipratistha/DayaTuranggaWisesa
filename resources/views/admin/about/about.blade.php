@extends('layouts.app-admin')
@section('content')
<link href="../assets/libs/datatables.net-bs4/css/dataTables.bootstrap4.css" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="../assets/libs/summernote/dist/summernote-bs4.css">
    <!-- ============================================================== -->
    <!-- Page wrapper  -->
    <!-- ============================================================== -->
    <div class="page-wrapper">
        <!-- ============================================================== -->
        <!-- Bread crumb and right sidebar toggle -->
        <!-- ============================================================== -->
        <div class="row page-titles">
            <div class="col-md-5 col-12 align-self-center">
                <h3 class="text-themecolor mb-0">About</h3>
                <ol class="breadcrumb mb-0">
                    <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                    <li class="breadcrumb-item active">About</li>
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
                            <div class="row">
                                <div class="col-md-12">
                                    @if(!isset($about[0]->id))
                                        <form id="create_about" enctype="multipart/form-data" action="" method="POST">
                                    @else
                                        <form id="update_about" enctype="multipart/form-data" action="" method="POST">
                                    @endif
                                    @csrf
                                        <div class="form-group">
                                            <label class="form-label" >Company Profile Title</label>
                                            <input type="text" class="form-control" id="about_title" name="about_title" placeholder="PT. ..." value="">
                                        </div>
                                        <div class="form-group">
                                            <label class="form-label" >Company Profile Location</label>
                                            <input type="text" class="form-control" id="about_location" name="about_location" placeholder="Denpasar, Bali, Indonesia" value="">
                                        </div>  
                                        <div class="form-group" style="z-index: 1;position: relative;">
                                            <h4 class="card-title">Company Profile Description</h4>
                                            {{-- <div id="slider_description_edit" name="slider_description_edit" class="summernote"></div> --}}
                                            <textarea id="about_description" name="about_description" class="summernote"></textarea>
                                        </div>
                                        <div class="form-group form-alert">
                                            <label class="form-label" >Upload Photo</label>
                                            <input type="file" value="" class="form-control input-md" name="about_photo" id="about_photo" accept="image/*">
                                        </div> 
                                        
                                        @if(!isset($about[0]->id))
                                            <button type="button" onclick="create_about()" class="btn btn-green-gradient">Save</button>
                                        @else
                                            <input type="hidden" id="about_id" name="about_id" value="{{$about[0]->id}}">
                                            <button type="button" onclick="update_about()" class="btn btn-green-gradient">Save</button>
                                        @endif
                                    </form>
                                </div>
                            </div>
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
    </div>
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->

    @section('jquery-page')
        <!--This page plugins -->
        <script src="../assets/libs/datatables/media/js/jquery.dataTables.min.js"></script>
        <script src="../../dist/js/pages/datatable/custom-datatable.js"></script>
        <script src="../../dist/js/pages/datatable/datatable-basic.init.js"></script>
        <script>
            $(document).ready(function() {
                $('[data-tooltip="tooltip"]').tooltip();
                
                $('a[data-toggle="tab"]').on( 'shown.bs.tab', function (e) {
                    $('#service_table').dataTable( {
                        "columns": [
                            { "width": "5%" },
                            null,
                            { "orderable": false, "width": "8%" }
                        ],
                        "bDestroy": true
                    });
                });

                 
            });

            $(window).on("load", function(){
                if($('#about_id').length){
                    link = "{{route('admin.about.edit', ':id')}}";
                    link = link.replace(':id', $('#about_id').val());
                    $.ajax({
                        url: link,
                        method: "GET",
                        dataType: 'json',
                        success: function(data){
                            console.log(data.data_about)
                            $('#about_title').val(data.data_about.about_title);
                            $('#about_location').val(data.data_about.about_location);
                            $('#about_description').summernote('code', data.data_about.about_description);

                        }
                    });   
                } 
            });
            
            function create_about(){
                var about = $("#create_about").get(0)
                swal.fire({
                title: "Create Project",
                text: "Add new data project? ",
                type: "warning",
                showCancelButton: true,
                confirmButtonText: "Save",
                showLoaderOnConfirm: true,
                preConfirm: () => {  
                    var about = $("#create_about").get(0)
                    return $.ajax({
                        type: "POST", 
                        url: "{{route('admin.about.create')}}",
                        processData: false,
                        contentType: false,
                        cache: false,
                        data: new FormData(about), 
                        success: function(data) {
                            var request = 'success';
                        },
                        error: function(xhr, status, error){
                            swal.fire({title:"Create Project Error!", text: xhr.responseText, type:"error"});
                        }
                    });
                }                       
                }).then((result) => {
                    if(result.value){
                    swal.fire({title:"New Project Data Added", text:"Successfuly add new Project data!", type:"success"})
                    .then(function(){ 
                        window.location.href = "{{ url('/admin-dtw/about')}}";
                    });
                    }
                })
            }

            function update_about(){
                var about = $("#update_about").get(0);
                swal.fire({
                title: "Update About?",
                type: "warning",
                html: '<p>Do you will to update this project?</p>',
                showCancelButton: true,
                confirmButtonText: "Update",
                showLoaderOnConfirm: true,
                preConfirm: () => {  
                    $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                    });
                    var about = $("#update_about").get(0);
                    about_id = $('#about_id').val();
                    
                    link = "{{route('admin.about.update', ':id')}}";
                    link = link.replace(':id', about_id);
                    return $.ajax({
                        type: "POST", 
                        url: link ,
                        processData: false,
                        contentType: false,
                        cache: false,
                        data: new FormData(about), 
                        
                        success: function(data) {
                            
                        },
                        error: function(data){
                            swal.fire({title:"Project failed Update!", text:"This project failed to updated", type:"error"});
                        }
                    }); 
                                
                }          
                }).then((result) => {
                    if(result.value){
                    swal.fire({title:"Update Project Success!", text:"Successfully updated this project", type:"success"})
                    .then(function(){ 
                        window.location.href = "{{ url('/admin-dtw/about')}}";
                    });
                    }
                })
            }
            
        </script>
        <script src="../assets/libs/summernote/dist/summernote-bs4.min.js"></script>
        <script>
            $('.summernote').summernote({
                height: 350, // set editor height
                minHeight: null, // set minimum height of editor
                maxHeight: null, // set maximum height of editor
                focus: false, // set focus to editable area after initializing summernote
                toolbar: [
                    [ 'style', [ 'style' ] ],
                    [ 'font', [ 'bold', 'italic', 'underline', 'strikethrough', 'superscript', 'subscript', 'clear'] ],
                    [ 'fontname', [ 'fontname' ] ],
                    [ 'fontsize', [ 'fontsize' ] ],
                    [ 'color', [ 'color' ] ],
                    [ 'insert', [ 'link'] ],
                    [ 'view', [ 'undo', 'redo', 'fullscreen', 'codeview', 'help' ] ]
                ],
                disableDragAndDrop:true,
                callbacks: {
                    onPaste: function (e) {
                        var bufferText = ((e.originalEvent || e).clipboardData || window.clipboardData).getData('Text');
                        e.preventDefault();
                        document.execCommand('insertText', false, bufferText);
                    }
                },
            });
        </script>
    @endsection
@endsection