<?php

namespace PhpUnit;


use PHPUnit\Framework\Attributes\DataProvider;
use PHPUnit\Framework\Attributes\DataProviderExternal;
use PHPUnit\Framework\TestCase;

class DataProviderAttributesTest extends TestCase
{
    #[DataProviderExternal(MyDataProvider::class, "getData")]
    public function testMe($data) {
        var_dump($data);
        $this->assertTrue($data == 1);
    }
    public function getData() {
        return [[1,1], [2,2]];
    }
}

class MyDataProvider {
    public function getData() {
        return [[1,1], [2,2]];
    }
}

