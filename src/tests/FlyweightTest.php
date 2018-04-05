<?php

declare(strict_types=1);

/**
 * @author    : Korotkov Danila <dankorot@gmail.com>
 * @copyright Copyright (c) 2018, Korotkov Danila
 * @license   http://www.gnu.org/licenses/gpl.html GNU GPLv3.0
 */

use PHPUnit\Framework\TestCase as PHPUnit_Framework_TestCase;
use Structural\Flyweight\FlyweightFactory;


/**
 * Class SingletonsPoolTest
 */
class FlyweightTest extends PHPUnit_Framework_TestCase
{

    public function testFlyweight()
    {
        $factory  = new FlyweightFactory();
        $factory->getFlyweight('table')->render('black');
        $this->assertEquals("{element:table; color:black}\n", $factory->getFlyweight('table')->render('black'));
    }
}
