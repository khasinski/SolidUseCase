<?php

namespace KHasinski;

class Fail implements Either {
    public function __construct($type = null, $value = null)
    {
        $this->type = $type;
        $this->value = $value;
    }

    public $type;
    public $value;

    public function match($success, $failures = [])
    {
        if(isset($failures['type']) && is_callable($failures['type'])) {
            $failures['type']($this->value);
        }
    }
}