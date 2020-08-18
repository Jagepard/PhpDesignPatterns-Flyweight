#! usr/bin/env php
<?php

namespace Structural\Flyweight;

require_once "vendor/autoload.php";

$elements = ["table", "tr", "td"];
$factory  = new FlyweightFactory();

foreach ($elements as $element) {
    print $factory->getColorFlyweight($element)->render("green");
}

foreach ($elements as $element) {
    print $factory->getColorFlyweight($element)->render("red");
}
