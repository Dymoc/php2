<?php

//п.1
class A {
    public function foo() {
        static $x = 0;
        echo ++$x;
    }
}
$a1 = new A();
$a2 = new A();
$a1->foo();
$a2->foo();
$a1->foo();
$a2->foo();
// так так переменная статична она общая для всех экземпляров класса

echo "<br>";

//п.2
class B {
    public function foo() {
        static $x = 0;
        echo ++$x;
    }
}
class C extends B {
}
$a1 = new B();
$b1 = new C();
$a1->foo();
$b1->foo();
$a1->foo();
$b1->foo();
// тут переменная статична но классы у переменных разные

//нет изменений между 5 задание и измененное 5 задание

echo "<br>";