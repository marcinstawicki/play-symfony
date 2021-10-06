<?php

namespace App\Twig;

use Twig\Extension\AbstractExtension;
use Twig\TwigFilter;
use Twig\TwigFunction;

class NumericExtension extends AbstractExtension
{
    public function getFunctions(): array
    {
        return [
            new TwigFunction('numeric', [$this, 'isNumeric']),
        ];
    }

    public function isNumeric($value): bool {
        return is_numeric($value);
    }
}
