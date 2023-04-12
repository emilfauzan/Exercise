import React from 'react'
import { NavLink } from 'react-router-dom';
import image from '../../img/Dark logo.png';

const Navbar = () => {
    return (
        <div>
            {/* <!-- navbar --> */}
            <nav class="navbar navbar-expand-lg navbar-light bg-light" id='navbar'>
                <div class="container">
                    <span to="/" class="navbar-brand">
                        <img src={image} alt="Travelark" />
                    </span>
                    <button class="navbar-toggler d-lg-none" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapsibleNavId" aria-controls="collapsibleNavId" aria-expanded="false"
                        aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="collapsibleNavId">
                        <div>
                            <ul class="navbar-nav me-auto mt-2 mt-lg-0">
                                <NavLink activeClassName="activeNavbar" exact to="/" class="nav-link">
                                    <li class="nav-item px-3">
                                        Discovery
                                    </li>
                                </NavLink>
                                <NavLink activeClassName="activeNavbar" exact to="/destination" class="nav-link">
                                    <li class="nav-item px-3">
                                        Destination
                                    </li>
                                </NavLink>
                                <NavLink activeClassName="activeNavbar" exact to="/package" class="nav-link">
                                    <li class="nav-item px-3">
                                        Package
                                    </li>
                                </NavLink>
                                <NavLink activeClassName="activeNavbar" exact to="/aboutus" class="nav-link">
                                    <li class="nav-item px-3">
                                        About us
                                    </li>
                                </NavLink>
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