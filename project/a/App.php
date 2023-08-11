<?php

namespace App;

use Illuminate\Support\Collection;

class Bar
{
}

interface Foo
{
    /**
     * @param Collection<int, Bar> $collection
     *
     * @return void
     */
    public function bar(Collection $collection): void;
}