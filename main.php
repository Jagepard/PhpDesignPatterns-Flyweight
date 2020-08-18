#! usr/bin/env php
<?php

namespace Structural\Flyweight;

require_once "vendor/autoload.php";

$elements = ["table", "tr", "td"];
$factory  = new FlyweightFactory();

foreach ($elements as $element) {
    print $factory->getFlyweight($element)->render("green");
}

foreach ($elements as $element) {
    print $factory->getFlyweight($element)->render("red");
}
