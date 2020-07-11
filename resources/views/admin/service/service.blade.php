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
                <h3 class="text-themecolor mb-0">Services</h3>
                <ol class="breadcrumb mb-0">
                    <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                    <li class="breadcrumb-item active">Services</li>
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
                            <h4 class="card-title">Services</h4>
                            <div class="table-responsive">
                                <table id="service_table" class="table table-striped table-bordered">
                                    <thead>
                                        <tr>
                                            <th>No.</th>
                                            <th>Service Name</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($services as $num => $service)
                                        <tr>
                                            <td>{{$num + 1}}</td>
                                            <td>{{$service->service_title}}</td>
                                            <td>
                                                <center>                             
                                                    <span data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit Project"><a class="icon-green" href="javascript:get_service({{$service->id}})"><i class="fa fa-edit"></i></a></span>
                                                    <span data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete Project"><a class="icon-red" href="javascript:delete_service({{$service->id}}, '{{$service->service_title}}')"><i class="fa fa-trash"></i></a></span>
                                                </center>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <a data-toggle="modal" data-target="#modal_create_service" data-tooltip="tooltip" data-placement="top" title="" data-original-title="Add Service" href="javascript:void(0)" class="floating-btn"><i class="fa fa-plus"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- End Container fluid  -->
        <!-- ============================================================== -->

        <!-- Modal Create Service-->
        <div class="modal fade" id="modal_create_service" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h2 class="modal-title" id="largeModalLabel">Create New Slider</h2>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form id="create_service" enctype="multipart/form-data" action="" method="POST">
                        @csrf
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-12">  
                                    <div class="form-group">
                                        <label class="form-label">Service Title</label>
                                        <input type="text" class="form-control" id="service_title" name="service_title" placeholder="Ex. Slider 1" >
                                    </div>
                                    <div class="form-group">
                                        <h4 class="card-title">Service Description</h4>
                                        <textarea id="service_description" name="service_description" class="summernote"><h4>Default Summernote</h4></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label class="form-label">Service Icon</label>
                                        <input type="text" class="form-control" id="service_title" name="service_icon" placeholder="Ex. Slider 1" >
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-blue-gradient" data-dismiss="modal">Close</button>
                            <button type="button" onclick="create_service()" class="btn btn-green-gradient">Save</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <!-- Modal Update Slider-->
        <div class="modal fade" id="modal_update_service" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h2 class="modal-title" id="largeModalLabel">Create New Project</h2>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form id="update_service" enctype="multipart/form-data" action="" method="POST">
                        @csrf
                        <input type="hidden" value="" id="service_id" name="service_id">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-12">  
                                    <div class="form-group">
                                        <label class="form-label">Service Title</label>
                                        <input type="text" class="form-control" id="service_title_edit" name="service_title_edit" placeholder="Ex. Slider 1" >
                                    </div>
                                    <div class="form-group">
                                        <h4 class="card-title">Service Description</h4>
                                        <textarea id="service_description_edit" name="service_description_edit" class="summernote"><h4>Default Summernote</h4></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label class="form-label">Service Icon</label>
                                        <input type="text" class="form-control" id="service_icon_edit" name="service_icon_edit" placeholder="Ex. Slider 1" >
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-blue-gradient" data-dismiss="modal">Close</button>
                            <button type="button" onclick="update_service()" class="btn btn-green-gradient">Save</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
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
                $('#service_table').dataTable( {
                    "columns": [
                        { "width": "5%" },
                        null,
                        { "orderable": false, "width": "8%" }
                    ],
                    "bDestroy": true
                });
                // $('a[data-toggle="tab"]').on( 'shown.bs.tab', function (e) {
                //     $('#service_table').dataTable( {
                //         "columns": [
                //             { "width": "5%" },
                //             null,
                //             { "orderable": false, "width": "8%" }
                //         ],
                //         "bDestroy": true
                //     });
                // });
            });
            
            function create_service(){
                var service = $("#create_service").get(0)
                swal.fire({
                title: "Create Project",
                text: "Add new data project? ",
                type: "warning",
                showCancelButton: true,
                confirmButtonText: "Save",
                showLoaderOnConfirm: true,
                preConfirm: () => {  
                    var service = $("#create_service").get(0)
                    return $.ajax({
                        type: "POST", 
                        url: "{{route('admin.service.create')}}",
                        processData: false,
                        contentType: false,
                        cache: false,
                        data: new FormData(service), 
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
                        window.location.href = "{{ url('/admin-dtw/service')}}";
                    });
                    }
                })

            }

            function get_service(service_id){
                link = "{{route('admin.service.edit', ':id')}}";
                link = link.replace(':id', service_id);
                $.ajax({
                    url: link,
                    method: "GET",
                    dataType: 'json',
                    success: function(data){
                        $('#service_id').val(data.data_service.id);
                        $('#service_title_edit').val(data.data_service.service_title);
                        $('#service_description_edit').summernote('code', data.data_service.service_description);
                        $('#service_icon_edit').val(data.data_service.service_icon);
                        $('#modal_update_service').modal('show');
                    }
                });
            }
            function update_service(){
                var service = $("#update_service").get(0);
                swal.fire({
                title: "Update "+$('#service_title_edit').val()+"?",
                type: "warning",
                html: '<p>Do you will to update this project?</p>',
                showCancelButton: true,
                confirmButtonText: "Update",
                showLoaderOnConfirm: true,
                preConfirm: (login) => {  
                    $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                    });
                    var service = $("#update_service").get(0);
                    service_id = $('#service_id').val();
                    link = "{{route('admin.service.update', ':id')}}";
                    link = link.replace(':id', service_id);
                    return $.ajax({
                        type: "POST", 
                        url: link ,
                        processData: false,
                        contentType: false,
                        cache: false,
                        data: new FormData(service), 
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
                        window.location.href = "{{ url('/admin-dtw/service')}}";
                    });
                    }
                })
            }
            

            //delete data
            function delete_service(service_id, service_title){
                link = "{{route('admin.service.destroy', ':id')}}";
                link = link.replace(':id', service_id);
                
                swal.fire({
                    title: "Delete "+service_title+"?",
                    text: ""+service_title+" will deleted on your project list!",
                    type: "warning",
                    showCancelButton: true,
                    confirmButtonClass: "btn-danger",
                    confirmButtonText: "Delete",
                    closeOnConfirm: true,
                    preConfirm: (login) => {
                        $.ajaxSetup({
                            headers: {
                                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                            }
                        });
                        return $.ajax({
                            type: "DELETE", 
                            url: link,
                            datatype : "json", 
                            data:{"_token": "{{ csrf_token() }}", id:service_id},
                            success: function(data) {
                            
                            },
                            error: function(data){
                                swal.fire({title:"Form Failed to Deleted!", text:"This project was not deleted successfully", type:"error"});
                            }
                        }); 
                    } 
                }).then((result) => {
                    if(result.value){
                        swal.fire({title:"Project Deleted!", text:"This form has been deleted on your project list", type:"success"})
                        .then(function(){ 
                            window.location.href = "{{ url('/admin-dtw/service')}}";
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