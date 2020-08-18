<?php

declare(strict_types=1);

/**
 * @author  : Jagepard <jagepard@yandex.ru>
 * @license https://mit-license.org/ MIT
 */

namespace Structural\Flyweight\Tests;

use Structural\Flyweight\FlyweightFactory;
use PHPUnit\Framework\TestCase as PHPUnit_Framework_TestCase;

class FlyweightTest extends PHPUnit_Framework_TestCase
{
    public function testFlyweight()
    {
        $factory  = new FlyweightFactory();
        $elements = ['table', 'tr', 'td'];

        foreach ($elements as $element) {
            $this->assertEquals(
                "{element:$element; color:black}\n",
                $factory->getColorFlyweight($element)->render('black')
            );
        }

        foreach ($elements as $element) {
            $this->assertEquals(
                "{element:$element; color:red}\n",
                $factory->getColorFlyweight($element)->render('red')
            );
        }
    }
}
