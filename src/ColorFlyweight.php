<?php

declare(strict_types=1);

/**
 * @author  : Jagepard <jagepard@yandex.ru>
 * @license https://mit-license.org/ MIT
 */

namespace Structural\Flyweight;

class ColorFlyweight implements FlyweightInterface
{
    private string $element;

    public function __construct(string $element)
    {
        $this->element = $element;
    }

    public function render(string $color): string
    {
        return sprintf("{element:%s; color:%s}\n", $this->element, $color);
    }
}
