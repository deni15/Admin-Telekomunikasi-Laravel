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
                            <h3 class="panel-title">Users Data</h3>
                        </div>
                        <div class="col-lg-4 col-md-4 col-md-12">
                        </div>
                        <div class="col-lg-2 col-md-2 col-md-12">
                            <a href="/users/create" class="btn btn-primary" style="margin-left:60px"> Add User </a>
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
                                <th>Nama</th>
                                <th>username</th>
                                <th>Level</th>
                                <th>Email</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($users as $user)
                            <tr>
                                <td>{{$user->id}}</td>
                                <td>{{$user->nama}}</td>
                                <td>{{$user->username}}</td>
                                <td>{{$user->level}}</td>
                                <td>{{$user->email}}</td>
                                <td>
                                    <a href="/users/{{$user->id}}" class="btn btn-info">Details</a>
                                    <a href="/users/{{$user->id}}/edit" class="btn btn-warning"><i class="fa fa-pencil"></i></a>
                                    <form action="/users/{{$user->id}}" method="post" class="visible-lg-inline">
                                        @method('delete')
                                        @csrf
                                        <button class="btn btn-danger "><i class="lnr lnr-trash"></i></button>
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

@endsection