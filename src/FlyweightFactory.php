<?php

declare(strict_types=1);

/**
 * @author    : Korotkov Danila <dankorot@gmail.com>
 * @license   https://mit-license.org/ MIT
 */

namespace Structural\Flyweight;

/**
 * Class FlyweightFactory
 * @package Structural\Flyweight
 */
class FlyweightFactory
{

    /**
     * @var array
     */
    protected $flyweights = [];

    /**
     * @param string $element
     * @return ColorFlyweight
     */
    public function getFlyweight(string $element): ColorFlyweight
    {
        if (!array_key_exists($element, $this->flyweights)) {
            $this->flyweights[$element] = new ColorFlyweight($element);
        }

        return $this->flyweights[$element];
    }
}
