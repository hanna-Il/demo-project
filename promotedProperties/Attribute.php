<?php

#[Attribute(Attribute::TARGET_PARAMETER)]
class PARAM {
}

#[Attribute(Attribute::TARGET_PROPERTY)]
class PROP {

}

class MyClass {
    public function __construct(#[PARAM|PROP] protected int $a){}
}


#[Attribute(Attribute::TARGET_PARAMETER)]
class C{}

class MyNewClass
{
    public function __construct(#[C] protected $indexName)
    {
    }
}

var_dump((new ReflectionClass("MyClass"))->getConstructor()->getParameters()[0]->getAttributes()[0]->newInstance());