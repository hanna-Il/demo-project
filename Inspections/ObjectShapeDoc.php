<?php

function foo()
{
    /** @var object{data: string} $object */
    $object = new stdClass();
    $object->date = 'Hello';
}

class Foo {
    /**
     * @var object{name: string, foo : object {name: string, age : int}} $a
     */
    public $age;

    public function b(): void
    {
        $this->a->named;
    }
}

/** @return  object{foo: Foo, bar: object{ baz: string } }*/
function abc() {

}

abc()->bar->bazz;
