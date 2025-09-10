import React from 'react';
import service from '../../assets/pictures/service.jpg';
import kpkt from '../../assets/pictures/logo_kpkt.jpg';
import kem from '../../assets/pictures/kem_digital.jpg';
import selangor from '../../assets/pictures/selangor.jpg';

const Partners = () => {
    return (
        <section className="container--partner">
            <img src={service} alt="Service" />
            <img src={kpkt} alt="Logo KPKT" />
            <img src={kem} alt="Kem Digital" />
            <img src={selangor} alt="Selangor" />
        </section>
    );
};

export default Partners;
