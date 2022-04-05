<?php declare(strict_types=1);

namespace Yivi\StubBundle\String;

use function array_reverse;
use function implode;
use function mb_str_split;

class Reverser implements ReverserInterface
{

    public function reverse(string $string): string
    {
        return implode(array_reverse(mb_str_split($string)));
    }

}
