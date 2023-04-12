import React, { useState } from "react";

import Navbar from "./pages/components/Navbar";
import Footer from "./pages/components/Footer";

import Home from "./pages/Home";
import Destination from "./pages/Destination";
import Package from "./pages/Package";
import Aboutus from "./pages/Aboutus";
import Error from "./pages/Error";

import { BrowserRouter as Router, Route, Routes } from "react-router-dom";


function App() {
  const [showNav, setshowNav] = useState(true);


  return (
    <Router>
      <div>
        {showNav &&
          <nav>
            <Navbar />
          </nav>
        }
        <Routes>
          <Route exact path="/" element={<Home />} />
          <Route path="/destination" element={<Destination />} />
          <Route path="/package" element={<Package />} />
          <Route path="/aboutus" element={<Aboutus />} />
          <Route path="/*" element={<Error />} />
        </Routes>
        {showNav &&
          <footer>
            <Footer />
          </footer>
        }
      </div >
    </Router >
  );
}

export default App;
