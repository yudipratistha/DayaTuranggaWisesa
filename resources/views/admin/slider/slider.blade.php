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
                <h3 class="text-themecolor mb-0">Slider</h3>
                <ol class="breadcrumb mb-0">
                    <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                    <li class="breadcrumb-item active">Slider</li>
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
                            <h4 class="card-title">Slider</h4>
                            <div class="table-responsive">
                                <table id="slider_table" class="table table-striped table-bordered">
                                    <thead>
                                        <tr>
                                            <th>No.</th>
                                            <th>Slider Name</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($sliders as $num => $slider)
                                        <tr>
                                            <td>{{$num + 1}}</td>
                                            <td>{{$slider->slider_name}}</td>
                                            <td>
                                                <center>                             
                                                    <span data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit Project"><a class="icon-green" href="javascript:get_slider({{$slider->id}})"><i class="fa fa-edit"></i></a></span>
                                                    <span data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete Project"><a class="icon-red" href="javascript:delete_slider({{$slider->id}}, '{{$slider->slider_name}}')"><i class="fa fa-trash"></i></a></span>
                                                </center>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- End Container fluid  -->
        <!-- ============================================================== -->
            <a data-toggle="modal" data-target="#modal_create_slider" data-tooltip="tooltip" data-placement="top" title="" data-original-title="Add Slider" href="javascript:void(0)" class="floating-btn"><i class="fa fa-plus"></i></a>
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

    <!-- Modal Create Slider-->
    <div class="modal fade" id="modal_create_slider" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h2 class="modal-title" id="largeModalLabel">Create New Slider</h2>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form id="create_slider" enctype="multipart/form-data" action="" method="POST">
                    @csrf
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-12">  
                                <div class="form-group">
                                    <label class="form-label" >Slider Name</label>
                                    <input type="text" class="form-control" id="slider_name" name="slider_name" placeholder="Ex. Slider 1" >
                                </div>
                                <div class="form-group">
                                    <h4 class="card-title">Default Summernote Editor</h4>
                                    <textarea id="slider_description" name="slider_description" class="summernote"><h4>Default Summernote</h4></textarea>
                                </div>
                                <div class="form-group">
                                    <h4 class="card-title">Select Animation Slider</h4>
                                    <select id="slider_animated" name="slider_animated" class="select2 form-control custom-select" style="width: 100%; height:36px;" >
                                        <option>Select</option>
                                            <option value="up">Up</option>
                                            <option value="down">Down</option>
                                            <option value="in">In</option>
                                            <option value="out">Out</option>
                                            <option value="left">Left</option>
                                            <option value="right">Right</option>
                                        </optgroup>
                                    </select>
                                </div>
                                <div class="form-group form-alert">
                                    <label class="form-label" >Upload Photo</label>
                                    <input type="file" value="" class="form-control input-md" name="slider_photo" id="slider_photo" accept="image/*">
                                </div> 
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-blue-gradient" data-dismiss="modal">Close</button>
                        <button type="button" onclick="create_slider()" class="btn btn-green-gradient">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Modal Update Slider-->
    <div class="modal fade" id="modal_update_slider" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h2 class="modal-title" id="largeModalLabel">Create New Project</h2>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form id="update_slider" enctype="multipart/form-data" action="" method="POST">
                    @csrf
                    <input type="hidden" value="" id="slider_id" name="slider_id">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-12">  
                                <div class="form-group">
                                    <label class="form-label" >Slider Name</label>
                                    <input type="text" class="form-control" id="slider_name_edit" name="slider_name_edit" placeholder="Ex. Slider 1" >
                                </div>
                                <div class="form-group">
                                    <h4 class="card-title">Default Summernote Editor</h4>
                                    {{-- <div id="slider_description_edit" name="slider_description_edit" class="summernote"></div> --}}
                                    <textarea id="slider_description_edit" name="slider_description_edit" class="summernote"></textarea>
                                </div>
                                <div class="form-group">
                                    <h4 class="card-title">Select Animation Slider</h4>
                                    <select id="slider_animated_edit" name="slider_animated_edit" class="select2 form-control custom-select" style="width: 100%; height:36px;" >
                                        <option>Select</option>
                                            <option value="up">Up</option>
                                            <option value="down">Down</option>
                                            <option value="in">In</option>
                                            <option value="out">Out</option>
                                            <option value="left">Left</option>
                                            <option value="right">Right</option>
                                        </optgroup>
                                    </select>
                                </div>
                                <div class="form-group form-alert">
                                    <label class="form-label" >Upload Photo</label>
                                    <input type="file" value="" class="form-control input-md" name="slider_photo_edit" id="slider_phot_edito" accept="image/*">
                                </div> 
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-blue-gradient" data-dismiss="modal">Close</button>
                        <button type="button" onclick="update_slider()" class="btn btn-green-gradient">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    @section('jquery-page')
        <!--This page plugins -->
        <script src="../assets/libs/datatables/media/js/jquery.dataTables.min.js"></script>
        <script src="../../dist/js/pages/datatable/custom-datatable.js"></script>
        <script src="../../dist/js/pages/datatable/datatable-basic.init.js"></script>
        <script>
            $(document).ready(function() {
                $('[data-tooltip="tooltip"]').tooltip();
                $('#slider_table').dataTable( {
                    "columns": [
                        { "width": "5%" },
                        null,
                        { "orderable": false, "width": "8%" }
                    ]
                } );
            });

            function create_slider(){
                var slider = $("#create_slider").get(0)
                console.log("test update ", slider)
                swal.fire({
                title: "Create Project",
                text: "Add new data project? ",
                type: "warning",
                showCancelButton: true,
                confirmButtonText: "Save",
                showLoaderOnConfirm: true,
                preConfirm: () => {  
                    var slider = $("#create_slider").get(0)
                    return $.ajax({
                        type: "POST", 
                        url: "{{route('admin.slider.create')}}",
                        processData: false,
                        contentType: false,
                        cache: false,
                        data: new FormData(slider), 
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
                        window.location.href = "{{ url('/admin-dtw/slider')}}";
                    });
                    }
                })

            }

            function get_slider(slider_id){
                link = "{{route('admin.slider.edit', ':id')}}";
                link = link.replace(':id', slider_id);
                $.ajax({
                    url: link,
                    method: "GET",
                    dataType: 'json',
                    success: function(data){
                        $('#slider_id').val(data.data_slider.id);
                        $('#slider_name_edit').val(data.data_slider.slider_name);
                        $('#slider_description_edit').summernote('code', data.data_slider.slider_description);
                        $('#modal_update_slider').modal('show');
                    }
                });
            }
            function update_slider(){
                var slider = $("#update_slider").get(0);
                swal.fire({
                title: "Update "+$('#slider_name_edit').val()+"?",
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
                    var slider = $("#update_slider").get(0);
                    slider_id = $('#slider_id').val();
                    link = "{{route('admin.slider.update', ':id')}}";
                    link = link.replace(':id', slider_id);
                    return $.ajax({
                        type: "POST", 
                        url: link ,
                        processData: false,
                        contentType: false,
                        cache: false,
                        data: new FormData(slider), 
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
                        window.location.href = "{{ url('/admin-dtw/slider')}}";
                    });
                    }
                })
            }
            

            //delete data
            function delete_slider(slider_id, slider_name){
                link = "{{route('admin.slider.destroy', ':id')}}";
                link = link.replace(':id', slider_id);
                
                swal.fire({
                    title: "Delete "+slider_name+"?",
                    text: ""+slider_name+" will deleted on your project list!",
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
                            data:{"_token": "{{ csrf_token() }}", id:slider_id},
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
                            window.location.href = "{{ url('/admin-dtw/slider')}}";
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