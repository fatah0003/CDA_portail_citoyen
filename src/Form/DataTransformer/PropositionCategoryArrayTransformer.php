<?php

namespace App\Form\DataTransformer;

use App\Enum\PropositionCategory;
use Symfony\Component\Form\DataTransformerInterface;
use Symfony\Component\Form\Exception\TransformationFailedException;

class PropositionCategoryArrayTransformer implements DataTransformerInterface
{
    public function transform($value): array
    {
        if (!$value) {
            return [];
        }

        return array_map(fn(PropositionCategory $category) => $category->value, $value);
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
