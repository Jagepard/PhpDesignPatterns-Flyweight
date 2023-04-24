<?php

declare(strict_types=1);

/**
 * @author  : Jagepard <jagepard@yandex.ru>
 * @license https://mit-license.org/ MIT
 */

namespace Structural\Flyweight;

class FlyweightFactory
{
    private array $flyweights = [];

    /**
     * Applies a color to an element
     * -----------------------------
     * Применяет цвет к элементу
     *
     * @param  string         $element
     * @return ColorFlyweight
     */
    public function getColorFlyweight(string $element): ColorFlyweight
    {
        if (!array_key_exists($element, $this->flyweights)) {
            $this->flyweights[$element] = new ColorFlyweight($element);
        }

        return $this->flyweights[$element];
    }
}
