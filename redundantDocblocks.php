<?php

class H {
    private string $field;

    public function __construct(string $field, $mixed)
    {

        $this->field = $field;
    }
}

class D {
    private $obj;

    public function __construct(SomeType $obj)
    {
        $this->obj = $obj;
    }

    public function setObj(SomeOtherType $obj)
    {
        $this->obj = $obj;
    }


}


class R {

}

/**
 * @param int $a
 * @param string $b
 * @return int
 */
function myFunction(int $a, string $b): int
{
    return 0;
}


class StringCollection extends Collection
{
    public function offsetGet(mixed $key): string
    { /* … */ }
}

class UserCollection extends Collection
{
    public function offsetGet(mixed $key): User
    { /* … */ }
}


/**

 * This is a function.

 * @return void

 **/
function bar(): void {}

/**

 * @param string $text
 **/
function bar($text): void {}



/**
 * @param string $a
 * @param array|string|int $mixed
 * @return void
 */
function show(string $a, $mixed): void
{

}


public function __construct(string $field, $mixed)
{
}
