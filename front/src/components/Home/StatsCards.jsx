import React from 'react';

const stats = [
    { value: 1256, label: 'Citoyens actifs', text: 'Connectez-vous pour participer, proposer et voter' },
    { value: 25, label: 'Propositions exprimées', text: 'Vous avez proposé 25 propositions à réaliser' },
    { value: 99, label: 'Votes exprimés', text: 'Vous avez émis 99 votes' },
    { value: 7, label: 'Projets réalisés', text: 'On a réalisé 7 projets grâce à vous' },
];

const StatsCards = () => {
    return (
        <section className="blue function-section">
            <div className="card--container">
                {stats.map((stat, index) => (
                    <div key={index} className="card--function--static">
                        <h3>{stat.value}</h3>
                        <h4>{stat.label}</h4>
                        <p>{stat.text}</p>
                    </div>
                ))}
            </div>
        </section>
    );
};

export default StatsCards;
