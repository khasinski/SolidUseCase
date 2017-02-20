<?php

namespace KHasinski;

abstract class Either
{
    abstract public function match($success, $failures = []);
}