import { useEffect, useState } from "react";
import axios from "axios";

export default function Propositions() {
    const [propositions, setPropositions] = useState([]);
    const [loading, setLoading] = useState(true);

    useEffect(() => {
        axios
            .get("http://127.0.0.1:8000/proposition/api/list")
            .then((res) => {
                console.log("Réponse API :", res.data);
                setPropositions(res.data);
            })
            .catch((err) => {
                console.error("Erreur lors du chargement des propositions :", err);
            })
            .finally(() => setLoading(false));
    }, []);

    if (loading) return <p>Chargement...</p>;

    return (
        <div>
            <h1>Liste des propositions</h1>
            {propositions.length === 0 ? (
                <p>Aucune proposition trouvée.</p>
            ) : (
                <ul>
                    {propositions.map((p) => (
                        <li className={"prpo"} key={p.id}>
                            <strong> {p.titre}</strong> — {p.description} - {p.createdAt}

                        </li>
                    ))}
                </ul>
            )}
        </div>
    );
}
