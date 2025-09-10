import React from 'react';
import Header from '../components/Header';
import Footer from '../components/Footer';
import Banner from '../components/Home/Banner';
import About from '../components/Home/About';
import FeaturesIntro from '../components/Home/FeaturesIntro';
import FeaturesCards from '../components/Home/FeaturesCards';
import StatsCards from '../components/Home/StatsCards';
import Partners from '../components/Home/Partners';

const Home = () => {
    return (
        <>

            <main>
                <Banner />
                <About />
                <FeaturesIntro title="Nos fonctionnalités" text="Explorez les outils qui facilitent votre participation citoyenne et rendent vos idées visibles." />
                <FeaturesCards />
                <FeaturesIntro title="En chiffres" text="Un aperçu des contributions et de la participation des citoyens sur la plateforme." />
                <StatsCards />
                <Partners />
            </main>

        </>
    );
};

export default Home;
