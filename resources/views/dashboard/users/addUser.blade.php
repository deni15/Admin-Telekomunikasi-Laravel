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
                <form class="form-auth-small" action="/users" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="signin-email" class="control-label sr-only">nama</label>
                        <input name="nama" type="text" value="{{old('nama')}}" class="form-control @error('nama') is-invalid @enderror" id="signin-email" placeholder="Nama User">
                        @error('nama')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="signin-email" class="control-label sr-only">Username</label>
                        <input name="username" type="text" value="{{old('username')}}" class="form-control @error('username') is-invalid @enderror" id="signin-email" placeholder="Username">
                        @error('username')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="signin-email" class="control-label sr-only">email</label>
                        <input name="email" type="text" value="{{old('email')}}" class="form-control @error('email') is-invalid @enderror" id="signin-email" placeholder="email">
                        @error('email')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="level" class="control-label sr-only">Level Pengguna</label>
                        <select class="form-control mt-4" id="level" name="level">
                            <option value="" selected hidden>--Pilih Level Pengguna--</option>
                            <option value="Admin">Admin</option>
                            <option value="Teknisi">Teknisi</option>
                        </select>
                        @error('level')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="signin-password" class="control-label sr-only">Password</label>
                        <input name="password" type="password" value="{{old('password')}}" class="form-control @error('password') is-invalid  @enderror" id="signin-password" placeholder="Password">
                        @error('password')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <button type="submit" id="submit" class="btn btn-success btn-md "><b id="hilang">Add User</b><i style="display: none;" class="fa fa-spinner fa-spin"></i></button>
                </form>
            </div>
        </div>
        <!-- END INPUTS -->
    </div>
</div>
@endsection