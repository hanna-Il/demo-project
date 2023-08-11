<?php

function foo(#[\JetBrains\PhpStorm\ObjectShape(['data' => ['another' => 'string']])] object $json) {
    $c = >$json->data->a;
}

#[\JetBrains\PhpStorm\ObjectShape(['data' => ['another' => 'string']])]
function func() {
}

func()->dd;

class AA {
    #[\JetBrains\PhpStorm\ObjectShape(["abc" => "int", "aa" => "string", "foo" => "Foo"])] private $f;

    function f() {
        $this->f->name;
    }
}

return f();