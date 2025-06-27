<?php

namespace App\Enum;

enum PropositionCategory: string
{
    case MOBILITE = 'mobilité';
    case ENVIRONNEMENT = 'environnement';
    case CULTURE = 'culture';
    case URBANISME = 'urbanisme';
    case EDUCATION = 'éducation';
    case AUTRE = 'autre';

}
