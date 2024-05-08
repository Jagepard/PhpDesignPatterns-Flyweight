<?php

declare(strict_types=1);

/**
 * @author  : Jagepard <jagepard@yandex.ru>
 * @license https://mit-license.org/ MIT
 */

namespace Structural\Flyweight;

class ColorFlyweight implements FlyweightInterface
{
    /**
     * Sets an element
     * ---------------
     * Устанавливает элемент
     *
     * @param  string $element
     */
    public function __construct(private string $element){}

    /**
     * Displays the result of applying a color to an element
     * -----------------------------------------------------
     * Отображает результат применения цвета к элементу
     *
     * @param  string $color
     * @return string
     */
    public function render(string $color): string
    {
        return sprintf("{element:%s; color:%s}\n", $this->element, $color);
    }
}
