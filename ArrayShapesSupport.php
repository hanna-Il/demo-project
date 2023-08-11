<?php

function foo()
{
    return [
        'key with spaces' => 1
    ];
}

$f = foo();
$k = $f['key'];