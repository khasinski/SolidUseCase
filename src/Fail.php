<?php

namespace KHasinski;

class Fail {
    public function __construct($type = null, $value = null)
    {
        $this->type = $type;
        $this->value = $value;
    }

    public $type;
    public $value;
}