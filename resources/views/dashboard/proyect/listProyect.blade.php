@extends('layout.template')

@section('title','Users')

@section('container')
<div class="main">
    <div class="main-content">
        <div class="container-fluid">
            <!-- CONDENSED TABLE -->
            <div class="panel">
                <div class="panel-heading">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-md-12">
                            <h3 class="panel-title">Data Proyect</h3>
                        </div>
                        <div class="col-lg-4 col-md-4 col-md-12">
                            <a href="/proyects/print" class="btn btn-warning form-inline" style="margin-left:60px"> print report </a>
                        </div>
                        <div class="col-lg-2 col-md-2 col-md-12">

                            @if(auth()->user()->username == 'Admin')
                            <a href="/proyects/create" class="btn btn-primary form-inline" style="margin-left:60px"> Add Proyect </a>
                            @elseif(auth()->user()->username != 'Admin')
                            @endif
                        </div>
                    </div>
                </div>
                <div class="panel-body">
                    @if (session('status'))
                    <div class="alert alert-success">
                        {{ session('status') }}
                    </div>
                    @endif
                    <table class="table table-condensed">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama Costumer</th>
                                <th>Email costumer</th>
                                <th>No telp Costumer</th>
                                <th>Jenis proyect</th>
                                <th>Biaya Total</th>
                                <th>Lokasi Maps</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($proyects as $proyect)
                            <tr>
                                <td>{{$proyect->id}}</td>
                                <td>{{$proyect->Costumer}}</td>
                                <td>{{$proyect->email_costumer}}</td>
                                <td>{{$proyect->no_telp}}</td>
                                <td>{{$proyect->Jenis_proyect}}</td>
                                <td>{{$proyect->biaya}}</td>
                                <td class="text-center"><a href="/maps/{{$proyect->id}}"><span class="label label-info">Buka Maps</span></a></td>
                                </form>

                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            <!-- END CONDENSED TABLE -->
        </div>
    </div>
</div>
</script>
@endsection