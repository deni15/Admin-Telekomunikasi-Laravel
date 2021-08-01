@extends('layout.template')

@section('title','Users')

@section('container')
<div class="main">
    <div class="main-content">
        <!-- INPUTS -->
        <div class="panel">
            <div class="panel-heading">
                <h3 class="panel-title">Halaman Tambah data User</h3>
            </div>

            <div class="panel-body">
                <form class="form-auth-small" action="/users/{{$user->id}}" method="POST">
                    @method('patch')
                    @csrf
                    <div class="form-group">
                        <label for="signin-email" class="control-label sr-only">nama</label>
                        <input name="nama" type="text" value="{{$user->nama}}" class="form-control @error('nama') is-invalid @enderror" id="signin-email" placeholder="Nama User">
                        @error('nama')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="signin-email" class="control-label sr-only">Username</label>
                        <input name="username" type="text" value="{{$user->username}}" class="form-control @error('username') is-invalid @enderror" id="signin-email" placeholder="Username">
                        @error('username')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="signin-email" class="control-label sr-only">email</label>
                        <input name="email" type="text" value="{{$user->email}}" class="form-control @error('email') is-invalid @enderror" id="signin-email" placeholder="email">
                        @error('email')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="level" class="control-label sr-only">Level Pengguna</label>
                        <input name="level" type="text" hidden value="{{$user->level}}" class="form-control @error('level') is-invalid @enderror" id="signin-level" placeholder="level">
                        @error('level')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="signin-password" class="control-label sr-only">Password</label>
                        <input name="password" type="password" hidden value="{{$user->password}}" class="form-control @error('password') is-invalid  @enderror" id="signin-password" placeholder="Password">
                        @error('password')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <button type="submit" id="submit" class="btn btn-success btn-md "><b id="hilang">Update</b><i style="display: none;" class="fa fa-spinner fa-spin"></i></button>
                </form>
            </div>
        </div>
        <!-- END INPUTS -->
    </div>
</div>
@endsection