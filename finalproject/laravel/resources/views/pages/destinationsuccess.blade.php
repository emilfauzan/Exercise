@extends('layouts.checkout')

@section('title')
Travelark - Destination Success
@endsection

@section('content')

<!-- Succesfully -->
<div class="container-fluid">
    <div class="row mx-5 mt-5 m-auto">
        <div class="col text-center pt-3">
            <p style="font-weight: bold">Order Succesfully</p>
        </div>
    </div>

    <div class="row mx-5 m-auto">
        <div class="col-12 ms-3">
            <div class="card mt-3">
                <h6 class="card-header d-flex justify-content-center" style="background-color: white">Your invoice</h6>
                <div class="card-body d-flex ">
                    <div class="col-3 d-flex m-auto">
                        <p>Transaction Number <br> <span style="font-weight: bold;">TRX221XXXXXXXX-313KWKWKWK</span></p>
                    </div>
                    <div class="col-3 d-flex justify-content-end  m-auto">
                        <p>Date <br> <span style="font-weight: bold;">5 April 2023</span></p>
                    </div>
                    <div class="col-3 d-flex justify-content-end  m-auto">
                        <p>Status <br> <span style="font-weight: bold;">Succes</span></p>
                    </div>
                    <div class="col-3 d-flex justify-content-end  m-auto">
                        <p>Category <br> <span style="font-weight: bold;">Destination</span></p>
                    </div>
                </div>
                <div class="card-body d-flex ">
                    <div class="col-3 d-flex">
                        <p>Destination <br> <span style="font-weight: bold;">Nusa Penida, Bali</span></p>
                    </div>
                    <div class="col-3  d-flex">
                        <p>Tickets date <br> <span style="font-weight: bold;">2023 / 04 / 02</span></p>
                    </div>
                    <div class="col-2 d-flex ">
                        <p>Tickets quantity <br> <span style="font-weight: bold;">2 Tickets</span></p>
                    </div>
                    <div class="col-2 d-flex justify-content-end">
                        <p>Price <br> <span style="font-weight: bold;">Rp. 1.000.000</span></p>
                    </div>
                    <div class="col-2 d-flex justify-content-end">
                        <p>Total Price <br> <span style="font-weight: bold;">Rp. 2.000.000</span></p>
                    </div>
                </div>
                <hr>
                <div class="card-body d-flex">
                    <div class=" me-5 d-flex">
                        <p>First Name <br> <span style="font-weight: bold;">Rylan</span></p>
                    </div>
                    <div class="mx-5 d-flex">
                        <p>Last Name<br> <span style="font-weight: bold;">Ristia</span></p>
                    </div>
                    <div class="mx-5 d-flex ">
                        <p>Email <br> <span style="font-weight: bold;">rylanristia@gmail.com</span></p>
                    </div>
                    <div class="mx-5 d-flex">
                        <p>Phone Number <br> <span style="font-weight: bold;">0857 8554 8877</span></p>
                    </div>
                </div>
            </div>
        </div>
        <div class="d-grid gap-2 col mx-auto mt-5">
            <button type="button" class="btn btn-success" style="font-weight: 100px">
                <a class="nav-link text-white" href="{{ route('discovery') }}">Back to home</a>
            </button>
        </div>
    </div>
</div>

<!-- close -->

@endsection