<?php

namespace PHPUnit {

    use PHPUnit\Framework\Attributes\Group;
    use PHPUnit\Framework\TestCase;
    use PHPUnit\Framework\Attributes\TestWith;

    class SampleTest extends TestCase
    {

        /**
         * @param  $number
         * @return void
         */
        #[TestWith([0 => 1])]
        #[TestWith([0 => 2])]
        public function testSome($number)
        {
            self::assertEquals(1, $number);
        }
    }

}
