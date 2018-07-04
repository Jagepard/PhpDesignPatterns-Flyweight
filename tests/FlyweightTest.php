<?php

declare(strict_types=1);

/**
 * @author    : Korotkov Danila <dankorot@gmail.com>
 * @license   https://mit-license.org/ MIT
 */

namespace Structural\Flyweight\Tests;

use Structural\Flyweight\FlyweightFactory;
use PHPUnit\Framework\TestCase as PHPUnit_Framework_TestCase;

/**
 * Class SingletonsPoolTest
 */
class FlyweightTest extends PHPUnit_Framework_TestCase
{

    public function testFlyweight()
    {
        $factory  = new FlyweightFactory();
        $elements = ['table', 'tr', 'td'];

        foreach ($elements as $element) {
            $this->assertEquals("{element:$element; color:black}\n", $factory->getFlyweight($element)->render('black'));
        }

        foreach ($elements as $element) {
            $this->assertEquals("{element:$element; color:red}\n", $factory->getFlyweight($element)->render('red'));
        }
    }
}
