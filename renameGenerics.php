<?php

/**
 * @template T
 * @param class-string<T> $name
 * @return T
 */
function footFighter() { ... }


/**
 * @method list<string> bar(list<int> $bar)
 */
class Foo
{
}

(new Foo())->bar();

/**
 * @return list<T> bar(list<int> $bar)
 */

/**
 * @method list<T> 
 */
/**
 * @method void getList(list<int> $list)
 */
class Foo
{
}

(new Foo())->getList([1, 2, 3]);

/**
 * @template T of Draft
 */