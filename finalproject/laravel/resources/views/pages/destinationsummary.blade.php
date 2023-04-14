@extends('layouts.checkout')

@section('title')
Travelark - Destination Summary
@endsection

@section('content')


<!-- judul -->
<section>
    <div class="container-fluid">
        <div class="row mx-5 p-2 ">
            <div class="col-sm-12 col-lg-12 align-content-center text-center">
                <h4 style="color:#34A753;
                    ">TRAVELARK | <span style="color: #0C5B21;
                        ">Explore Wonderful Indonesia</span> </h4>
            </div>
        </div>
    </div>
</section>
<!-- end judul -->


<!-- checkout -->
<div class="container-fluid">
    <div class="row mx-5">
        <div class="col-4">
            <button type="button" class="btn" style="font-size: 20px; color: #34a753">
                <a class="nav-link text-white" href="{{ route('destinationcheckout') }}">Back</a>
            </button>
        </div>
        <div class="col-4 text-center pt-3">
            <p style="font-weight: bold">Summary Details</p>
        </div>
        <div class="col-4 text-end pt-3">
            <button type="button" class="btn float-right" style="color: #34a753; font-weight: bolder">Second Step</button>
        </div>
    </div>
</div>
<!-- endcheckout -->

<!-- bagian gambar -->
<div class="container-fluid">
    <div class="section4">
        <div class="row mx-5 pe-0 ">
            <div class="col ms-3">
                <div class="card mt-2 ">
                    <table class="table caption-top mt-2">
                        <thead>
                            <img src="../../../public/images/img1.png">
                            <tr>
                            </tr>
                            <img src="../../../public/images/Rectangle 59.png" alt="" />
                            <div class="container-fluid">
                                <div class="row mt-6">
                                    <div class="col-lg-8 col-sm-6 mt-5 pt-2 d-flex ">
                                        <ul class=" mt-5 col-lg-4">
                                            <p>Destination
                                            <p>
                                            <h5>Nusa Penida, Bali</h5>
                                        </ul>
                                        <ul class=" mt-5 col-lg-3">
                                            <p>ticket date</p>
                                            <h5>2023 / 04 /02</h5>
                                        </ul>
                                        <ul class=" mt-5 col-lg-3">
                                            <p>Ticket quantity</p>
                                            <h5>2 Tickets</h5>
                                        </ul>
                                        </ul>
                                        <ul class=" mt-5 col-lg-3">
                                            <p>Total price</p>
                                            <h5>Rp.2.000,000</h5>
                                        </ul>
                                    </div>
                                </div>
                                <div class="section5"></div>
                                <img src="Line 5.png" alt="">
                                <div class="row mt-6">
                                    <div class="col-lg-8 col-sm-6 mt-5 pt-2 d-flex ">
                                        <ul class=" mt-5 col-lg-2">
                                            <p>First name
                                            <p>
                                            <h5>Rylan</h5>
                                        </ul>
                                        <ul class=" mt-5 col-lg-2">
                                            <p>Last name</p>
                                            <h5>Ristia</h5>
                                        </ul>
                                        <ul class=" mt-5 col-lg-4">
                                            <p>Email</p>
                                            <h5>Rylanristia@gmail.com</h5>
                                        </ul>
                                        </ul>
                                        <ul class=" mt-5 col-lg-5">
                                            <p>Phone number</p>
                                            <h5>0857 8554 8877</h5>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </thead>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>


<!-- bagian gambar -->



<!-- content -->
<section>
    <div class="container-fluid">
        <div class="row mx-5 p-2 ">
            <div class="col ms-3">
                <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
                <label for="vehicle1">Agree to our terms and condition. </label><br>
            </div>
        </div>
    </div>
</section>
<!-- end content -->



<!-- footer -->


<section>
    <div class="section6">
        <div class="container mt-2 ">
            <div class="row p-0">
                <div class="col-lg-6">
                    <p style="color: #1a2c21;">Destination trip can be used as much as you order the ticket. Check again your summary order before continue your order. After you finish your payment, every tickets will be shown in your ticket page and sent into your email (include
                        with destination tickets, acomodation, and hotel).
                </div>
            </div>
        </div>
    </div>
</section>


<!-- akhir footer -->



<!-- footer2 -->
<section>
    <div class="container-fluid">
        <div class="row mt-5 mx-5 p-2 ">
            <div class="col-sm-12 col-lg-12 justify-content-center text text-center ">
                <button class="btn btn-success btn2 " type="button ">
                    <a class="nav-link text-white" href="{{ route('destinationsuccess') }}">Checkout</a>
                </button>
            </div>
            <div class="row mt-5 mx-5 p-2 ">
                <div class="col-sm-12 col-lg-12 align-content-center text-center ">
                    <p style="color: #080c09; ">Copyright © 2023 Travelark. Indonesia</p>
                </div>
            </div>
        </div>
</section>
<!-- akhir footer2 -->

@endsection