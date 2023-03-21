@extends('layouts/app')

@section('title')
HR Outsource
@endsection

@section('content')


<main>
    <div class="wrapper">
        <div class="container">
            <div class="row py-5">
                <div class="col-6">
                    <h2 class="py-4 fw-bolder">HR Outsourcing</h2>
                    <p class="pb-4 kepsyen">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perspiciatis
                        quasi
                        tenetur adipisci
                        asperiores suscipit modi, consectetur hic excepturi? Maxime quisquam, quia dolores sunt
                        totam
                        ab! Possimus dicta eligendi sequi nam.</p>
                    <button class="btn buttonnya" type="submit">Consult Now</button>
                </div>
                <div class="col-6 imagekanan">
                </div>
            </div>

            <div class="row py-5 align-items-center" style="height: 500px;">

                <div class="col-6">
                    <img class="col-12 imagekiri" src="{{ url('assets/poto2.png') }}" alt="">
                </div>
                <div class="col-6">

                    <h2 class="py-4 fw-bolder">HR Outsourcing</h2>
                    <p class="pb-4 kepsyen">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perspiciatis
                        quasi
                        tenetur adipisci
                        asperiores suscipit modi, consectetur hic excepturi? Maxime quisquam, quia dolores sunt
                        totam
                        ab! Possimus dicta eligendi sequi nam.</p>
                </div>

            </div>

            <div class="row py-5 my-5 mt-5">
                <h2 class="fw-bold my-3">Why should our sources?</h2>
                <div class="col-6 py-5 px-4">
                    <h4 class="py-4 fw-bolder"><img class="gambarmini" src="./assets/poto3.png" alt="">
                        Cuts cost</h4>
                    <p class="kepsyen">Operational and labour costs are significantly reduced when you start
                        outsourcing. You don't
                        have to fork out a fortune of your hard-earned money to develop and establish a department
                        in your company. Through outsourcing, you can minimise on unnecessary expenditures and
                        inject your capital more in other aspects of your business</p>
                </div>
                <div class="col-6 py-5 px-4">
                    <h4 class="py-4 fw-bolder"><img class="gambarmini" src="./assets/poto3.png" alt="">Access to
                        professionals</h4>
                    <p class="kepsyen">Just by outsourcing, you will short-cut your way into the pool of global
                        knowledge and have
                        the best experts in the field working alongside you and your company. Complex tasks will be
                        operated by professionals with extensive knowledge and vast experience. Outsourcing helps
                        you to increase efficiency in your business. </p>
                </div>
                <div class="col-6 py-5 px-4">
                    <h4 class="py-4 fw-bolder"><img class="gambarmini" src="./assets/poto3.png" alt="">Save time and energy
                    </h4>
                    <p class="kepsyen">You thought that you'll only save time, right? Well, more good news coming
                        your way!
                        Outsourcing also saves you a ton of your time and energy. You will be doing yourself a
                        favour by freeing up your schedule, which will allow you to focus on improving and scaling
                        your business to the next level. </p>
                </div>
                <div class="col-6 py-5 px-4">
                    <h4 class="py-4 fw-bolder"><img class="gambarmini" src="./assets/poto3.png" alt="">Reduces risk</h4>
                    <p class="kepsyen">Outsourcing with a notable firm will help you to mitigate the risks in your
                        company. Instead
                        of pouring time, energy and money into creating areas of professional skills and development
                        such as HR or ITs, it is much better to outsource these responsibilities. </p>
                </div>
            </div>
            <div class="row py-5 my-5">
                <div class="col-12 d-flex align-items-center justify-content-center">
                    <h6 class="lorem">“ Let us supply you with trained professionals in that area who can help you
                        to smoothly
                        iron out these critical duties ”</h6>
                </div>
            </div>
        </div>

        <div class="wave">
            <div class="container-fluid">
                <div class="d-flex align-items-center justify-content-center puanjang">
                    <div>
                        <h4 class="mx-5 px-5 fw-bold">
                            Check Our Other Services
                        </h4>
                        <div class="row px-5 mx-5">

                            <div class="col-4">
                                <div class="card my-5 p-3 mx-2 ">
                                    <img class="gambarmini" src="./assets/poto4.png" alt="">
                                    <h6>
                                        Development
                                        Human Capital Program 1</h6>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="card my-5 p-3 mx-2">
                                    <img class="gambarmini" src="./assets/poto5.png" alt="">
                                    <h6>
                                        Development
                                        Human Capital Program 2</h6>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="card my-5 p-3 mx-2">
                                    <img class="gambarmini" src="./assets/poto6.png" alt="">
                                    <h6>
                                        Psychology Assessment <br> <span style="color: #0D1C37;">_</span></h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container my-5 pb-5">
            <h4 class="d-flex align-items-center justify-content-center fw-bold">Consult Now</h4>
            <div class="grid gap-0 row-gap-3">
                <div class="my-4">
                    <label for="" class="form-label">Name</label>
                    <input type="text" class="form-control" name="" id="" aria-describedby="helpId" placeholder="">
                </div>
                <div class="my-4">
                    <label for="" class="form-label">Company Name</label>
                    <input type="text" class="form-control" name="" id="" aria-describedby="helpId" placeholder="">
                </div>
                <div class="my-4">
                    <label for="" class="form-label">Company Address</label>
                    <input type="text" class="form-control" name="" id="" aria-describedby="helpId" placeholder="">
                </div>
                <div class="my-4">
                    <label for="" class="form-label">PIC Number</label>
                    <input type="text" class="form-control" name="" id="" aria-describedby="helpId" placeholder="">
                </div>
                <div class="my-4">
                    <label for="" class="form-label">Servie Request</label>
                    <input type="text" class="form-control" name="" id="" aria-describedby="helpId" placeholder="">
                </div>
                <div class="my-4">
                    <label for="" class="form-label">Need Description</label>
                    <textarea class="form-control" name="" id="" rows="3"></textarea>
                </div>
                <button class="btn buttonnya" type="submit">Get Started</button>
            </div>
        </div>
</main>

@endsection