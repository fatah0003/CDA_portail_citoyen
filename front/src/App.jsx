import { BrowserRouter as Router, Routes, Route } from "react-router-dom";
import './App.css';
import Home from "./pages/Home";
import Propositions from "./pages/Propositions";
// import About from "./pages/About";
// import Contact from "./pages/Contact";
import Login from "./pages/Login";
import Header from "./components/Header";
import Footer from "./components/Footer";

function App() {
    return (
        <Router>
            <Header />
            <Routes>
                <Route path="/" element={<Home />} />
                <Route path="/propositions" element={<Propositions />} />
                {/*<Route path="/about" element={<About />} />*/}
                {/*<Route path="/contact" element={<Contact />} />*/}
                <Route path="/login" element={<Login />} />
            </Routes>
            <Footer />
        </Router>
    );
}

export default App;
