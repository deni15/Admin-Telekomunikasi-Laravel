@extends('layout.template')

@section('title','Users')

@section('container')
<div class="main">
    <div class="main-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-3">
                    <!-- PANEL WITH FOOTER -->
                    <div class="panel">
                        <div class="panel-heading">
                            <h3 class="panel-title">Lokasi Proyect </h3>
                            <div class="right">
                                <button type="button" class="btn-toggle-collapse"><i class="lnr lnr-chevron-up"></i></button>
                                <button type="button" class="btn-remove"><i class="lnr lnr-cross"></i></button>
                            </div>
                        </div>

                        <div class="panel-footer">
                            <div class="form-group">
                                <label for="signin-email" class="control-label sr-only"></label>
                                <input name="nama_lokasi" type="text" value="{{$proyects->lokasi_proyect}}" class="form-control @error('nama_lokasi') is-invalid @enderror" id="signin-email" placeholder="Lokasi proyect">
                                @error('nama_lokasi')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="signin-email" class="control-label sr-only"></label>
                                <input name="longitude" type="text" value="{{$proyects->longitude}}" class="form-control @error('longitude') is-invalid @enderror" id="signin-email" placeholder="longitude">
                                @error('longitude')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="signin-email" class="control-label sr-only">email</label>
                                <input name="latitude" type="text" value="{{$proyects->latitude}}" class="form-control @error('latitude') is-invalid @enderror" id="signin-latitude" placeholder="latitude">
                                @error('latitude')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                                <br>
                                </form>
                            </div>
                        </div>
                    </div>
                    <!-- END PANEL WITH FOOTER -->
                </div>
                <div class="col-md-9">
                    <!-- PANEL HEADLINE -->
                    <div class="panel panel-headline">
                        <div class="panel-heading">
                            <h3 class="panel-title">Lokasi Proyect {{$proyects->Costumer}}</h3>
                            <p class="panel-subtitle"></p>
                        </div>
                        <div class="panel-body">
                            <div id="map-canvas" style="height: 400px; width:100%"></div>
                        </div>
                    </div>
                </div>
                <!-- END PANEL HEADLINE -->
            </div>
        </div>
    </div>
</div>
</div>

<!--API Google Maps KEY-->
<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB4I2vMWo4LHK0pnLDyOUSGQ1HDJV9isyM&callback=initMap" type="text/javascript"></script>
<!--API Google Maps-->
<script src="jquery-1.10.1.min.js"></script>
<!--<script src="{{asset('/assets/js/maps/mapsgis.js')}}" type="text/javascript"></script>-->
<script>
    var marker;

    function initialize() {
        // Variabel untuk menyimpan informasi (desc)
        var infoWindow = new google.maps.InfoWindow;
        //  Variabel untuk menyimpan peta Roadmap
        var mapOptions = {
            mapTypeId: google.maps.MapTypeId.ROADMAP
        }
        // Pembuatan petanya
        var map = new google.maps.Map(document.getElementById('map-canvas'), mapOptions);
        // Variabel untuk menyimpan batas kordinat
        var bounds = new google.maps.LatLngBounds();
        // Pengambilan data dari database
        <?php
        echo ("addMarker( $proyects->longitude,$proyects->latitude, '$proyects->lokasi_proyect');\n");
        ?>
        // Proses membuat marker 
        function addMarker(lat, lng, info) {
            var lokasi = new google.maps.LatLng(lat, lng);
            bounds.extend(lokasi);
            var marker = new google.maps.Marker({
                map: map,
                position: lokasi
            });
            map.fitBounds(bounds);
            bindInfoWindow(marker, map, infoWindow, info);
        }
        // Menampilkan informasi pada masing-masing marker yang diklik
        function bindInfoWindow(marker, map, infoWindow, html) {
            google.maps.event.addListener(marker, 'click', function() {
                infoWindow.setContent(html);
                infoWindow.open(map, marker);
            });
        }
    }
    google.maps.event.addDomListener(window, 'load', initialize);
</script>
@endsection