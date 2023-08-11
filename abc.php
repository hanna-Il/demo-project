<?php

use JetBrains\PhpStorm\ObjectShape;

//function abc(): object
//{
//    return (object) [
//            'type' => 'setAttribute',
//            'value' => 1
//    ];
//}
//

/** @var $a object{name: string, age: int, occupatoin: int} */
$a = new stdClass();
$a->name = "name";
$a->age = 1;
$a->occupatoin = "student";


///** @var $b object{"str": string, "index": int} */
//$b = (object) ["str" => "string", "index" => 0];


///** @var object{foo: string, bar: object{baz: string, foo: Foo }} $object */
//
//echo $object->bar->foo;
//
//class Foo {
//    const A = 0;
//}


//$json = '{"a":1,"b":2,"c":3,"d":4,"e":5}';
//
//$obj = json_decode($json);
//echo $obj->{'b'};


/** @param object{foo:string} $o */
function foo(object $o) : string {
    return $o->foo;
}

$s = new \stdClass();
$s->foo = "hello";
foo($s);
class A {
    /** @var string */
    public $foo = "hello";
}
foo(new A);