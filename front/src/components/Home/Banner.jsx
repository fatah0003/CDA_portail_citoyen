import React from 'react';
import bannerImg from '../../assets/pictures/banniere.jpg';

const Banner = () => {
    return (
        <section className="banner-section relative">
            <img src={bannerImg} alt="Bannière Lyon" className="banner-image" />
            <div className="banner-overlay">
                <h1 className="banner-title">Votre voix, vos idées, votre ville</h1>
                <h2 className="banner-subtitle">Un portail au service des citoyens</h2>
                <p className="banner-text">
                    Une plateforme pour proposer, voter et faire entendre votre voix.<br />
                    Proposez, soutenez, réalisez les idées qui vous tiennent à cœur.
                </p>
            </div>
        </section>
    );
};

export default Banner;
