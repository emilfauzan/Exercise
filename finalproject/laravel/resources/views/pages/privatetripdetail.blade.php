@extends('layouts.main')

@section('title')
Travelark - Private Trip Detail
@endsection

@section('content')


<!-- content start -->
<div class="container">
    <h4 class="pt-5 mt-3">Bali</h4>
    <div class="row row-cols-auto mb-4">
        <div class="col d-flex">
            <p class="my-1"><i class="fa-solid fa-tag"></i> Island/Adventure</p>
        </div>
        <div class="col d-flex">
            <p class="my-1"><i class="fa-solid fa-location-dot"></i> Bali, Indonesia</p>
        </div>
        <div class="col d-flex">
            <p class="my-1"><i class="fa-solid fa-location-dot"></i> Private Trip</p>
        </div>
    </div>

    <!-- start of private trip detail -->
    <div class="row">
        <!-- gambar js start -->
        <div class="col-md-8 col-12">
            <div class="bungkusgambargede">
                <div class="gambargede">
                    <img src="/Exercise/finalproject/plain/assets/gambar1.png" id="main" alt="Gallery image">
                </div>
            </div>
            <div class="containergambar5">
                <img src="/Exercise/finalproject/plain/assets/gambar1.png" onclick="changeImage(this.src)">
                <img src="/Exercise/finalproject/plain/assets/gambar3.png" onclick="changeImage(this.src)">
                <img src="/Exercise/finalproject/plain/assets/gambar4.png" onclick="changeImage(this.src)">
                <img src="/Exercise/finalproject/plain/assets/gambar5.png" onclick="changeImage(this.src)">
                <img src="/Exercise/finalproject/plain/assets/gambar6.png" onclick="changeImage(this.src)">
            </div>
        </div>
        <!-- gambar js end -->

        <div class="col-md-4 col-12">
            <div class="cardputih">
                <h4>Destination Overview</h4>
                <div class="d-flex justify-content-between">
                    <h4 class="fw-bold my-auto">Bali, Indonesia</h4>
                    <span class="my-auto"> <i class="fas fa-star" style="color: #f4eb00;"></i> 4.5</span>
                </div>
                <p>69 Reviews</p>
                <br>
                <p>Price</p>
                <h4 class="fw-bold">Rp. 2.500.000 / Pax</h4>
                <br>
                <p>Duration</p>
                <h4 class="fw-bold">4 Days 3 Nights</h4>
                <button type="button" class="btn btn-success col-12">Book Now</button>
                <hr />
                <p class="text-center">Specials offer for new traveler 15 % off! <br>
                    Valid until 5 August 2023.</p>
            </div>
        </div>
        <div class="col-md-8 col-12 my-3">
            <button id="desc" type="button" target="1" class="single1 btn btn-success my-1 mx-2">Description</button>
            <button id="incl" type="button" target="2" class="single2 btn btn-light my-1 m-2">What's
                Included?</button>

            <section class="targetbox">
                <div class="target" id="div1">
                    <p class="my-3 justifytext">If you're planning a trip to Bali, you might want to consider a
                        visit to
                        Nusa Penida. This beautifulisland is located southeast of Bali and is known for its stunning
                        beaches, crystal clear waters, and picturesque landscapes. In this article, we'll take a
                        closer
                        look
                        at Nusa Penida and provide you with some tips for planning your trip.
                        <br><br> The easiest way to get to Nusa
                        Penida is to take a fast boat from Sanur or Padang Bai. The journey takes approximately 45
                        minutes
                        to 1 hour, depending on the sea conditions. You can also take a ferry from Padang Bai, which
                        is
                        cheaper but takes longer.
                    </p>
                </div>
                <div class="target" id="div2">
                    <p class="my-3 justifytext">
                        <span class="btnexplore"><i class="fas fa-award"></i> Featured Trip</span>
                    <p>What you can get in private trip package:</p>
                    <ul>
                        <li><span> Customize Acomodation</span></li>
                        <li>Any destination you want</li>
                        <li>Trip with private group or solo trip</li>
                        <li>Create any event you want (Gathering, Games, Meetings. etc)</li>
                        <li>1 Day free (include vehicle)</li>
                        <li>Guided by our agents</li>
                    </ul>
                    </p>
                    <p class="my-3 justifytext">
                        <span class="btnexplore"><i class="fas fa-car"></i> Acomodation</span>
                    <p>Nusa Penida has a variety of accommodations to choose from, ranging from budget-friendly
                        guesthouses
                        to luxury resorts. Some popular options include:
                    </p>
                    <ul>
                        <li>Semabu Hills Hotel Nusa Penida</li>
                        <li>Daphila Cottage</li>
                        <li>La Roja Bungalows</li>
                        <li>Nusa Veranda Sunset Villas & Restaurant</li>
                    </ul>
                    </p>
                    <p class="my-3 justifytext">
                        <span class="btnexplore"><i class="fas fa-map-marked-alt"></i> Destination</span>
                    <ul>
                        <li>Visit Kelingking Beach</li>
                        <li>Explore Angel's Billabong</li>
                        <li>Snorkel at Crystal Bay</li>
                        <li>Visit Broken Beach</li>
                    </ul>
                    </p>
                </div>
            </section>

        </div>
    </div>
    <!-- end of private trip detail -->

    <!-- horizontal slider -->
    <p class="oren mt-5 pt-5">Related</p>
    <h4 class="fw-bold">Destination may you liked</h4>
    <div class="wrapper text-white">
        <div class="item">
            <div class="gambarrelated">
                <h4>Kelungkung, Bali</h4><br>
                <p>Nusa Penida</p>
            </div>
        </div>
        <div class="item2">
            <div class="gambarrelated">
                <h4>Pulau Komodo</h4><br>
                <p>Nusa Tenggara Timur</p>
            </div>
        </div>
        <div class="item3">
            <div class="gambarrelated">
                <h4>Candi Bodobudur</h4><br>
                <p>Magelang, Jawa Tengah</p>
            </div>
        </div>
        <div class="item4">
            <div class="gambarrelated">
                <h4>Gunung Bromo</h4><br>
                <p>Tengger, Jawa Timur</p>
            </div>
        </div>
        <div class="item">
            <div class="gambarrelated">
                <h4>Nusa Penida</h4><br>
                <p>Kelungkung, Bali</p>
            </div>
        </div>
        <div class="item2">
            <div class="gambarrelated">
                <h4>Pulau Komodo</h4><br>
                <p>Nusa Tenggara Timur</p>
            </div>
        </div>
        <div class="item3">
            <div class="gambarrelated">
                <h4>Candi Bodobudur</h4><br>
                <p>Magelang, Jawa Tengah</p>
            </div>
        </div>
        <div class="item4">
            <div class="gambarrelated">
                <h4>Gunung Bromo</h4><br>
                <p>Tengger, Jawa Timur</p>
            </div>
        </div>
        <div class="item">
            <div class="gambarrelated">
                <h4>Nusa Penida</h4><br>
                <p>Kelungkung, Bali</p>
            </div>
        </div>
        <div class="item2">
            <div class="gambarrelated">
                <h4>Pulau Komodo</h4><br>
                <p>Nusa Tenggara Timur</p>
            </div>
        </div>
    </div>
    <!-- end of horizontal slider -->

    <!-- help -->
    <div class="container">
        <h3 class="fww btnexplore d-flex justify-content-center mt-5 pt-5">Need our help?</h3>
        <p class="oren d-flex justify-content-center">Contact us freely to get any information you need.</p>

        <form action="" method="POST" role="form">
            <div class="form-group">
                <div class="row">
                    <div class="col-6 mb-3">
                        <label for="exampleFormControlTextarea1" class="form-label">First Name</label>
                        <input type="text" class="form-control" id="" placeholder="First Name">
                    </div>
                    <div class="col-6 mb-3">
                        <label for="exampleFormControlTextarea1" class="form-label">Last Name</label>
                        <input type="text" class="form-control" id="" placeholder="Last Name">
                    </div>
                </div>
                <label for="exampleFormControlTextarea1" class="form-label">Email</label>
                <input type="text" class="form-control mb-3" id="" placeholder="Email">
                <label for="exampleFormControlTextarea1" class="form-label">Phone Number</label>
                <input type="text" class="form-control mb-3" id="" placeholder="Phone Number">
                <label for="exampleFormControlTextarea1" class="form-label">Message</label>
                <textarea class="form-control mb-3" id="exampleFormControlTextarea1" rows="6"></textarea>
            </div>
            <button type="submit" class="btn btn-outline-success mb-5">Submit</button>
        </form>
    </div>
    <!-- end of help -->

    <!-- end of content -->
</div>
<!-- content end -->

@endsection