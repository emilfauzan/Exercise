@extends('layouts.checkout')

@section('title')
Travelark - Login
@endsection

@section('content')

<div class="container login text-center">
    <div class="row py-5 d-flex justify-content-center align-content-center">
        <div class="col-6 register">
        </div>
        <div class="col-6 align-items-center">
            <form class="user" action="{{ route('process-login') }}" method="POST">
                @csrf
                <div class="form-group my-3">
                    <label for="username" class="form-label text-white">Username</label>
                    <input type="username" class="form-control" id="username" placeholder="username@example.com" name="username">
                </div>
                <div class="form-group my-3">
                    <label for="password" class="form-label text-white">Password</label>
                    <input type="password" class="form-control" id="password" placeholder="password" name="password">
                </div>
                <div>
                    <div class="d-grid gap-2">
                        <button class="btn mt-3 text-white" type="submit" width="100%" style="background-color: #FD7B38;">
                            Login</button>
                    </div>
            </form>
        </div>
    </div>
</div>


@endsection