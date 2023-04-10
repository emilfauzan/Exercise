import React from "react";
import Navbar from "./pages/components/Navbar";
import Footer from "./pages/components/Footer";
import Home from "./pages/Home";
import Destination from "./pages/Destination";
import Package from "./pages/Package";
import Aboutus from "./pages/Aboutus";
import { BrowserRouter as Router, Route, Routes } from "react-router-dom";


function App() {
  return (
    <Router>
      <div>
        <Navbar />
        <Routes>
          <Route exact path="/" element={<Home />} />
          <Route path="/destination" element={<Destination />} />
          <Route path="/package" element={<Package />} />
          <Route path="/aboutus" element={<Aboutus />} />
        </Routes>
        <Footer />
      </div>
    </Router>
  );
}

export default App;
