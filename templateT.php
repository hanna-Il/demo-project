<?php
/**
 * @template T of Draft
 */
class footFighter {
    /** @var T */
    private $value;

    /** @param T $value */
    public function __construct($value) {
        $this->value = $value;
    }
}

/**
 * @template KT
 */

class footFighter {
    /** @return KT */
    public function getValue() {
        return $this->value;
    }
}