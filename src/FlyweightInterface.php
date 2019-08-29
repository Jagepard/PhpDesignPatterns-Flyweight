<?php

/**
 * @author    : Korotkov Danila <dankorot@gmail.com>
 * @license   https://mit-license.org/ MIT
 */

namespace Structural\Flyweight;

interface FlyweightInterface
{
    /**
     * @param string $color
     * @return mixed
     */
    public function render(string $color): string;
}
