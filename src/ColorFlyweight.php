<?php

declare(strict_types=1);

/**
 * @author    : Korotkov Danila <dankorot@gmail.com>
 * @license   https://mit-license.org/ MIT
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
        return sprintf("{element:%s; color:%s}\n", $this->element, $color);
    }
}
