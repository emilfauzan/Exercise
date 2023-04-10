import React from 'react'
import { Link } from 'react-router-dom';
import image from '../../img/Dark logo.png';

function Navbar() {
    return (
        <div>
            {/* <!-- navbar --> */}
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="container">
                    <Link to="/" class="navbar-brand">
                        <img src={image} alt="Travelark" />
                    </Link>
                    <button class="navbar-toggler d-lg-none" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapsibleNavId" aria-controls="collapsibleNavId" aria-expanded="false"
                        aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="collapsibleNavId">
                        <div>
                            <ul class="navbar-nav me-auto mt-2 mt-lg-0">
                                <li class="nav-item px-3">
                                    <Link to="/" class="nav-link active">Discovery</Link>
                                </li>
                                <li class="nav-item px-3">
                                    <Link to="/destination" class="nav-link active">Destination</Link>
                                </li>
                                <li class="nav-item px-3">
                                    <Link to="/package" class="nav-link active">Package</Link>
                                </li>
                                <li class="nav-item px-3">
                                    <Link to="/aboutus" class="nav-link active">About us</Link>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <button type="button" class=" btn btn-success">Register</button>
                </div>
            </nav>
            {/* <!-- end of navbar --> */}
        </div>
    )
}

export default Navbar