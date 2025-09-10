import { BrowserRouter as Router, Routes, Route } from 'react-router-dom';
import Home from './pages/Home';
import Propositions from './pages/Propositions';

function App() {
    return (
        <Router>
            <Routes>
                <Route path="/" element={<Home />} />
                <Route path="/propositions" element={<Propositions />} />
            </Routes>
        </Router>
    );
}

export default App;
