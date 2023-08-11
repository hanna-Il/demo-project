<?php

/**
 * @return void
 */
function foo()
{
    /** @var object{data: string} $object */
    $object = new stdClass();
    $object->date = 'Hello'; //date should be highlighted as not matching object shape
}


// Field reference doesn't match object shape: False positive when object has empty type

class Sample {

    private function foo(object $topic)
    {
        $value = $topic->a->b;
        $m = $value->prop; //false positive "Value should be one of: #P#C\object.a "
    }
}

// Field reference doesn't match object shape: False positive when object is initialized by method call

class Obj {
    public $stdClass;

    public function __construct()
    {
        $this->stdClass = new stdClass();
    }
}

class Sample
{
    public function getStdClass()
    {
        return new Obj();
    }

    public function getOwner()
    {
        $stdClass = $this->getStdClass()->stdClass;
        $stdClass->name = 'Name'; // false positive Value should be one of: #M#C\Sample.getStdClass
        return $stdClass;
    }
}


