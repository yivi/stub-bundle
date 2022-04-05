<?php declare(strict_types=1);

namespace Yivi\StubBundle\String;

interface ReverserInterface
{
    public function reverse(string $string): string;
}
