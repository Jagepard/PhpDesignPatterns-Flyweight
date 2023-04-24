<?php

/**
 * @author  : Jagepard <jagepard@yandex.ru>
 * @license https://mit-license.org/ MIT
 */

namespace Structural\Flyweight;

interface FlyweightInterface
{
    /**
     * @param  string $color
     * @return string
     */
    public function render(string $color): string;
}
