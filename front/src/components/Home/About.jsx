import React from 'react';
import pjImage from '../../assets/pictures/pj-image.jpg';

const About = () => {
    return (
        <section className="about">
            <div className="about-container">
                <div className="about-content">
                    <div className="about-text">
                        <h2>Bienvenue sur Portail Citoyen, votre voix pour une ville meilleure !</h2>
                        <p>
                            Portail Citoyen est une plateforme participative qui vous permet de faire entendre vos idées pour
                            améliorer votre cadre de vie. Que vous souhaitiez proposer de nouvelles initiatives, soutenir
                            celles des autres ou suivre l’évolution des projets, tout est pensé pour faciliter votre engagement citoyen.
                        </p>
                        <a href="/" className="about-button">En savoir-plus &gt;&gt;</a>
                    </div>
                    <img src={pjImage} alt="Portrait" />
                </div>
            </div>
        </section>
    );
};

export default About;
