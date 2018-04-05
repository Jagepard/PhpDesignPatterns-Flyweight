<?php
/**
 * Date: 05.04.18
 * Time: 14:45
 *
 * @author    : Korotkov Danila <dankorot@gmail.com>
 * @copyright Copyright (c) 2018, Korotkov Danila
 * @license   http://www.gnu.org/licenses/gpl.html GNU GPLv3.0
 */

namespace Structural\Flyweight;

/**
 * Interface FlyweightInterface
 * @package Structural\Flyweight
 */
interface FlyweightInterface
{

    /**
     * @param string $color
     * @return mixed
     */
    public function render(string $color): string;
}