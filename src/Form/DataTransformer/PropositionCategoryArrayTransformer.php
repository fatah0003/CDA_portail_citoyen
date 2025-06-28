<?php

namespace App\Form\DataTransformer;

use App\Enum\PropositionCategory;
use Symfony\Component\Form\DataTransformerInterface;

class PropositionCategoryArrayTransformer implements DataTransformerInterface
{
    public function transform($value): array
    {
        if (!$value) {
            return [];
        }

        return array_map(function ($category) {
            return $category instanceof PropositionCategory ? $category->value : (string) $category;
        }, $value);
    }

    public function reverseTransform($value): array
    {
        if (!is_array($value)) {
            return [];
        }

        return array_map(function ($val) {
            return $val instanceof PropositionCategory ? $val : PropositionCategory::from($val);
        }, $value);
    }
}
