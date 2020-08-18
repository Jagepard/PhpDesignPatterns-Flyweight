## Table of contents

- [\Structural\Flyweight\ColorFlyweight](#class-structuralflyweightcolorflyweight)
- [\Structural\Flyweight\FlyweightFactory](#class-structuralflyweightflyweightfactory)
- [\Structural\Flyweight\FlyweightInterface (interface)](#interface-structuralflyweightflyweightinterface)

<hr />

### Class: \Structural\Flyweight\ColorFlyweight

> Class ColorFlyweight

| Visibility | Function |
|:-----------|:---------|
| public | <strong>__construct(</strong><em>mixed/\string</em> <strong>$element</strong>)</strong> : <em>void</em><br /><em>ColorFlyweight constructor.</em> |
| public | <strong>render(</strong><em>\string</em> <strong>$color</strong>)</strong> : <em>mixed/string</em> |

*This class implements [\Structural\Flyweight\FlyweightInterface](#interface-structuralflyweightflyweightinterface)*

<hr />

### Class: \Structural\Flyweight\FlyweightFactory

> Class FlyweightFactory

| Visibility | Function |
|:-----------|:---------|
| public | <strong>getFlyweight(</strong><em>\string</em> <strong>$element</strong>)</strong> : <em>[\Structural\Flyweight\ColorFlyweight](#class-structuralflyweightcolorflyweight)</em> |

<hr />

### Interface: \Structural\Flyweight\FlyweightInterface

> Interface FlyweightInterface

| Visibility | Function |
|:-----------|:---------|
| public | <strong>render(</strong><em>\string</em> <strong>$color</strong>)</strong> : <em>mixed</em> |

