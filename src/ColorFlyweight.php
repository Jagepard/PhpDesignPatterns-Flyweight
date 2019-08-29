<?php

declare(strict_types=1);

/**
 * @author    : Korotkov Danila <dankorot@gmail.com>
 * @license   https://mit-license.org/ MIT
 */

namespace Structural\Flyweight;

class ColorFlyweight implements FlyweightInterface
{
    /**
     * @var string
     */
    private $element;

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
