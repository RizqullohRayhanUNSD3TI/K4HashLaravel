@extends('layouts.main')

@section('content')
    <div class="row justify-content-center">
        <div class="col-md-5">
            <div class="form-registration w-100 m-auto">
                <h1 class="h3 mb-3 fw-normal text-center">Registration Form</h1>
                <form action="/prosesregistrasi" method="POST">
                    @csrf
                    <div class="form-floating">
                        <input type="text" name="name" id="name" placeholder="Nama" class="form-control rounded-top">
                        <label for="name">Nama</label>
                    </div>
                    <div class="form-floating">
                        <input type="text" name="username" id="username" placeholder="Username" class="form-control rounded-top">
                        <label for="username">Username</label>
                    </div>
                    <div class="form-floating">
                        <input type="email" name="email" id="email" placeholder="name@example.com" class="form-control rounded-top">
                        <label for="email">Email Address</label>
                    </div>
                    <div class="form-floating">
                        <input type="password" name="password" id="password" placeholder="Password" class="form-control rounded-top">
                        <label for="password">Password</label>
                    </div>
                    <button type="submit" class="w-100 btn btn-lg btn-primary mt-3">Register</button>
                </form>
                <small class="d-block text-center mt-3">Already Registere? <a href="/login">Login Now!</a></small>
            </div>
        </div>
    </div>
@endsection