<?php
/**
 * Date: 05.04.18
 * Time: 15:08
 *
 * @author    : Korotkov Danila <dankorot@gmail.com>
 * @copyright Copyright (c) 2018, Korotkov Danila
 * @license   http://www.gnu.org/licenses/gpl.html GNU GPLv3.0
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