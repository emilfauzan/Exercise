@extends('layouts.checkout')

@section('title')
Travelark - Destination Checkout
@endsection

@section('content')


<!-- section checkout details -->

<div class="container-fluid">
    <div class="row mx-5">
        <div class="col-4">
            <button type="button" class="btn" style="font-size: 20px; color: #34a753"></i>
                <a class="nav-link text-white" href="{{ route('destination') }}">Back</a>
            </button>
        </div>

        <div class="col-4 text-center pt-3">
            <p style="font-weight: bold">Checkout details</p>
        </div>

        <div class="col-4 text-end pt-3">
            <button type="button" class="btn float-right" style="color: #34a753; font-weight: bolder">
                First Step</a>
            </button>
        </div>
    </div>
</div>

<div class="container-fluid">
    <div class="row mx-5">
        <div class="col ms-3">
            <div class="card mt-3">
                <h6 class="card-header" style="background-color: white">Travel order</h6>
                <div class="card-body d-flex">
                    <div class="col m-auto d-flex">
                        <img src="image/Rectangle 59.png" alt="" />
                        <p style="padding-left: 10px; margin: 5px"><span style="font-weight: bolder">Nusa Penida, Bali </span><br />Destination</p>
                    </div>
                    <div class="col m-auto text-center pt-2">
                        <p>Rp. 1.000.000 / pax</p>
                    </div>
                    <div class="col m-auto d-flex justify-content-center pt-2">
                        <p>Tickets for <input type="date" class="px-2" /></p>
                    </div>
                    <div class="col m-auto d-flex justify-content-end pt-2">
                        <p>
                            Tickets <button type="button" class="btn btn-outline-secondary mx-2"><span style="color: black"> 2</span></button>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row mx-5 mt-3 d-flex">
        <div class="col ms-3">
            <div class="card mt-3">
                <h6 class="card-header" style="background-color: white">Billing details</h6>
                <div class="card-body d-flex justify-content-center">
                    <div class="col">
                        <p>First name</p>
                        <input class="form-control form-control-md" type="text" />
                    </div>
                    <div class="col ps-5">
                        <p>Last name</p>
                        <input class="form-control form-control-md" type="text" />
                    </div>
                </div>
                <div class="card-body justify-content-center">
                    <div class="col">
                        <p>Email</p>
                        <input class="form-control form-control-md" type="text" />
                    </div>
                    <div class="col mt-2">
                        <p>Phone number</p>
                        <input class="form-control form-control-md" type="text" />
                    </div>
                    <div class="col mt-2">
                        <p>Phone number</p>
                        <input class="form-control form-control-md" type="text" />
                    </div>
                    <div class="col mt-3">
                        <div class="d-grid">
                            <button class="btn btn-success" type="button">
                                <a class="nav-link text-white" href="{{ route('destinationsummary') }}">Checkout</a></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- close section -->

@endsection