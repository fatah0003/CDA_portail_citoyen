import { Link } from "react-router-dom";

export default function Footer() {
    return (
        <footer className="footer blue">
            <div className="footer__section">
                <h3>Liens utiles</h3>
                <ul>
                    <li><Link to="/about">À propos</Link></li>
                    <li><a href="#">Mentions légales</a></li>
                    <li><a href="#">Politique de confidentialité</a></li>
                    <li><a href="#">Accessibilité</a></li>
                </ul>
            </div>
            <div className="footer__bottom">
                <p>© 2025 Ville de Lyon. Tous droits réservés.</p>
            </div>
        </footer>
    );
}
