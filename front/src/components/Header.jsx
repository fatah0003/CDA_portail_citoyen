import { Link } from "react-router-dom";
import logo from '../assets/pictures/logo.jpg';

export default function Header() {
    return (
        <header>
            <div className="header-container">
                <div className="logo">
                    <Link to="/">
                        <img src={logo} alt="Logo" />
                    </Link>
                    <div className="logo-text">
                        <strong>LA PAROLE AUX CITOYENS</strong>
                        L’ACTION À LA MAIRIE
                    </div>
                </div>

                <nav className="menu-nav">
                    <ul className="menu">
                        <li><Link to="/">Accueil</Link></li>
                        <li><Link to="/propositions">Propositions</Link></li>
                        <li><Link to="/about">À propos</Link></li>
                        <li><Link to="/contact">Nous contacter</Link></li>
                    </ul>
                    <Link to="/login" className="btn-connexion">Connexion</Link>
                </nav>
            </div>
        </header>
    );
}
