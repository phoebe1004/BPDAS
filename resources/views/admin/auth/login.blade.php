@extends('layouts.base')

@section('body')

<div class="bg"></div>
<div class="bg bg2"></div>
<div class="bg bg3"></div>

<div class="nav-collapse collapse" style="display:none;" id="cwspear-is-awesome">.</div></body>
    <div id="app-admin-login" class="wrapper d-flex align-items-center justify-content-center">
        <div class="content container d-flex flex-column align-items-center justify-content-center shadow-sm">
            <a href="#" class="brand-link">
                <img src="image/bpdaslogo.jpg" width="200px" height="200px">

            </a>
            <span class="header-text">BPDAS</span>
            <form action="{{ route('admin-login.post') }}" method="POST">
                @csrf
                <div class="row">
                    <div class="col-12">
                        <div class="form-group pt-5">
                            <input id="user-name" class="form-control border-bottom py-5" type="text" name="user-name"
                                aria-describedby="error-user-name" placeholder="User Name">
                            @error('user-name')
                                <small id="error-user-name" class="form-text text-muted">{{ $message }}</small>
                            @enderror
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="form-group pt-3">
                            <input id="password" class="form-control border-bottom py-5" type="password" name="password"
                                placeholder="Password">
                            @error('password')
                                <small id="error-password" class="form-text text-muted">{{ $message }}</small>
                            @enderror
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="form-group pt-5">
                            <button type="submit" class="btn py-4 fs-2">SUBMIT</button>
                        </div>
                    </div>

                    <hr>

                    <div class="col-12 mt-5 text-center">
                        <a href="/">Go back to homepage</a>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
