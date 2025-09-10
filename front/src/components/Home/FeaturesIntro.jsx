import React from 'react';

const FeaturesIntro = ({ title, text }) => {
    return (
        <section className="function-section">
            <div className="about-content">
                <div className="function-content">
                    <h2>{title}</h2>
                    <p>{text}</p>
                </div>
            </div>
        </section>
    );
};

export default FeaturesIntro;
