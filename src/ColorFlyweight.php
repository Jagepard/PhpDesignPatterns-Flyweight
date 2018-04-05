<?php
/**
 * Date: 05.04.18
 * Time: 15:02
 *
 * @author    : Korotkov Danila <dankorot@gmail.com>
 * @copyright Copyright (c) 2018, Korotkov Danila
 * @license   http://www.gnu.org/licenses/gpl.html GNU GPLv3.0
 */

namespace Structural\Flyweight;

/**
 * Class ColorFlyweight
 * @package Structural\Flyweight
 */
class ColorFlyweight implements FlyweightInterface
{

    /**
     * @var string
     */
    protected $element;

    /**
     * ColorFlyweight constructor.
     * @param $element
     */
    public function __construct(string $element)
    {
        $this->element = $element;
    }

    /**
     * @param string $color
     * @return mixed|string
     */
    public function render(string $color): string
    {
        return sprintf("{element:%s; color:%s}\n", $this->getElement(), $color);
    }

    /**
     * @return string
     */
    public function getElement(): string
    {
        return $this->element;
    }
}