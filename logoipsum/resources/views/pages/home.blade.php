@extends('layouts/app')

@section('title')
HR Outsource
@endsection

@section('style')
<style>
    @import url(https://fonts.googleapis.com/css?family=Inter:100,200,300,regular,500,600,700,800,900);
</style>
<link rel="stylesheet" href="{{ url('styles/style.css') }}">
@endsection

@section('content')

<main>

    <div class="wrapper pt-5">
        <div class="container">

            <!-- SVG -->
            <div class="position-absolute w-50" style="opacity: .7; left: 40%;z-index: -1;">
                <svg viewBox="0 0 200 200" xmlns="http://www.w3.org/2000/svg">
                    <path fill="#E8DAFF" d="M45.3,-76.6C59.1,-70.4,71.1,-59.2,78.4,-45.6C85.7,-32,88.4,-16,88.2,-0.1C88,15.8,85,31.5,77.7,45.1C70.3,58.7,58.7,70,45,77.7C31.3,85.5,15.7,89.5,1.5,86.9C-12.7,84.3,-25.3,75.1,-37.2,66.3C-49,57.6,-60,49.3,-70.2,38.3C-80.4,27.3,-89.8,13.7,-88.9,0.5C-88,-12.7,-76.9,-25.3,-68.5,-39.4C-60.1,-53.5,-54.5,-69,-43.5,-76.8C-32.5,-84.6,-16.3,-84.7,-0.3,-84.3C15.7,-83.8,31.4,-82.7,45.3,-76.6Z" transform="translate(100 100)" />
                </svg>
            </div>

            <div class="row py-5">
                <div class="col-6">
                    <h2 class="py-4 fw-bolder">Human Capital <br>
                        Management & Development</h2>
                    <p class="pb-4 kepsyen">Kami membantu perusahaan anda membangun dan mengelola sumber data
                        manusia secara efektif dan efisien.</p>
                    <button class="btn buttonnya" type="submit">Contact Us</button>
                </div>
                <div class="col-6 imagekananindex">
                </div>
            </div>
        </div>

        <div class="cardbiru">
            <div class="container">

                <div class="row py-5 align-items-center" style="height: 500px;">

                    <div class="col-12 px-5">
                        <h6 class="px-5 d-flex align-items-center text-center" style="line-height: 60px;font-size: 25px;">
                            <p class="px-2" style="font-size:70px;">“</p>
                            Program ini dirancang untuk membantu perusahaan
                            anda membangun sistem pengelolaan manusia yang efektif dan efisien melalui perencanaan
                            yang sistematis dan terintegrasi agar mampu berkontribusi
                            dan produktif terhadap pencapaian tujuan perusahaan
                            <p class="px-2" style="font-size:70px;">“</p>
                        </h6>
                        <a class=" d-flex align-items-center justify-content-center pt-4" href="#">
                            <img class="mb-2" src="./assets/Group 9.png" alt="Logoipsum" height="36">
                        </a><br>
                    </div>
                </div>
            </div>
        </div>


        <div class="container">
            <h6 class="text-center fw-bold pt-5">Our Services</h6>
            <div class="row px-5 mx-5">
                <div class="col-6 pt-5">
                    <div class="px-4">
                        <div class="cardbiru p-4 px-4" style="border-radius: 10px;">
                            <h5 class="fw-bolder" style="line-height: 30px;">
                                Development <br>
                                Human Capital Program 1
                            </h5>
                            <ul class="fw-lighter">
                                <li>Workshop peran SDM diperusahaan</li>
                                <li>FGD Human process</li>
                                <li>Pelatihan basic organizational</li>
                                <li>Development dan basic human resource</li>
                                <li>Management</li>
                                <li>Pembukaan agen perubahan internal</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-6 pt-5">
                    <div class="px-4">
                        <div class="cardbiru p-4 px-4" style="border-radius: 10px;">
                            <h5 class="fw-bolder" style="line-height: 30px;">
                                Development <br>
                                Human Capital Program 2
                            </h5>
                            <ul class="fw-lighter">
                                <li>Strategic initiative</li>
                                <li>Techno-structural initiative</li>
                                <li>Advantage human resource management</li>
                                <li>Implementing and evaluation</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-6 pt-5">
                    <div class="px-4">
                        <div class="cardbiru p-4 px-4" style="border-radius: 10px;">
                            <h5 class="fw-bolder" style="line-height: 30px;">
                                Human Resource <br>
                                Outsourching
                            </h5>
                            <p class="fw-lighter">Expand your HR capacity without hiring a full-time employee
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-6 pt-5">
                    <div class="px-4">
                        <div class="cardbiru p-4 px-4" style="border-radius: 10px;">
                            <h5 class="fw-bold" style="line-height: 30px;">
                                Psychology Assessment
                            </h5>
                            <p class="fw-lighter">Konsultasi Psychology Assessment untuk individu maupun
                                perusahaan
                            </p>
                        </div>
                    </div>
                </div>
            </div>


            <div class="row py-5 align-items-center" style="height: 474px;">
                <div class="col-6">
                    <h2 class="py-4 fw-bolder">Consult Now <br>
                        And Feel The Benefits</h2>
                    <button class="btn buttonnya" type="submit">Contact Us</button>
                </div>
                <div class="col-6 ">
                    <img class="col-12 imagekiri imagekananindex2" src="./assets/page3-2.png" alt="">

                </div>
            </div>
        </div>
    </div>



</main>

@endsection

@section('script')
@endsection