<?php
#[Attribute(Attribute::TARGET_PARAMETER)]
class C{}

class MyOldClass
{
    public function __construct(#[C] protected $indexName)
    {
    }
}

var_dump((new ReflectionClass("MyClass"))->getConstructor()->getParameters()[0]->getAttributes()[0]->newInstance());