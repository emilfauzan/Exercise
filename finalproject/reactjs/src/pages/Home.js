import React from 'react'

class Home extends React.Component {
    render() {
        return (
            <main>
                {/* content */}
                <div className="container">
                    <div className="row py-3 bumper my-auto align-items-center">
                        <div className="col-md-8 col-12 p-5 py-2 bglight">
                            <h1 className="my-3 fww gelap">Exploring Wonderful Indonesia</h1>
                            <p>At Wonderful Indonesia, we believe that travel should be an unforgettable experience, and we're
                                dedicated to making sure that every moment you spend with us is one to remember. So why wait? Book
                                your adventure today and discover the magic of Indonesia.</p>
                            <h5 className="btnexplore mt-5 pointer fww">Explore Now <i
                                className="fa-regular fa-circle-right btnexplore"></i>
                            </h5>
                        </div>
                        <div className="imgabsolute1">
                        </div>
                    </div>

                    {/* recommend destination */}
                    <div className="container mb-5">
                        <p className="oren mt-5 pt-5">Recommended Destinations</p>
                        <div className="d-flex justify-content-between">
                            <h4 className="fww">Most Picked Destination</h4>
                            <button type="button" className=" btn btn-success px-5">See all</button>
                        </div>
                        <div className="row text-white wrapper2">
                            <div className="col-xxl-3 col-12">
                                <div className="item">
                                    <div className="gambarrelated">
                                        <h4>Nusa Penida</h4><br />
                                        <p>Kelungkung, Bali</p>
                                    </div>
                                </div>
                            </div>
                            <div className="col-xxl-3 col-12">
                                <div className="item2">
                                    <div className="gambarrelated">
                                        <h4>Pulau Komodo</h4><br />
                                        <p>Nusa Tenggara Timur</p>
                                    </div>
                                </div>
                            </div>
                            <div className="col-xxl-3 col-12">
                                <div className="item3">
                                    <div className="gambarrelated">
                                        <h4>Candi Bodobudur</h4><br />
                                        <p>Magelang, Jawa Tengah</p>
                                    </div>
                                </div>
                            </div>
                            <div className="col-xxl-3 col-12">
                                <div className="item4">
                                    <div className="gambarrelated">
                                        <h4>Gunung Bromo</h4><br />
                                        <p>Tengger, Jawa Timur</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

                {/* early travel exp */}
                <div className="bgijo">
                    <div className="martop">
                        <div className="container">
                            <div className="row align-items-center">
                                <div className="col-md-6 col-12 text-white">
                                    <h1 className="fww">
                                        The Best Early <br />
                                        <span className="oren">Travel Experience</span>
                                    </h1>
                                    <p>We offer a wide range of services and have many choices of travel packages to accompany your
                                        trip. In addition, we also uphold corporate values.</p>
                                </div>
                                <div classNameName="col-md-6 col-12 text-white">
                                    <div className="row d-flex">
                                        <div className="col-md-6 col-12 my-3">
                                            <div className="cardputih">
                                                <div className="d-flex mb-2">
                                                    <img className="my-auto mr-2" src={require('../img/card1.png')}
                                                        alt="" />
                                                    <h4 className="my-auto oren fww">Innovations</h4>
                                                </div>
                                                <p className="text-dark">
                                                    Innovating in Service to Our Travel Customers
                                                </p>
                                            </div>
                                        </div>
                                        <div className="col-md-6 col-12 my-3">
                                            <div className="row">
                                                <div className="col">
                                                    <div className="cardputihtengah">
                                                        <div className="cardputih ">
                                                            <div className="d-flex mb-2">
                                                                <img className="my-auto mr-2"
                                                                    src={require('../img/card2.png')} alt="" />
                                                                <h4 className="my-auto oren fww">Our Ethics</h4>
                                                            </div>
                                                            <p className="text-dark">
                                                                Prioritizing Happy Traveling, Upholding Culture
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div className="col-md-6 col-12 my-3">
                                            <div className="cardputih">
                                                <div className="d-flex mb-2">
                                                    <img className="my-auto mr-2" src={require('../img/card3.png')}
                                                        alt="" />
                                                    <h4 className="my-auto oren fww">Responsibility</h4>
                                                </div>
                                                <p className="text-dark">
                                                    Trusted And Experienced Travel Management
                                                </p>
                                            </div>
                                        </div>
                                        <div className="col-md-6 col-12 my-3">
                                            <div className="cardputih">
                                                <div className="d-flex mbb">
                                                    <img className="my-auto mr-2" src={require('../img/card3.png')}
                                                        alt="" />
                                                    <h4 className="my-auto oren fww">Responsibility</h4>
                                                </div>
                                                <p className="text-dark">
                                                    Trusted And Experienced Travel Management
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                {/* our package */}
                <div className="container mt-5">
                    <h4 className="btnexplore fww text-center">Our Package</h4>
                    <p className="oren fww text-center">More than one destination you will visit</p>
                    <div className="row text-white">
                        <div className="col-md-6 col-12">
                            <div className="bgijo1">
                                <span className="oren">1st Package</span>
                                <h4 className="fww mb-3">Private Trip</h4>
                                <p>Enjoy the luxury of having your own private guide, who will take you to hidden gems and
                                    off-the-beaten-path locations that you won't find in any guidebook.</p>
                                <span className="clouds1"><i className="fas fa-cloud"></i></span>
                                <span className="clouds2"><i className="fas fa-cloud"></i></span>
                                <span className="clouds3"><i className="fas fa-cloud"></i></span>
                                <span className="clouds4"><i className="fas fa-cloud"></i></span>
                                <span className="clouds5"><i className="fas fa-cloud"></i></span>
                            </div>
                        </div>
                        <div className="col-md-6 col-12">
                            <div className="bgijo2">
                                <span className="oren">2st Package</span>
                                <h4 className="fww mb-3">Open Trip</h4>
                                <p>With an open trip, you'll have the opportunity to connect with travelers from all over the world,
                                    creating lifelong friendships and unforgettable memories. </p>
                                <span className="clouds1"><i className="fas fa-cloud"></i></span>
                                <span className="clouds2"><i className="fas fa-cloud"></i></span>
                                <span className="clouds3"><i className="fas fa-cloud"></i></span>
                                <span className="clouds4"><i className="fas fa-cloud"></i></span>
                                <span className="clouds5"><i className="fas fa-cloud"></i></span>
                            </div>
                        </div>
                    </div>

                    <div className="bgijo1 text-white">
                        <div className="row">
                            <div className="col-md-7 col-12">
                                <h3 className="fww"><span className="oren">Get 15%</span> for your <span className="oren">first trip</span></h3>
                                <p>Attention all first-time travelers! We're excited to offer an exclusive discount just for you.
                                    Book your
                                    first trip with us today and receive 10% off your entire journey.</p>
                            </div>
                            <div className="col-md-5 col-12 d-flex align-items-center  justify-content-center">
                                <button type="button" className=" btn btn-success px-5">Get Started</button>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        )
            ;
    }
}

export default Home;