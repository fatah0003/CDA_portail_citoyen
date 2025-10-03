import { useState } from "react";
import axios from "axios";

export default function Login() {
    const [email, setEmail] = useState("");
    const [password, setPassword] = useState("");
    const [error, setError] = useState("");
    const [success, setSuccess] = useState("");

    const handleSubmit = async (e) => {
        e.preventDefault();
        setError("");
        setSuccess("");

        try {
            const response = await axios.post("http://localhost:8000/api/login", {
                email,
                password,
            });

            // Exemple : si ton API renvoie un token
            localStorage.setItem("token", response.data.token);

            setSuccess("Connexion réussie");
        } catch (err) {
            setError("Identifiants incorrects ");
        }
    };

    return (
        <main className="login-container">
            <h1>Connexion</h1>
            <form onSubmit={handleSubmit} className="login-form">
                <div>
                    <label>Email</label>
                    <input
                        type="email"
                        value={email}
                        onChange={(e) => setEmail(e.target.value)}
                        required
                    />
                </div>

                <div>
                    <label>Mot de passe</label>
                    <input
                        type="password"
                        value={password}
                        onChange={(e) => setPassword(e.target.value)}
                        required
                    />
                </div>

                <button type="submit">Se connecter</button>
            </form>

            {error && <p className="error">{error}</p>}
            {success && <p className="success">{success}</p>}
        </main>
    );
}
