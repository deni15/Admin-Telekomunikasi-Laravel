@extends('layout.template')

@section('title','Users')

@section('container')
<!-- MAIN -->
<div class="main">
    <!-- MAIN CONTENT -->
    <div class="main-content">
        <div class="container-fluid">
            <h3 class="page-title">Form Tambah Proyect</h3>
            <div class="row">
                <div class="col-md-7">
                    <!-- PANEL HEADLINE -->
                    <div class="panel panel-headline">

                        <div class="panel-heading">
                            <h3 class="panel-title">Add Proyect</h3>
                            <p class="panel-subtitle">pengisian data proyek dan costumer</p>
                        </div>

                        <div class="panel-body">
                            <form class="form-auth-small" action="/proyects" method="POST">
                                @csrf
                                <div class="form-group">
                                    <p class="panel-subtitle">Costumer :</p>
                                    <input name="nama" type="text" value="{{old('nama')}}" class="form-control @error('nama') is-invalid @enderror" id="signin-email" placeholder="">
                                    @error('nama')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <p class="panel-subtitle">Nomer Telpone :</p>
                                    <input name="no_telp" type="text" value="{{old('no_telp')}}" class="form-control @error('no_telp') is-invalid @enderror" id="signin-email" placeholder="">
                                    @error('no_telp')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <p class="panel-subtitle">E-mail :</p>
                                    <input name="email" type="text" value="{{old('email')}}" class="form-control @error('email') is-invalid @enderror" id="signin-email" placeholder="">
                                    @error('email')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="form-group">

                                    <p class="panel-subtitle">Alamat custumer :</p>
                                    <textarea name="alamat_proyect" id="" cols="20" rows="4" class="form-control @error('email') is-invalid @enderror" id="signin-email" placeholder=""></textarea>
                                    @error('alamat_proyect')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <p class="panel-subtitle">Jenis proyect :</p>
                                    <input name="nama_proyect" type="text" value="{{old('nama_proyect')}}" class="form-control @error('nama_proyect') is-invalid @enderror" id="signin-nama_proyect" placeholder="">
                                    @error('nama_proyect')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <p class="panel-subtitle">Biaya keseluruhan :</p>
                                    <input name="biaya" type="text" value="{{old('biaya')}}" class="form-control @error('biaya') is-invalid @enderror" id="signin-biaya" placeholder="">
                                    @error('biaya')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <p class="panel-subtitle">Pilih kepala teknisi :</p>
                                    <select class="form-control mt-4" id="teknisi" name="teknisi">
                                        <option value="" selected hidden>--Pilih Teknisi Utama--</option>
                                        @foreach($users as $user)
                                        @if( $user->level == "Teknisi")
                                        <option value="{{$user->id}}">{{$user->nama}}</option>
                                        @endif
                                        @endforeach
                                    </select>
                                    @error('teknisi')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>

                        </div>
                    </div>
                    <!-- END PANEL HEADLINE -->
                </div>
                <div class="col-md-5">
                    <!-- PANEL WITH FOOTER -->
                    <div class="panel">
                        <div class="panel-heading">
                            <h3 class="panel-title">Lokasi Proyect</h3>
                            <div class="right">
                                <button type="button" class="btn-toggle-collapse"><i class="lnr lnr-chevron-up"></i></button>
                                <button type="button" class="btn-remove"><i class="lnr lnr-cross"></i></button>
                            </div>
                        </div>
                        <div class="panel-body">
                            <div id="google-maps" style="height: 400px; width:100%"></div>
                        </div>
                        <div class="panel-footer">
                            <div class="form-group">
                                <label for="signin-email" class="control-label sr-only"></label>
                                <input name="nama_lokasi" type="text" value="{{old('nama_lokasi')}}" class="form-control @error('nama_lokasi') is-invalid @enderror" id="signin-email" placeholder="Lokasi proyect">
                                @error('nama_lokasi')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="signin-email" class="control-label sr-only"></label>
                                <input name="longitude" type="text" value="{{old('longitude')}}" class="form-control @error('longitude') is-invalid @enderror" id="signin-email" placeholder="longitude">
                                @error('longitude')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="signin-email" class="control-label sr-only">email</label>
                                <input name="latitude" type="text" value="{{old('latitude')}}" class="form-control @error('latitude') is-invalid @enderror" id="signin-latitude" placeholder="latitude">
                                @error('latitude')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                                <br>
                                <button type="submit" id="submit" class="btn btn-success btn-md "><b id="hilang">Add Proyect</b><i style="display: none;" class="fa fa-spinner fa-spin"></i></button>
                                </form>
                            </div>
                        </div>
                    </div>
                    <!-- END PANEL WITH FOOTER -->
                </div>
            </div>
        </div>
    </div>
    <!-- END MAIN CONTENT -->
</div>
<!-- END MAIN -->

<!--API Google Maps KEY-->
<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB4I2vMWo4LHK0pnLDyOUSGQ1HDJV9isyM&callback=initMap" type="text/javascript"></script>
<!--API Google Maps-->
<script src="{{asset('/assets/js/maps/maps.js')}}" type="text/javascript"></script>

@endsection