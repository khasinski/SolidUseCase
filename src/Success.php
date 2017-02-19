<?php

namespace KHasinski;

class Success {
    public function __construct($value = null)
    {
        $this->value = $value;
    }

    public $value;
}