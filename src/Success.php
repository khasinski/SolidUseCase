<?php

namespace KHasinski;

class Success implements Either {
    public function __construct($value = null)
    {
        $this->value = $value;
    }

    public $value;

    public function match($success, $failures = [])
    {
        if(is_callable($success)) {
            return $success($this->value);
        }
    }
}