@extends('layouts.main')

@section('content')
    <div class="row justify-content-center">
        <div class="col-lg-4">
            <div class="form-signin w-100 m-auto">
                <h1 class="h3 mb-3 fw-normal text-center">Please Login</h1>
                <form action="/proseslogin" method="POST">
                    @csrf
                    <div class="form-floating">
                        <input type="email" name="email" id="floatingInput" class="form-control" placeholder="name@example.com">
                        <label for="floatingInput">Email address</label>
                    </div>
                    <div class="form-floating">
                        <input type="password" name="password" id="floatingPassword" class="form-control" placeholder="Password">
                        <label for="floatingPassword">Password</label>
                    </div>
                    <button class="w-100 btn btn-lg btn-primary" type="submit">Login</button>
                </form>
                <small class="d-block text-center mt-3">Not Registered? <a href="/register">Register Now!</a></small>
            </div>
        </div>
    </div>
@endsection