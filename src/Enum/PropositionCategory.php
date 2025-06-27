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

    public function label(): string
    {
        return match ($this) {
            self::MOBILITE => 'Mobilité',
            self::ENVIRONNEMENT => 'Environnement',
            self::CULTURE => 'Culture',
            self::URBANISME => 'Urbanisme',
            self::EDUCATION => 'Éducation',
            self::AUTRE => 'Autre',
        };
    }
}
