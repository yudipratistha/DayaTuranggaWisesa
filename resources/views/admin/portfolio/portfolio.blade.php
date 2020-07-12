@extends('layouts.app-admin')
@section('content')
<link href="../assets/libs/datatables.net-bs4/css/dataTables.bootstrap4.css" rel="stylesheet">
<!-- ============================================================== -->
    <!-- Page wrapper  -->
    <!-- ============================================================== -->
    <div class="page-wrapper">
        <!-- ============================================================== -->
        <!-- Bread crumb and right sidebar toggle -->
        <!-- ============================================================== -->
        <div class="row page-titles">
            <div class="col-md-5 col-12 align-self-center">
                <h3 class="text-themecolor mb-0">Portfolio</h3>
                <ol class="breadcrumb mb-0">
                    <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                    <li class="breadcrumb-item active">Portfolio</li>
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
                            <h4 class="card-title">Portfolio</h4>
                            <div class="table-responsive">
                                <table id="portfolio_table" class="table table-striped table-bordered">
                                    <thead>
                                        <tr>
                                            <th>No.</th>
                                            <th>Portfolio Name</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($portfolios as $num => $portfolio)
                                            <tr>
                                                <td>{{$num + 1}}</td>
                                                <td>{{$portfolio->portfolio_name}}</td>
                                                <td>
                                                    <center>                             
                                                        <span data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit Project"><a class="icon-green" href="javascript:get_portfolio({{$portfolio->id}})"><i class="fa fa-edit"></i></a></span>
                                                        <span data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete Project"><a class="icon-red" href="javascript:delete_portfolio({{$portfolio->id}}, '{{$portfolio->portfolio_name}}')"><i class="fa fa-trash"></i></a></span>
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
        <a data-toggle="modal" data-target="#modal_create_portfolio" data-tooltip="tooltip" data-placement="top" title="" data-original-title="Add Service" href="javascript:void(0)" class="floating-btn"><i class="fa fa-plus"></i></a>
        
        <!-- Modal Create portfolio-->
        <div class="modal fade" id="modal_create_portfolio" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h2 class="modal-title" id="largeModalLabel">Create New Portfolio</h2>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form id="create_portfolio" enctype="multipart/form-data" action="" method="POST">
                        @csrf
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-12">  
                                    <div class="form-group">
                                        <label class="form-label">Portfolio Title</label>
                                        <input type="text" class="form-control" id="portfolio_title" name="portfolio_title" placeholder="Ex. Slider 1" >
                                    </div>
                                    <div class="form-group">
                                        <label class="form-label">Select Portfolio Tag</label>
                                        <select id="portfolio_tag" name="portfolio_tag" class="select2 form-control custom-select" style="width: 100%; height:36px;" >
                                            <option>Select</option>
                                            @foreach($portfolio_tags as $num => $portfolio_tag)
                                                <option value="{{$portfolio_tag->id}}">{{$portfolio_tag->portfolio_tag_name}}</option>
                                            @endforeach  
                                            </optgroup>
                                        </select>
                                    </div>
                                    <div class="form-group form-alert">
                                        <label class="form-label" >Upload Photo</label>
                                        <input type="file" value="" class="form-control input-md" name="portfolio_photo" id="portfolio_photo" accept="image/*">
                                    </div> 
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-blue-gradient" data-dismiss="modal">Close</button>
                            <button type="button" onclick="create_portfolio()" class="btn btn-green-gradient">Save</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <!-- Modal Update portfolio-->
        <div class="modal fade" id="modal_update_portfolio" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h2 class="modal-title" id="largeModalLabel">Create New Project</h2>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form id="update_portfolio" enctype="multipart/form-data" action="" method="POST">
                        @csrf
                        <input type="hidden" value="" id="portfolio_id" name="portfolio_id">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-12">  
                                    <div class="form-group">
                                        <label class="form-label">Portfolio Title</label>
                                        <input type="text" class="form-control" id="portfolio_title_edit" name="portfolio_title_edit" placeholder="Ex. Slider 1" >
                                    </div>
                                    <div class="form-group">
                                        <label class="form-label">Select Portfolio Tag</label>
                                        <select id="portfolio_tag_edit" name="portfolio_tag_edit" class="select2 form-control custom-select" style="width: 100%; height:36px;" >
                                            <option>Select</option>
                                            @foreach($portfolio_tags as $num => $portfolio_tag)
                                                <option value="{{$portfolio_tag->id}}">{{$portfolio_tag->portfolio_tag_name}}</option>
                                            @endforeach  
                                            </optgroup>
                                        </select>
                                    </div>
                                    <div class="form-group form-alert">
                                        <label class="form-label" >Upload Photo</label>
                                        <input type="file" value="" class="form-control input-md" name="portfolio_photo_edit" id="portfolio_photo_edit" accept="image/*">
                                    </div> 
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-blue-gradient" data-dismiss="modal">Close</button>
                            <button type="button" onclick="update_portfolio()" class="btn btn-green-gradient">Save</button>
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
    @section('jquery-page')
        <!--This page plugins -->
        <script src="../assets/libs/datatables/media/js/jquery.dataTables.min.js"></script>
        <script src="../../dist/js/pages/datatable/custom-datatable.js"></script>
        <script src="../../dist/js/pages/datatable/datatable-basic.init.js"></script>
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
            
            function create_portfolio(){
                var service = $("#create_portfolio").get(0)
                swal.fire({
                title: "Create Project",
                text: "Add new data project? ",
                type: "warning",
                showCancelButton: true,
                confirmButtonText: "Save",
                showLoaderOnConfirm: true,
                preConfirm: () => {  
                    var service = $("#create_portfolio").get(0)
                    return $.ajax({
                        type: "POST", 
                        url: "{{route('admin.portfolio.create')}}",
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
                        window.location.href = "{{ url('/admin-dtw/portfolio')}}";
                    });
                    }
                })

            }

            function get_portfolio(portfolio_id){
                link = "{{route('admin.portfolio.edit', ':id')}}";
                link = link.replace(':id', portfolio_id);
                $.ajax({
                    url: link,
                    method: "GET",
                    dataType: 'json',
                    success: function(data){
                        $('#portfolio_id').val(data.data_portfolio.id);
                        $('#portfolio_title_edit').val(data.data_portfolio.portfolio_name);
                        $('#modal_update_portfolio').modal('show');
                    }
                });
            }
            function update_portfolio(){
                var service = $("#update_portfolio").get(0);
                swal.fire({
                title: "Update "+$('#portfolio_name_edit').val()+"?",
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
                    var portfolio = $("#update_portfolio").get(0);
                    portfolio_id = $('#portfolio_id').val();
                    link = "{{route('admin.portfolio.update', ':id')}}";
                    link = link.replace(':id', portfolio_id);
                    return $.ajax({
                        type: "POST", 
                        url: link ,
                        processData: false,
                        contentType: false,
                        cache: false,
                        data: new FormData(portfolio), 
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
                        window.location.href = "{{ url('/admin-dtw/portfolio')}}";
                    });
                    }
                })
            }
            

            //delete data
            function delete_portfolio(portfolio_id, portfolio_name){
                link = "{{route('admin.portfolio.destroy', ':id')}}";
                link = link.replace(':id', portfolio_id);
                
                swal.fire({
                    title: "Delete "+portfolio_name+"?",
                    text: ""+portfolio_name+" will deleted on your project list!",
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
                            data:{"_token": "{{ csrf_token() }}", id:portfolio_id},
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
                            window.location.href = "{{ url('/admin-dtw/portfolio')}}";
                        });
                    }
                })
            }
        </script>
    @endsection
    
@endsection