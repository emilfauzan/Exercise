@extends('layouts.main')

@section('title')
Travelark - Login Success
@endsection

@section('content')

<section>
    <div class="container mt-5  ">
        <div class="row mx-5">
            <div class="col-6">
                <img class="register" alt="">
            </div>
            <div class="col-6 p-5" style="background-color: #0C5B21; box-shadow: 5px 8px 50px -4px rgba(0, 0, 0, 0.25);">
                <form>
                    <div class="mt-5">
                        <label for="username" class="form-label mt-3 text-white">Register new traveler</label>
                        <input type="email" class="form-control" id="username" aria-describedby="emailHelp" placeholder="Username">
                    </div>
                    <div>
                        <label for="password" class="form-label"></label>
                        <input type="password" class="form-control" id="email" placeholder="Email">
                    </div>
                    <div>
                        <label for="text" class="form-label"></label>
                        <input type="text" class="form-control" id="number" placeholder="Phone number">
                    </div>
                    <div>
                        <label for="text" class="form-label"></label>
                        <input type="text" class="form-control" id="password" placeholder="Password">
                    </div>
                    <div>
                        <label for="text" class="form-label"></label>
                        <input type="text" class="form-control" id="re-password" placeholder="Re-type password">
                    </div>
                    <div class="d-grid gap-2">
                        <button class="btn mt-3" type="button" width="100%" style="background-color: #FD7B38;">Register</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>


@endsection