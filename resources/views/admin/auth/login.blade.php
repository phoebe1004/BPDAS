@extends('layouts.base')

@section('body')

<div class="bg"></div>
<div class="bg bg2"></div>
<div class="bg bg3"></div>

<div class="nav-collapse collapse" style="display:none;" id="cwspear-is-awesome">.</div></body>
    <div id="app-admin-login" class="wrapper d-flex align-items-center justify-content-center">
        <div class="content container d-flex flex-column align-items-center justify-content-center shadow">
            <a href="#" class="brand-link">
                <img src="image/bpdaslogo.jpg" width="500px" height="300px"  class="brand-image img-circle elevation-15">
                    <span class="header-text">  BPDAS Login</span>
            </a>
            <form class="d-flex flex-column" action="{{ route('admin-login.post') }}" method="POST">
                @csrf
                <div class="form-group pt-5">
                    <input id="user-name" class="form-control border-bottom" type="text" name="user-name"
                        aria-describedby="error-user-name" placeholder="User Name">
                    @error('user-name')
                        <small id="error-user-name" class="form-text text-muted">{{ $message }}</small>
                    @enderror
                </div>
                <div class="form-group pt-3">
                    <input id="password" class="form-control border-bottom" type="password" name="password"
                        placeholder="Password">
                    @error('password')
                        <small id="error-password" class="form-text text-muted">{{ $message }}</small>
                    @enderror
                </div>
                <div class="form-group pt-5">
                    <button type="submit" class="btn">Submit</button>
                </div>
            </form>
        </div>
    </div>
@endsection
