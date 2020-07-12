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
                            @if(!isset($about[0]->id))
                                <form id="create_contact" enctype="multipart/form-data" action="" method="POST">
                                @csrf
                            @else
                                <form id="update_about" enctype="multipart/form-data" action="" method="POST">
                            @endif
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
                            <div id="map"></div>
                            <input type="hidden" id="pt-name" value="PT. Daya Turangga Wisesa">
                            <input type="hidden" id="pt-telephone" value="+62361499093">
                            <input type="hidden" id="pt-fax" value="+62361483586">
                            <input type="hidden" id="pt-address" value="Jl. Gunung Soputan No.28. Kel. Pemecutan Kelod Kecamatan Denpasar Barat Denpasar Bali.">
                            <input type="hidden" id="pt-lat" value="-8.688396">
                            <input type="hidden" id="pt-lng" value="115.189303">
                            
                            @if(!isset($about[0]->id))
                                <button type="button" onclick="create_about()" class="btn btn-green-gradient">Save</button>
                            @else
                                <input type="hidden" id="about_id" name="about_id" value="{{$about[0]->id}}">
                                <button type="button" onclick="update_about()" class="btn btn-green-gradient">Save</button>
                            @endif
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
                // Create the map and set the view and some properties
                var contact_icon = L.icon({
                    iconUrl: 'http://localhost:8000/img/logo.png',
                });	
                var myMap = L.map('map', {
                    zoomControl:false
                }).setView([$('#pt-lat').val(), $('#pt-lng').val()], 17);
                L.tileLayer('https://api.tiles.mapbox.com/v4/{id}/{z}/{x}/{y}.png?access_token=pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw', {
                // maxZoom: 5,
                attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors, ' +
                    '<a href="https://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, ' +
                    'Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
                    id: 'mapbox.streets'
                }).addTo(myMap);

                var dataset = {
                    "type": "FeatureCollection",
                    "features": [{
                        "type": "Feature",
                        "properties": {
                            "Name": $('#pt-name').val(),
                            "Telephone" : $('#pt-telephone').val() ,
                            "Fax" : $('#pt-fax').val() ,
                            "Address": $('#pt-address').val(),
                        },
                        "geometry": {
                            "type": "Point",
                            "coordinates": [
                                $('#pt-lat').val(),
                                $('#pt-lng').val()
                            ]
                        }
                    }]
                };
                var latlng = L.latLng($('#pt-lat').val(), $('#pt-lng').val());
                currentMarker = L.marker(latlng, {
                        draggable: true
                    }).addTo(myMap)
                var currentMarker;
                myMap.on('click', function(e) {
                    // marker = L.marker(e.latlng,{icon: contact_icon})
                    // myMap.setView('LatLng(-8.688061, 115.188614)');
                    // if (currentMarker) {
                    //     currentMarker.setLatLng(e.latlng);
                    //     // alert("Lata, Lona : " + e.latlng.lat + ", " + e.latlng.lng)
                    //     return;
                    // }
                    if (currentMarker != undefined) {
                        myMap.removeLayer(currentMarker);
                    };
                    currentMarker = L.marker(e.latlng, {
                        draggable: true
                    }).addTo(myMap).on("click", function () {
                        e.originalEvent.stopPropagation();
                    });
                    
                    console.log("Lat, Lon : " + e.latlng.lat + ", " + e.latlng.lng)
                    
                });
                
                currentMarker.on("dragend", function(ev) { 
                    var chagedPos = ev.target.getLatLng();
                    console.log('testt')
                    console.log("dragged Lat, Lon : " + chagedPos.lat + ", " + chagedPos.lng)
                    // this.bindPopup(chagedPos.toString()).openPopup();
                });
                // function onMapClick(e) {
                //     var currentMarker;
                //     // console.log("e.latlng", currentMarker);
                //     currentMarker = L.marker(e.latlng, {
                //         draggable: true
                //     }).addTo(myMap).on("click", function () {
                //         e.originalEvent.stopPropagation();
                //     });
                //     // if (currentMarker) {
                //         // currentMarker.setLatLng(e.latlng);
                //         console.log("Lata, Lona : " + e.latlng.lat + ", " + e.latlng.lng)
                //     //     return;
                //     // }
                //     // console.log("e.latlng", e.latlng);
                    
                //     // Update marker on changing it's position
                //     currentMarker.on("dragend", function(ev) {
                //         var chagedPos = ev.target.getLatLng();
                //         this.bindPopup(chagedPos.toString()).openPopup();
                //     });
                // }
                // myMap.on("click", onMapClick);

                // map over the dataset features, create a marker for each and link a popup.
                // dataset.features.map(function(feature) {
                //     const location = feature.geometry.coordinates;
                //     let key = Object
                //     .keys(feature.properties)
                //     .filter(item => !['Name'].includes(item));
                //     const popupContent = 
                //     '<h5 style="color: #333; margin-bottom:10px;">' + 
                //     feature.properties.Name + 
                //     '</h5>' + 
                //     key.map((name) => '<p><strong>' + name + '</strong>: ' + feature.properties[name] + '</p>').join('');

                //     // add the marker and popup to the map.
                //     marker = L.marker(location).addTo(myMap).bindPopup(popupContent);
                //     marker.openPopup();
                // });
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
                            // $('#service_id').val(data.data_service.id);
                            $('#about_title').val(data.data_about.about_title);
                            $('#about_location').val(data.data_about.about_location);
                            $('#about_description').summernote('code', data.data_about.about_description);
                            // $('#about_location').val(data.data_service.service_icon);
                            // $('#modal_update_service').modal('show');
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
                preConfirm: (login) => {  
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
        
    @endsection
    
@endsection