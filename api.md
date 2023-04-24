## Table of contents
- [Structural\Flyweight\ColorFlyweight](#structural_flyweight_colorflyweight)
- [Structural\Flyweight\FlyweightFactory](#structural_flyweight_flyweightfactory)
- [Structural\Flyweight\FlyweightInterface](#structural_flyweight_flyweightinterface)
<hr>

<a id="structural_flyweight_colorflyweight"></a>

### Class: Structural\Flyweight\ColorFlyweight
##### implements [Structural\Flyweight\FlyweightInterface](#structural_flyweight_flyweightinterface)
| Visibility | Function |
|:-----------|:---------|
|public|<em><strong>__construct</strong>( string $element )</em><br>Sets an element<br>Устанавливает элемент|
|public|<em><strong>render</strong>( string $color ): string</em><br>Displays the result of applying a color to an element<br>Отображает результат применения цвета к элементу|


<a id="structural_flyweight_flyweightfactory"></a>

### Class: Structural\Flyweight\FlyweightFactory
| Visibility | Function |
|:-----------|:---------|
|public|<em><strong>getColorFlyweight</strong>( string $element ): Structural\Flyweight\ColorFlyweight</em><br>Applies a color to an element<br>Применяет цвет к элементу|


<a id="structural_flyweight_flyweightinterface"></a>

### Class: Structural\Flyweight\FlyweightInterface
| Visibility | Function |
|:-----------|:---------|
|abstract public|<em><strong>render</strong>( string $color ): string</em><br>|
<hr>

###### created with [Rudra-Documentation-Collector](#https://github.com/Jagepard/Rudra-Documentation-Collector)
