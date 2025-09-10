import React from 'react';
import AuthImg from '../../assets/pictures/Auth.jpg';
import IdeaImg from '../../assets/pictures/aduan.jpg';
import AllIdeasImg from '../../assets/pictures/eLesen.jpg';
import VoteImg from '../../assets/pictures/hawker.jpg';

const cards = [
    { img: AuthImg, title: 'Authentification', text: 'Connectez-vous pour participer, proposer et voter' },
    { img: IdeaImg, title: 'Proposer un idée', text: 'Partagez vos idées et contribuez à améliorer votre ville' },
    { img: AllIdeasImg, title: 'Voir toutes les propositions', text: 'Découvrez toutes les idées citoyennes en un clic !' },
    { img: VoteImg, title: 'Voter pour des propositions', text: 'Soutenez les idées qui vous tiennent à cœur !' },
];

const FeaturesCards = () => {
    return (
        <section className="green function-section">
            <div className="card--container">
                {cards.map((card, index) => (
                    <div key={index} className="card--function">
                        <img src={card.img} alt={card.title} />
                        <h3>{card.title}</h3>
                        <p>{card.text}</p>
                    </div>
                ))}
            </div>
        </section>
    );
};

export default FeaturesCards;
