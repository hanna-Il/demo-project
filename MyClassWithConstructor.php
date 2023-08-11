<?php

/**
 *
 */
class MyClassWithConstructor {
    public function getField()
    {
        return $this->field;
    }
    public function setField($field)
    {
        $this->field = $field;
        return $this;
    }
    public $field;

    /**
     * @param $field
     */
    public function __construct($field)
    {
        $this->field = $field;
    }
}


class MyClass {
    public $foo;
}


class A
{
    private $a;
    private $b;

    public function __construct($a, $b)
    {
        $this->b = $b;
    }
}